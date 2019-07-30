@extends('welcome')
@section('content')

<?php
        
$all_news_info = DB::table('tbl_news')->orderBy('news_id', 'desc')
  ->limit(2)
    ->get();
        
    
    ?>

<?php
        
$all_notice_info = DB::table('tbl_notice')

    ->get();
        
    
    ?>

<?php

$all_wlc_info = DB::table('tbl_wlc')->orderBy('wlc_id', 'desc')
    ->limit(1)
    ->get();

     ?>
<?php


$all_principal_info = DB::table('tbl_principal')->orderBy('principal_id', 'desc')
  ->limit(1)
    ->get();

?>
<?php


$all_vprincipal_info = DB::table('tbl_vprincipal')->orderBy('vprincipal_id', 'desc')
  ->limit(1)
    ->get();

?>

<?php
    $all_form_info = DB::table('tbl_form')->orderBy('form_id', 'desc')
    ->limit(4)
    ->get();



?>



<!-- End Top Menu -->
<!-- === END HEADER === -->
<!-- === BEGIN CONTENT === -->
<div id="content">
    <div class="container no-padding">
        <div class="row">
            <!-- Carousel Slideshow -->
            <div id="carousel-example" class="carousel slide" data-ride="carousel">
                <!-- Carousel Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example" data-slide-to="1"></li>
                    <li data-target="#carousel-example" data-slide-to="2"></li>
                    <li data-target="#carousel-example" data-slide-to="3"></li>

                </ol>
                <?php
                        $slider=DB::table('tbl_slider')->orderBy('slider_id', 'desc')
                        
                        ->where('publication_status',1)
                          ->limit(3)
                        ->get();                        
                        
                        ?>
                <style type="text/css">
                    li {


                        list-style: none;


                    }

                    .los li {
                        margin-bottom: 10px;
                        border-bottom: 1px solid gray;

                    }

                    .welcome_area {}

                    [class^="fa-"]:before,
                    [class*=" fa-"]:before {
                        font-family: FontAwesome;
                        font-style: normal;
                        font-weight: normal;
                        line-height: 1;
                        -webkit-font-smoothing: antialiased;
                        -moz-osx-font-smoothing: grayscale;
                        padding-right: 10px;
                        color: #333333;
                    }

                </style>

                <div class="clearfix"></div>
                <!-- End Carousel Indicators -->
                <!-- Carousel Images -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{URL::to('user/img/mumgate.jpg')}}" style="height: 69vh; width: 100%;background-size: cover;">
                    </div>
                    @foreach($slider as $v_slider)
                    <div class="item">
                        <img src="{{URL::to($v_slider->slider_image)}}" style="height:69vh;
                                        width: 100%;background-size: cover;background-position: center center;position: relative;">
                    </div>
                    @endforeach
                </div>
                <!-- End Carousel Images -->
                <!-- Carousel Controls -->

                <!-- End Carousel Controls -->
            </div>
            <!-- End Carousel Slideshow -->

        </div>

    </div>
    <div class="container background-gray-lighter">
        <div class="row">
            <div class="nav" style="height:40px; weidth:100%; background-color: /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#d0e4f7+0,0a77d5+12,0a77d5+12,73b1e7+24,0a77d5+37,0a77d5+56,539fe1+67,539fe1+81,87bcea+95 */
background: rgb(208,228,247); /* Old browsers */
background: -moz-linear-gradient(45deg,  rgba(208,228,247,1) 0%, rgba(10,119,213,1) 12%, rgba(10,119,213,1) 12%, rgba(115,177,231,1) 24%, rgba(10,119,213,1) 37%, rgba(10,119,213,1) 56%, rgba(83,159,225,1) 67%, rgba(83,159,225,1) 81%, rgba(135,188,234,1) 95%); /* FF3.6-15 */
background: -webkit-linear-gradient(45deg,  rgba(208,228,247,1) 0%,rgba(10,119,213,1) 12%,rgba(10,119,213,1) 12%,rgba(115,177,231,1) 24%,rgba(10,119,213,1) 37%,rgba(10,119,213,1) 56%,rgba(83,159,225,1) 67%,rgba(83,159,225,1) 81%,rgba(135,188,234,1) 95%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(45deg,  rgba(208,228,247,1) 0%,rgba(10,119,213,1) 12%,rgba(10,119,213,1) 12%,rgba(115,177,231,1) 24%,rgba(10,119,213,1) 37%,rgba(10,119,213,1) 56%,rgba(83,159,225,1) 67%,rgba(83,159,225,1) 81%,rgba(135,188,234,1) 95%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d0e4f7', endColorstr='#87bcea',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
; color: #fff; font-family: 'Raleway', sans-serif;">
                <span style=" line-height: 40px; font-size:24px;position: absolute;background-color:#EBEBEB;color:#337AB7;padding: 0px 10px;">Latest News</span>

                <marquee direction="left" style="margin-top: 10px; font-size:18px;margin-left: 150px;font-family: 'Raleway', sans-serif;  " behavior="scroll" direction="up" scrollamount="4" onmouseover="this.stop()" onmouseout="this.start()">



                    @foreach($all_news_info as $v_news)
                    {{$v_news->add_news}}***

                    @endforeach


                </marquee>


            </div>
        </div>
    </div>
    <div class="container">
        <div class="row margin-vert-30">
            <!-- Main Text -->
            <div class="col-md-9 ">

                <!-- Portfolio -->



                <div class="welcome_area" style="font-family: 'Raleway', sans-serif;">

                    <h2 style="font-size: 30px;">WELCOME TO MUNSHIGANJ POLYTECHNIC  INSTITUTE.</h2>
                    <div class="col-md-5">
                        @foreach($all_wlc_info as $v_wlc)
                        <div class="wlc_img">
                            <img src="{{URL::to($v_wlc->wlc_image)}}" style="margin: 2px; border:2px solid #337AB7; border-style: dotted;">
                        </div>
                    </div>

                    <p style="padding: 20px;">{{$v_wlc->add_wlc}}</p>
                    @endforeach
                    <a href="{{URL::to('/campus')}}" style="padding: 5px 20px; background-color: #337AB7;color: #fff; border-radius: 20px;">Read more</a>

                </div>
                <!-- principal --------------------------------------------------------------------->

                <div class="col-md-6" style="font-family: 'Raleway', sans-serif;">
                    <div class="principal" style="min-height: 50vh; max-height: 50vh;overflow-y: scroll;margin-bottom: 30px;">
                        <h4 class="text-center">PRINCIPAL'S MESSAGE</h4>
                        <div class="col-md-6">

                            @foreach($all_principal_info as $v_pricipal)
                            <div class="principal_img">
                                <img src="{{URL::to($v_pricipal->principal_image)}}">
                            </div>
                        
                        </div>

                        <p style="text-align: left;">{{$v_pricipal->add_principal}}</p>
                        @endforeach
                        <a href="{{URL::to('/principal')}}" style="padding: 5px 20px; background-color: #337AB7;color: #fff; border-radius: 20px;">Read more</a>

                        <!-- End Portfolio -->
                    </div>
                </div>


                <!-- vices ----------------------------------------->
                <div class="col-md-6" style="font-family: 'Raleway', sans-serif;">
                    <div class="principal" style="min-height: 50vh; max-height: 50vh;overflow-y:scroll; margin-bottom: 30px;">
                        <h4 class="text-center">VICE PRINCIPAL'S MESSAGE</h4>
                        <div class="col-md-6">
                            @foreach($all_vprincipal_info as $v_pricipal)
                            <div class="principal_img">
                                <img src="{{URL::to($v_pricipal->vprincipal_image)}}">
                            </div>
                        </div>

                        <p style="text-align: left; ">{{$v_pricipal->add_vprincipal}}</p>
                        @endforeach
                        <a href="{{URL::to('/principal_v')}}" style="padding: 5px 20px; background-color: #337AB7;color: #fff; border-radius: 20px;">Read more</a>

                        <!-- End Portfolio -->

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <!-- Recent Posts -->
                <div class="panel panel-default" style="font-family: 'Raleway', sans-serif;box-shadow: 0px 6px 8px 9px #ccc;">
                    <div class="panel-heading" style="text-align: center; background-color:/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#3b679e+0,207cca+17,207cca+17,2b88d9+17,2e4bea+43,7db9e8+51 */
background: rgb(59,103,158); /* Old browsers */
background: -moz-linear-gradient(-45deg,  rgba(59,103,158,1) 0%, rgba(32,124,202,1) 17%, rgba(32,124,202,1) 17%, rgba(43,136,217,1) 17%, rgba(46,75,234,1) 43%, rgba(125,185,232,1) 51%); /* FF3.6-15 */
background: -webkit-linear-gradient(-45deg,  rgba(59,103,158,1) 0%,rgba(32,124,202,1) 17%,rgba(32,124,202,1) 17%,rgba(43,136,217,1) 17%,rgba(46,75,234,1) 43%,rgba(125,185,232,1) 51%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(135deg,  rgba(59,103,158,1) 0%,rgba(32,124,202,1) 17%,rgba(32,124,202,1) 17%,rgba(43,136,217,1) 17%,rgba(46,75,234,1) 43%,rgba(125,185,232,1) 51%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3b679e', endColorstr='#7db9e8',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
;color: #fff;">
                        <h3 class="panel-title" style="font-family: 'Raleway', sans-serif;"> <i class="fa fa-spinner fa-spin"></i>&nbsp;&nbsp;NOTICE BOARD</h3>
                    </div>
                    <div class="panel-body">
                        <marquee style="text-align: center;height: 243px;" behavior="scroll" direction="up" scrollamount="4" onmouseover="this.stop()" onmouseout="this.start()">
                            < @foreach($all_notice_info as $v_news) <p>
                                {{$v_news->add_notice}}<br>
                                <p>{{$v_news->notice_date}}</p> <a href="{{URL::to('/notice')}}">show all notice</a>
                                <hr>
                                </p>

                                @endforeach

                        </marquee>
                    </div>
                </div>
                <!-- End recent Posts -->
                <!-- About -->
                <div class="panel panel-default" style="font-family: 'Raleway', sans-serif;box-shadow: 0px 6px 8px 9px #ccc;">
                    <div class="panel-heading" style="background-color:/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#3b679e+0,207cca+17,207cca+17,2b88d9+17,2e4bea+43,7db9e8+51 */
background: rgb(59,103,158); /* Old browsers */
background: -moz-linear-gradient(-45deg,  rgba(59,103,158,1) 0%, rgba(32,124,202,1) 17%, rgba(32,124,202,1) 17%, rgba(43,136,217,1) 17%, rgba(46,75,234,1) 43%, rgba(125,185,232,1) 51%); /* FF3.6-15 */
background: -webkit-linear-gradient(-45deg,  rgba(59,103,158,1) 0%,rgba(32,124,202,1) 17%,rgba(32,124,202,1) 17%,rgba(43,136,217,1) 17%,rgba(46,75,234,1) 43%,rgba(125,185,232,1) 51%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(135deg,  rgba(59,103,158,1) 0%,rgba(32,124,202,1) 17%,rgba(32,124,202,1) 17%,rgba(43,136,217,1) 17%,rgba(46,75,234,1) 43%,rgba(125,185,232,1) 51%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3b679e', endColorstr='#7db9e8',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
;text-align: center;color: #fff; ">
                        <h3 class="panel-title"><span class="fa-download" style="color:#fff;"></span>FORM DOWNLOAD</h3>
                    </div>
                    <div class="panel-body" style="font-family: 'Raleway', sans-serif;">
                        @foreach($all_form_info as $v_form)
                        <i class="fa fa-file-pdf-o">&nbsp;&nbsp;&nbsp; </i>
                        <a href="{{$v_form->form_file}}" style="font-family: 'Raleway', sans-serif;">{{$v_form->add_form}}</a><span style="color: green"><sup style="margin: 10px;">{{$v_form->form_date}}</sup></span><br>
                        @endforeach
                        <div class="forms" style="text-align: center; margin-top: 10px;">
                            <a href="{{URL::to('/form')}}" style="padding: 5px 20px; background-color: #337AB7;color: #fff; border-radius: 20px; margin-bottom: 20px">Show all form</a>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default" style="font-family: 'Raleway', sans-serif;box-shadow: 0px 6px 8px 9px #ccc;">
                    <div class="panel-heading" style="background-color:/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#3b679e+0,207cca+17,207cca+17,2b88d9+17,2e4bea+43,7db9e8+51 */
background: rgb(59,103,158); /* Old browsers */
background: -moz-linear-gradient(-45deg,  rgba(59,103,158,1) 0%, rgba(32,124,202,1) 17%, rgba(32,124,202,1) 17%, rgba(43,136,217,1) 17%, rgba(46,75,234,1) 43%, rgba(125,185,232,1) 51%); /* FF3.6-15 */
background: -webkit-linear-gradient(-45deg,  rgba(59,103,158,1) 0%,rgba(32,124,202,1) 17%,rgba(32,124,202,1) 17%,rgba(43,136,217,1) 17%,rgba(46,75,234,1) 43%,rgba(125,185,232,1) 51%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(135deg,  rgba(59,103,158,1) 0%,rgba(32,124,202,1) 17%,rgba(32,124,202,1) 17%,rgba(43,136,217,1) 17%,rgba(46,75,234,1) 43%,rgba(125,185,232,1) 51%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3b679e', endColorstr='#7db9e8',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
;color: #fff; text-align: center; ">
                        <h3 class="panel-title"><span class="fa-chain" style="color:#fff;"></span>IMPORTANT LINK</h3>
                    </div>
                    <div class="panel-body los">

                        <li>
                            <i class="fa fa-external-link"></i> &nbsp;
                            <a href="http://www.techedu.gov.bd/" target="-blank">Directorate Of Primary Education</a>
                        </li>
                        <li>
                            <i class="fa fa-external-link"></i> &nbsp;
                            <a href="http://www.bteb.gov.bd/" target="-blank">Bangladesh Technical Education Board (BTEB)</a>
                        </li>
                        <li>
                            <i class="fa fa-external-link"></i> &nbsp;
                            <a href="https://moedu.gov.bd/" target="-blank">Ministry of Education</a>
                        </li>
                        <li>
                            <i class="fa fa-external-link"></i> &nbsp;
                            <a href="http://www.step-dte.gov.bd/" target="-blank">Skills and Training Enhancement Project</a>
                        </li>
                        <li>
                            <i class="fa fa-external-link"></i> &nbsp;
                            <a href="http://www.bpsc.gov.bd/" target="-blank">Bangladesh Public Service Commission (BPSC)</a>
                        </li>
                        <li>
                            <i class="fa fa-external-link"></i> &nbsp;
                            <a href="http://www.bcc.gov.bd/" target="-blank">Bangladesh Computer Council (BCC)</a>
                        </li>

                    </div>
                </div>
                <!-- End About -->

            </div>

        </div>
        <!-- End Main Text -->
        <!-- Side Column -->

        <!-- End Side Column -->



    </div>
</div>
</div>
</div>
@endsection
