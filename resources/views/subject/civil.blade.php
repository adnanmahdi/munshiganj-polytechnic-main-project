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
             <img src="{{asset('user/img/civil.jpg')}}" style="margin: 10px 20px;">
         </div>
         <div class="content_cmt" style="margin-left: 1%;">
            <div class="cmt_hade">

             <h1>About Civil Technology!</h1>
         </div>
           <p>
Civil engineering is a professional engineering discipline that deals with the design, construction, and maintenance of the physical and naturally built environment, including public works such as roads, bridges, canals, dams, airports, sewerage systems, pipelines, structural components of buildings, and railways.[1][2]

Civil engineering is traditionally broken into a number of sub-disciplines. It is considered the second-oldest engineering discipline after military engineering,[3] and it is defined to distinguish non-military engineering from military engineering.[4] Civil engineering takes place in the public sector from municipal through to national governments, and in the private sector from individual homeowners through to international companies..</p>

<p>Civil engineering as a discipline
Civil engineering is the application of physical and scientific principles for solving the problems of society, and its history is intricately linked to advances in the understanding of physics and mathematics throughout history. Because civil engineering is a wide-ranging profession, including several specialized sub-disciplines, its history is linked to knowledge of structures, materials science, geography, geology, soils, hydrology, environment, mechanics and other fields.

Throughout ancient and medieval history most architectural design and construction was carried out by artisans, such as stonemasons and carpenters, rising to the role of master builder. Knowledge was retained in guilds and seldom supplanted by advances. Structures, roads, and infrastructure that existed were repetitive, and increases in scale were incremental.[5]

One of the earliest examples of a scientific approach to physical and mathematical problems applicable to civil engineering is the work of Archimedes in the 3rd century BC, including Archimedes Principle, which underpins our understanding of buoyancy, and practical solutions such as Archimedes' screw. Brahmagupta, an Indian mathematician, used arithmetic in the 7th century AD, based on Hindu-Arabic numerals, for excavation (volume) computations.[6]</p>
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
