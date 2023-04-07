<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Category;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['categories'] = Category::orderBy('id','asc')->get();
        $data['category_offers'] = Category::orderBy('id','asc')->paginate(4);
        $data['about_us'] = AboutUs::first();
        return view('frontend.layouts.front_template', $data);
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
        return('test');
    }

    public function singleCategory($id = null){
        return 'test';
    }
}
