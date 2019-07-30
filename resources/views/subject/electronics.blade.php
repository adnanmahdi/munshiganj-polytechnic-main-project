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
             <img src="{{asset('user/img/elcs.jpg')}}" style="margin: 10px 20px;">
         </div>
         <div class="content_cmt" style="margin-left: 1%;">
            <div class="cmt_hade">

             <h1>About Electronics Technology!</h1>
         </div>
           <p>
 

Electronics Technology is an instructional program that prepares individuals to apply basic electronic principles and technical skills to the production, calibration, estimation, testing, assembling, installation and maintenance of electronic equipment.  Emphasis is on passive components and solid-state devices; digital circuits; optoelectronic devices; operational amplifiers; audio and RF amplifiers; oscillators; power supplies; and AM, FM and PCM modulators.  Knowledge is acquired through theoretical instruction, experimentation and hands-on activities. Instruction will develop basic levels of knowledge, understanding and associated skills essential for entry-level employment in communications, industrial electronics, digital processing, robotics, avionics, biomedical technology and other electronics occupations.  Through collaborative curriculum planning with colleges and trade schools, students who participate in this Program are eligible to obtain up to 12 credits advanced standing in a post-secondary program.  This Program participates in the Electronics Technicians Association, International Student Certification Program. The Program consists of a list of PDE required tasks and additional local or value added tasks.</p>
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
