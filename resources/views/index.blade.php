<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Elite :: Home</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="css/jquery.min.js" type="text/javascript"></script>
<script src="css/bootstrap.min.js" type="text/javascript"></script>

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
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <!-- <h4 class="modal-title">About US</h4> -->
      </div>
      <div class="modal-body">
	  
	  
	  
	  
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
	<h4 class="text-center">About Us</h4>
      <p>As an organization, we firmly believe that our customers are the driving force behind our success, 
	  which is why we Welcome you, our esteemed customer to be a part of an exclusive circle, the Landmark Elite Programme
Welcome to the World of Landmark Elite Programme - an exclusive world of richer experiences 
curated to enhance your service experience.We are hopeful that with this initiative, everything you have come to 
appreciate about Landmark Group, will be raised to new heights of increasingly remarkable experiences.
As an Elite Customer, you would benefit from a range of extended services that we believe reinforces our 
commitment in making your experience with us a lot more rewarding.</p>
    </div>

    <div class="item">
      <p>As an organization, we firmly believe that our customers are the driving force behind our success, 
	  which is why we Welcome you, our esteemed customer to be a part of an exclusive circle, 
	  the Landmark Elite ProgrammeWelcome to the World of Landmark Elite Programme - an exclusive world of 
	  richer experiences curated to enhance your service experience.</p>
    </div>

    <div class="item">
      <p>As an organization, we firmly believe that our customers are the driving force behind our success, 
	  which is why we Welcome you, our esteemed customer to be a part of an exclusive circle, 
	  the Landmark Elite ProgrammeWelcome to the World of Landmark Elite Programme - an exclusive world of 
	  richer experiences curated to enhance your service experience.</p>
    </div>
  </div>

  
</div>




      </div>
    
    </div>

  </div>
</div>




<div class="container-fluid header" style="padding-top:0px;">

<div class="container">
 <div class="col-md-12">
 <div class="col-md-6"><a href="http://www.rupeeboss.com/elite/" target="_blank"><img src="images/elite-bg-logo.png" class="pull-left img-top-mrg img-responsive" width="100"/></a></div>
 <div class="col-md-6"><a href="#"><img src="images/Reliance.png" class="pull-right img-top-mrg img-responsive"/></a></div>
 </div>
</div>
</div>

 <div class="container"><h3 style="margin-top:0px; padding:8px;color:#fff; background:#ed1c24; font-size:22px;text-align:center;margin-bottom:15px;">Reliance General Insurance</h3></div>
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<form class="white-bg col-xs-12 col-sm-12">
 <!--  <label class="col-md-6">
    <input type="text" required />
    <div class="label-text">Select City</div>
  </label> -->



   <div class="col-md-6 col-xs-12">
   <div class="mrg-btmm">
    <select class="form-control select-sty" name="cityname" id="cityname">    
    </select>
   </div>
   </div>


  <label class="col-md-6">
    <input type="text" required />
    <div class="label-text">RTO Location</div>
  </label>

 <div class="col-md-12 text-center"> <br><p>Required Service Documents:</p>
  <!-- <a type="button" class="button" Value="Click Here"  href="https://rupeeboss.com">Click Here</a> -->
  <input type="button" class="button"  Value="Click Here" /></div> 
 <div class="col-md-8 col-md-offset-2">
 <br>
  
  <table class="table table-striped table-bordered">
  <tr>
    <th colspan="2" class="bg-red padding">Duplicate RC For Make BMW, AUDI, MERCEDES, JAGUAR</th>
  </tr>
  <tr>
    <td class="text-center"><b>Charges:</b> Rs. 6500 </td>
    <td class="text-center"><b>TAT:</b> 45 Days</td>
  </tr> 
</table>

<table class="table table-striped table-bordered">
  <tr>
    <td class="text-center"><img src="images/doc.png"/></td>
    <td class="text-center"><b>Document 1</b></td>
	<td class="text-center"><img src="images/doc_img.png" class="img-opc"/></td>
  </tr>
  <tr>
    <td class="text-center"><img src="images/doc.png"/></td>
    <td class="text-center"><b>Document 2</b></td>
	<td class="text-center"><img src="images/doc_img.png" class="img-opc"/></td>
  </tr>
  <tr>
    <td class="text-center"><img src="images/doc.png"/></td>
    <td class="text-center"><b>Document 3</b></td>
	<td class="text-center"><img src="images/doc_img.png" class="img-opc"/></td>
  </tr>
  <tr>
    <td class="text-center"><img src="images/doc.png"/></td>
    <td class="text-center"><b>Document 4</b></td>
	<td class="text-center"><img src="images/doc_img.png" class="img-opc"/></td>
  </tr>
 
</table>
 </div>
 
 <div class="col-md-12 text-center"><input type="button" class="button1" Value="BOOK NOW" /></div>
</form>
</div>



</div>
</div>






<script type="text/javascript">
  $.ajax({ 
 url: "{{URL::to('getcity')}}",
 method:"GET",
 success: function(datas)  
 {
 var data=$.parseJSON(datas);
  console.log(data);
 if(data)
 { $.each(data, function( index, value ) {
 $('#cityname').append('<option value="'+value.cityname+'">'+value.cityname+'</option>');
 }); 
 }else{
  $('#cityname').empty().append('No Result Found');
  }
  },
  });
</script>

</body>

</html>