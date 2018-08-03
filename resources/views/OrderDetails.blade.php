
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Elite :: Home</title>
<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<script src="../css/jquery.min.js" type="text/javascript"></script>
<script src="../css/bootstrap.min.js" type="text/javascript"></script>
<style>
body {background:#f5f5f5 url("images/bg.jpg") no-repeat;}
.padding {padding:10px;}
 .container-fluid {padding:0px; padding-top:15px;}
.bg-img {width:auto; display:block;background-repeat: no-repeat, repeat;}
.white-bg {border-radius:10px;margin-bottom:30px;background:#fff; padding:30px 20px; margin-top:0px; transition:all 0.3s linear;-moz-transition:all 0.3s linear;-webkit-transition:all 0.3s linear;}
.white-bg:hover {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}

container-fluid {padding-top:0px !important;}
.header {background:#fff url("images/pattern.png") repeat-x;width:100%; height:70px; z-index:1000;}


label {
  display: block;
  padding-top:10px;
  text-align: left;
  font-weight:normal;
}
label .label-text {
  color: #666;
  cursor: text;
  font-size:18px;
  line-height:10px;
  -moz-transform: translateY(-34px);
  -ms-transform: translateY(-34px);
  -webkit-transform: translateY(-34px);
  transform: translateY(-34px);
  transition: all 0.3s;
}
label input {
  background-color: transparent;
  border: 0;
  border-bottom: 1px solid #ccc;
  font-size: 20px;
  letter-spacing: -1px;
  outline: 0;
  padding: 5px 10px;
  padding-left:0px;
  text-align: left;
  transition: all 0.3s;
  width:100%;
}

label input:focus + .label-text {
  color: #ddd;
  font-size: 13px;
  -moz-transform: translateY(-55px);
  -ms-transform: translateY(-55px);
  -webkit-transform: translateY(-55px);
  transform: translateY(-55px);
}
label input:valid + .label-text {
  font-size: 13px;
  -moz-transform: translateY(-55px);
  -ms-transform: translateY(-55px);
  -webkit-transform: translateY(-55px);
  transform: translateY(-55px);
}

.button {
  background-color: #fff;
  border: 1px solid #4175a5;
  border-radius: 27px;
  color:#4175a5;
  cursor: pointer;
  font-size: 16px;
  margin-top: 5px;
  padding: 6px 20px;
  text-transform: uppercase;
  transition: all 200ms;
}
.button:hover, button:focus {
  background-color: white;
  background:#4175a5;
  color: #fff;
  outline: 0;
}


p.thick {
    font-weight: bold;
}

.button1 {
  background-color: #fff;
  border: 2px solid #999;
  border-radius: 27px;
  color:#666;
  cursor: pointer;
  font-size: 16px;
  margin-top: 5px;
  padding: 6px 20px;
  text-transform: uppercase;
  transition: all 200ms;
}
.button1:hover, button1:focus {
  background-color: white;
  background:#888;
  color: #fff;
  outline: 0;
}
img {vertical-align:middle;}
.bg-red {background:#e31e24; color:#fff; text-align:center;}
.img-top-mrg {padding:6px; padding-top:7px;}
.book-btn {padding-left:30px;padding-right:30px;}
.img-opc:hover {opacity:0.6;cursor:pointer;}
.modal {display:block;}

.modal-content {border-radius:0px !important;background: #ed1c24; color:#fff;}
.carousel-indicators {bottom: -20px;}
.modal-backdrop.in {filter: alpha(opacity=90);opacity: 0.9;}
.table {color:#666;box-shadow:1px 1px 3px 1px #ccc; background:#fff;border-radius:10px;}
.table>tbody>tr>td {border-top:0px; padding:8px 12px;}
</style>

</head>

<body>
<script>
 $( document ).ready(function() {
  if (document.cookie.indexOf('visited=true') == -1){
    // load the overlay
  $('#myModal').modal({show:true});
   var year = 1000*60*60*24*365;
  var expires = new Date((new Date()).valueOf() + year);
  document.cookie = "visited=true;expires=" + expires.toUTCString();
  }
 }); 

</script>
<div class="container-fluid header" style="padding-top:0px;">
<div class="container">
 <div class="col-md-12">
 <div class="col-md-6"><a href="http://www.rupeeboss.com/elite/" target="_blank"><img src="http://localhost:8000/images/elite-bg-logo.png" class="pull-left img-top-mrg img-responsive" width="100"/></a></div>
 <div class="col-md-6"><a href="#"><img src="http://localhost:8000/images/Reliance.png" class="pull-right img-top-mrg img-responsive"/></a></div>
 </div>
</div>
</div>

 <div class="container"><h3 style="margin-top:0px; padding:8px;color:#fff; background:#ed1c24; font-size:22px;text-align:center;margin-bottom:15px;">Order Details</h3></div>
<div class="container">
<div class="row">
<div class="col-md-12">

<form id="order_details" name="order_details" style="text-align:center; " class="form-horizontal"> 
 {{csrf_field()}} 
 @foreach($data as $val)



<div class="col-md-4 col-xs-12 col-sm-12">
 <table class="table">
  <tr>
    <td><input type="hidden" name="product_name" id="product_name" required /><p class="thick" style="" >{{$val->product_name}}</p></td>
    <td><input type="hidden" name="amount" id="amount" required /><p  class="thick">&#8377;:{{$val->amount}}</p></td>
  </tr>

  <tr>
    <td><input type="hidden" name="order_id" id="order_id" required />
 <div class="label-text">Order ID:{{$val->order_id}}</div></td>
    <td></td>
  </tr>

  <tr>
    <td><input type="hidden" name="customer_name" id="customer_name" required />
 <div class="label-text">Customer:{{$val->customer_name}}</div></td>
    <td></td>
  </tr>

  <tr>
    <td><input type="hidden" name="payment_date" id="payment_date" required />
 <p  class="thick"  class="label-text">{{$val->payment_date}}</p></td>


    <td><input type="hidden" name="order_status" id="order_status"  required />
  <p class="thick">{{$val->order_status}}</p></td>
  </tr>

  <tr>
    <td colspan="2" style="border-top:1px solid #ddd;"><input type="hidden" name="payment_status" id="payment_status"  required />
  <div class="label-text">Payment Status :{{$val->payment_status}}</div></td>
    
  </tr>

  
 </table>
 </div>

 @endforeach
</form>
</div>
</div>
</div>
</body>
</html>