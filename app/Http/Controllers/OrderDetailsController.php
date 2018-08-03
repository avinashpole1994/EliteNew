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
class OrderDetailsController  extends BaseController{
public function get_oder_details($user_id){	
$query=DB::select("call view_sales_orders(?)",array($user_id));
return view('OrderDetails',['data'=>$query]);
}
}