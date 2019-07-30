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
             <img src="{{asset('user/img/cmt_img.jpg')}}" style="margin: 10px 20px;">
         </div>
         <div class="content_cmt" style="margin-left: 1%;">
            <div class="cmt_hade">

             <h1>About Computer Technology!</h1>
         </div>
           <p>
The department of Computer Technology was established at Munshiganj Polytechnic Institute in 2006 This department offered 4 years Diploma-in-Engineering program under the Bangladesh Technical Education Board after 10 years schooling. The Department currently has roughly 15 faculty members (both full time and part time), 04 technical & support staff and 480 numbers of students (120 students per year, 60 for 1st and 60 for 2nd shift). In our admission criteria, there are 20% seats reserved for female student, 15% for Vocational and 5% for disable students.</p>

<p>After completion the Diploma-in-Engineering Program, students can go to Job market or higher education. For higher education they can admitted in Dhaka University of Engineering and Technology (DUET), Gazipur or any other private or public university in home or abroad for Bachelor degree program like Bachelor of Computer Science & Engineering or Bachelor of Computer Science or Bachelor of Information Technology etc. A Diploma Computer graduate works as a Sub-assistant Engineer in public & private organization.
The major job fields of a Computer Diploma Graduate are Computer Software & Hardware companies, Telecommunication companies, Teachers of TVET institutions, BPO industries, IT sector of all kind of Government and private organization as an IT Officer or Network support Engineer..</p>
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
