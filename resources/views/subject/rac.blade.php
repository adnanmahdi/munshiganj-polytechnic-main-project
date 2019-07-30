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
        <div class="all_cmt" style="margin: auto;">

         <div class="cmt_img" style="float: left;">
             <img src="{{asset('user/img/rac.jpg')}}" style="margin: 10px 20px;">
         </div>
         <div class="content_cmt" style="margin-left: 1%;">
            <div class="cmt_hade">

             <h1>About Refrigeration & Air Conditioning  Technology!</h1>
         </div>
           <p>
Refrigeration & Air Conditioning Technology has had a large impact on industry, lifestyle, agriculture and settlement patterns. The idea of preserving food dates back to the ancient Roman and Chinese empires. However, refrigeration technology has rapidly evolved in the last century, from ice harvesting to temperature-controlled rail cars.Comfort applications aim to provide a building indoor environment that remains relatively constant despite changes in external weather conditions or in internal heat loads.Air conditioning makes deep plan buildings feasible, for otherwise they would have to be built narrower or with light wells so that inner spaces received sufficient outdoor air via natural ventilation. Air conditioning also allows buildings to be taller, since wind speed increases significantly with altitude making natural ventilation impractical for very tall buildings.</p>

<p>Our students are doing very good result and they are holding top positions in merit list of Bangladesh Technical Education Board . Every semester a large number of students get stipend provided by DTE . Graduates from this department are playing very important role to improve and comfort people’s daily life on their respective field throughout the country.

They are occupying leadership on their own field ..</p>
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
