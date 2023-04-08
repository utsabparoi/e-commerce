<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['category_offers'] = Category::orderBy('id','asc')->paginate(4);

        return view('frontend.welcome', $data);
    }


// function livesearch(Request $request){
//     $term = $request->get('term');
//     $data = DB::table('products')->where("product_name","LIKE","%$term%")->get()->toArray();
//     //dd($data);
//     $output = array();
//      if(count($data) > 0) {
//       foreach($data as $row) {
//         //dd($row);
//        $temp_array = array();
//        $image_path = asset('/uploads/products/').'/'.$row->product_row_id.'/thumbnail/'.$row->product_image;
//        $temp_array['id'] = $row->product_row_id;
//        $temp_array['value'] = $row->product_name;
//        $temp_array['label'] = '<img src='.$image_path.' width="70" />&nbsp;&nbsp;&nbsp;'.$row->product_name.'';
//        $output[] = $temp_array;
//       }
//      }
//      else
//      {
//       $output['value'] = '';
//       $output['label'] = 'No Record Found';
//      }

//     echo json_encode($output);
//     //return response()->json($data);
// }

    public function aboutUs(){
        $data['categories'] = Category::orderBy('id','asc')->get();
        $data['about_us'] = AboutUs::first();
        return view('frontend.pages.about_us', $data);
    }

    public function singleCategory($id){
        // $cat_id = Category::find($id);
        // $data['categories'] = Category::orderBy('id','asc')->get();
        $data['category_info'] = Product::with('category')->where('status', 1)->where('category_id', $id)->get();
        $data['popular_categories'] = Category::orderBy('id','asc')->paginate(9);
        return view('frontend.pages.single-category', $data);
    }
}

