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
             <img src="{{asset('user/img/electrical.jpg')}}" style="margin: 10px 20px;">
         </div>
         <div class="content_cmt" style="margin-left: 1%;">
            <div class="cmt_hade">

             <h1>About Electrical Technology!</h1>
         </div>
           <p>
Electricity was first discovered in the 1700s by Benjamin Franklin who performed the first electricity experiment in history. Since then, many others including Ampere, Faraday, Ohm, and Oersted managed to develop simple electrical devices after having understood the basic electrical principles. Much later, in 1904, Fleming’s diode opened a new horizon for the advent of electronic components.</p>

<p>On the other hand, Electrical department started their journey namely electrical technology at Munshiganj polytechnic Institute in 2006 (approx.). According to the rule of Bangladesh technical education board, Students get admission for four years diploma in Engineering program in the department after 10 years schooling. There are 18 faculty members, 9 technical and supporting staffs in this department. We have 4(four) well arrange and equipped modern lab .In every year 360 students are enrolled for both 1st and 2nd shift.</p>

<p>After completion the Diploma-in-Engineering program, Students can go to job market or higher Education. For higher Education they can get admission in Dhaka University of Engineering and Technology (DUET), Gazipur or any other private or public University in home or aboard .They also gets admission for BSC in technical education degree in TTTC under the University of Dhaka.  The major job market of Electrical Diploma Graduates as a Sub-assistant Engineer in Electrical Power sector. They have also access in Electrical based industry such as Pharmaceutical industry, Re-rolling industry as well as all type of industries.</p>

<p>Electrical Technology involves the maintenance, installation, testing and connection of electrical systems. Electrical work takes place in factories, industrial buildings, residential properties and other facilities. Learn how to work with the electrical systems of mechanical equipment used in businesses and industries. Construction Electricians read blueprints to install and maintain a building’s electrical system.</p>
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
