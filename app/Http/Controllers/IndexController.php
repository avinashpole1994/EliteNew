<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Session;
use Redirect;
use DB;

class IndexController extends BaseController{

  public function get_city(){
     $city = DB::select("call usp_load_city_list()");
    // print_r( $city);exit();
    echo json_encode($city);
 }
     public function index()
     {
     	return view('index');
     }

     public function login_elite(){
          return view('login-elite');
     }

     public function Services(Request $request){

          if(!$request->session()->exists('username')){
              return redirect('/');
          }else{
              return view('Services');
          }
     }

     /*public function service_product($cate_id){

     	return view('service_product',['cate_id'=>$cate_id]);
     }*/

     public function service_product($cate_id){

          if(!Session::exists('username')){
               return redirect('/');
          }else{

               $query=DB::select("call get_service_products(?)",array($cate_id));

               if($query){
                     return view('service_product',['cate_id'=>$cate_id,'data'=>$query]);
               }else{
                    return redirect('/dashboard');
               }
              
          }
          
     }

     public function non_rto_services(){

          return view('non-rto-services');
     }
}
