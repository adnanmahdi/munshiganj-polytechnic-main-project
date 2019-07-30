@extends('welcome')
@section('content')
<div class="container">

    <div class="row">
        <style type="text/css">
            
   .cmt_hade{
    background-color: #5FA4E7;
    display: inline-block;
  padding: 0px 20px;
margin-top: 10px;
margin-bottom: 10px;
transform:skew(40deg);
margin-left: 10px;


   }

          
   .cmt_hade h1{
    transform:skew(-40deg);
display: block;
color: #fff;
font-family: 'Raleway', sans-serif;


   }
p{


    font-family: 'Raleway', sans-serif;
}
.star{

    text-align: center;

}
.star li{
 
    display: inline-block;
}

.star a{
font-size: 20px;
color: green;

}



        </style>
        <?php
    $all_principal_info = DB::table('tbl_principal')->orderBy('principal_id', 'desc')
  ->limit(1)
    ->get();

?>
        <div class="all_cmt" style="margin: auto;">
             <div class="cmt_hade">

             <h1>Messages from Principal</h1>
         </div>
           @foreach($all_principal_info as $v_pricipal )
         <div class="cmt_img" style="float: left;">
             <img src="{{URL::to($v_pricipal->principal_image)}}" style="margin: 10px 20px; height: 270px; width: 330px;border: 4px solid gray; border-style: double;">
         </div>
         <div class="content_cmt" style="margin-left: 1%;">
           
           <p>
{{$v_pricipal->add_principal}}</p>

@endforeach


<div class="star">
    <li><a><i class="fa fa-star"></i></a></li>
    <li><a><i class="fa fa-star"></i></a></li>
    <li><a><i class="fa fa-star"></i></a></li>
    <li><a><i class="fa fa-star"></i></a></li>
    <li><a><i class="fa fa-star"></i></a></li>
    <li><a><i class="fa fa-star"></i></a></li>
    <li><a><i class="fa fa-star"></i></a></li>
    <li><a><i class="fa fa-star"></i></a></li>
    <li><a><i class="fa fa-star"></i></a></li>
    <li><a><i class="fa fa-star"></i></a></li>
    <li><a><i class="fa fa-star"></i></a></li>
    <li><a><i class="fa fa-star"></i></a></li>
    

    </div>

         </div>
      </div>

    </div>



</div>

@endsection
