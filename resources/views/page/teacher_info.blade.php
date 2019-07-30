
@extends('welcome')
@section('content')
<style type="text/css">
	

.lefts{

padding: 80px;

background-image: url("{{ URL::asset('user/img/lo.png')}}") ;

position: relative;


background-repeat:repeat;;


}


</style>


<?php 
$all_notice_info = DB::table('tbl_notice')

    ->get();
        
    
    ?>
    
<?php
    $all_form_info = DB::table('tbl_form')->orderBy('form_id', 'desc')
    ->limit(4)
    ->get();



?>
    <div class="container"  style="font-family:  font-family: code;">
           <div class="row margin-vert-30">
                                <!-- Main Column -->
            <div class="col-md-9">



 <div class="lefts" style="box-sizing: border-box; box-shadow: 2px 3px 15px 4px #888888;padding: 30px;display: inline-block; margin-top: 40px;border:4px solid green; border-style:dashed;">
<div class="right" style="float: right;">
    <img src="{{URL::to($allteacher_infos->teacher_photo)}}" style="height:120px; width:120px; border: 4px solid #000; border-style: double;">

</div>
<h1 style="color:#337AB7; font-family: code;">Teacher,s all information list</h1>

<h2 style="font-family: code;">1/ teacher name:&nbsp &nbsp<b style="color: green;font-size: 20px;">{{$allteacher_infos->teacher_name}}</b></h2>

<h2 style="font-family: code;">2/ teacher,s Address:&nbsp &nbsp<b style="color: green;font-size: 20px;">{{$allteacher_infos->teacher_address}}</b></h2>


<h2 style="font-family: code;">3/ teacher,s designation :&nbsp &nbsp<b style="color: green;font-size: 20px;">{{$allteacher_infos->teacher_designation}}</b></h2>



<h2 style="font-family: code;">4/ teacher,s Depertment:&nbsp &nbsp<b style="color: green;font-size: 20px;">{{$allteacher_infos->teacher_depertment}}</b></h2>
<h2 style="font-family: code;">5/ teacher,s Phone Number:&nbsp &nbsp<b style="color: green;font-size: 20px;">{{$allteacher_infos->teacher_phone}}</b></h2>

</div>


</div>



 <div class="col-md-3">
                <!-- Recent Posts -->
                <div class="panel panel-default" style="font-family: code;box-shadow: 0px 6px 8px 9px #ccc;">
                    <div class="panel-heading" style="text-align: center; background-color: #337AB7;color: #fff;">
                        <h3 class="panel-title" style="font-family: code;"> <i class="fa fa-spinner fa-spin"></i>&nbsp;&nbsp;NOTICE BOARD</h3>
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
                <div class="panel panel-default" style="font-family: code;box-shadow: 0px 6px 8px 9px #ccc;">
                    <div class="panel-heading" style="background-color:#337AB7;text-align: center;color: #fff; ">
                        <h3 class="panel-title"><span class="fa-download" style="color:#fff;"></span>FORM DOWNLOAD</h3>
                    </div>
                    <div class="panel-body" style="font-family: code;">
                        @foreach($all_form_info as $v_form)
                        <i class="fa fa-file-pdf-o">&nbsp;&nbsp;&nbsp; </i>
                        <a href="{{$v_form->form_file}}" style="font-family: code;">{{$v_form->add_form}}</a><span style="color: green"><sup style="margin: 10px;">{{$v_form->form_date}}</sup></span><br>
                        @endforeach
                        <div class="forms" style="text-align: center; margin-top: 10px;">
                            <a href="{{URL::to('/form')}}" style="padding: 5px 20px; background-color: #337AB7;color: #fff; border-radius: 20px; margin-bottom: 20px">Show all form</a>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default" style="font-family: code;box-shadow: 0px 6px 8px 9px #ccc;">
                    <div class="panel-heading" style="background-color:#337AB7;color: #fff; text-align: center; ">
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
</div>
<!--/row-->
@endsection
