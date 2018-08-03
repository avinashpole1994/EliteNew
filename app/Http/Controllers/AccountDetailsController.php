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

class AccountDetailsController  extends BaseController{

  public function get_account_details($user_id){
  //$query=DB::select("call view_sales_orders('7')");
  
   // $query=DB::select('call view_sales_orders(?)',[$req->user_id]);
   // echo json_encode($query);
  $query=DB::select("call view_account_details(?)",array($user_id));
 
  return view('account-details',['data'=>$query]);


 }
}