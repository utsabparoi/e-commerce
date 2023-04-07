<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Traits\FileSaver;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    use FileSaver;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with(['category'])->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ddd($request);
        //Validate data
        $validate = Validator::make($request->all(), [
            'category_id' => 'required|numeric',
            'sku' => 'required|string|max:100|unique:products',
            'name' => 'required|string|max:200',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:1024',
            'cost_price' => 'required|numeric',
            'retail_price' => 'required|numeric',
            'description' => 'required|max:200',
            'status' => 'required|numeric'
        ]);
        // Error response
        if ($validate->fails()){
            return response()->json([
                'success' =>false,
                'errors' => $validate->errors()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $this->storeOrUpdate($request);
        return redirect()->route('products.index')->with('success','Added Success');
        flash('Product Created Successfully')->success();

        return response()->json([
            'success' =>true,
        ], Response::HTTP_OK);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with(['category'])
        ->where('id', $id)
        ->first();

        return view('products.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id', $id)->first();

        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validate data
        $validate = Validator::make($request->all(), [
            'category_id' => 'required|numeric',
            'sku' => 'required|string|max:100|unique:products,sku,'.$id,
            'name' => 'required|string|max:200',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:1024',
            'cost_price' => 'required|numeric',
            'retail_price' => 'required|numeric',
            'description' => 'required|max:200',
            'status' => 'required|numeric'
        ]);
        // Error response
        if ($validate->fails()){
            return response()->json([
                'success' =>false,
                'errors' => $validate->errors()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $this->storeOrUpdate($request,$id);

        flash('Product Updated Successfully')->success();
        return response()->json([
            'success' =>true,
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if(file_exists($product->image))
        {
            unlink($product->image);
        }
        $product->delete();
        flash('Product Deleted Successfully')->success();
        return back();
    }

    //Handle AJAX request
    public function getProductsJson(){
        $products = Product::get();

        return response()->json([
            'success' => true,
            'data' => $products
        ], Response::HTTP_OK);
    }

    private function storeOrUpdate($request, $id = null)
    {
        try {
            $products = Product::updateOrCreate([
                'id'             => $id,
            ],[
                'user_id'        => Auth::id(),
                'category_id'    => $request->category_id,
                'name'           => $request->name,
                'sku'            => $request->sku,
                'cost_price'     => $request->cost_price,
                'retail_price'   => $request->retail_price,
                'description'    => $request->description,
                'status'         => $request->status == 'on' ? 1 : 0,
            ]);
            $this->uploadFileWithResize($request->image, $products, 'image', 'images/products', 300, 280);

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
