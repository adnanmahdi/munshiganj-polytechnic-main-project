<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:12 GMT -->

<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>MUPI admin page</title>
    <meta name="description" content="Metro Admin Template.">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link id="base-style" href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link id="base-style-responsive" href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->

    <!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- end: Favicon -->


<?php

$allsms_info=DB::table('sms_tbl')->orderBy('sms_id', 'desc')

  ->limit(5)
->get()

?>
 @php
                 $sms=DB::table('sms_tbl')
                  ->count('sms_id');
                  
                  @endphp

</head>

<body>
    <!-- start: Header -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="index.html"><span>MUPI Admin</span></a>

                <!-- start: Header Menu -->
                <div class="nav-no-collapse header-nav">
                    <ul class="nav pull-right">
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                      
                            </a>
                         
                        </li>
                        <!-- start: Notifications Dropdown -->
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white tasks"></i>
                            </a>
                            <ul class="dropdown-menu tasks">
                                <li class="dropdown-menu-title">
                                    <span>You have 17 tasks in progress</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">iOS Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim red">80</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">Android Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim green">47</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">Django Project For Google</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim yellow">32</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">SEO for new sites</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim greenLight">63</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">New blog posts</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim orange">80</div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-menu-sub-footer">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- end: Notifications Dropdown -->
                        <!-- start: Message Dropdown -->
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white envelope"></i><sup style="background-color: green;padding: 5px; border-radius: 100px;">{{$sms}}</sup>
                            </a>
                            <ul class="dropdown-menu messages">
                                <li class="dropdown-menu-title">
                                    <span>You have {{$sms}} messages</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>
                                @foreach($allsms_info as $v_sms)
                                <li>
                                    <a href="{{URL::to('/all_sms')}}">
                                        <span class="avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                             
                                               {{$v_sms->sms_name}}
                                            </span>
                                            <span class="time">
                                                6 min
                                            </span>
                                        </span>
                                        <span class="message">
                                           {{$v_sms->sms_comment}}
                                        </span>
                                    </a>
                                </li>
                               @endforeach
                                <li>
                                    <a class="dropdown-menu-sub-footer" href="{{URL::to('/all_sms')}}" >View all messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- end: Message Dropdown -->
                        <li>
                            <a class="btn" href="#">
                                <i class="halflings-icon white wrench"></i>
                            </a>
                        </li>
                        <!-- start: User Dropdown -->
                        <li class="dropdown">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white user"></i> {{Session::get('admin_name')}}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-menu-title">
                                    <span>Account Settings</span>
                                </li>
                                <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                                <li><a href="{{URL::to('/logout')}}"><i class="halflings-icon off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <!-- end: User Dropdown -->
                    </ul>
                </div>
                <!-- end: Header Menu -->

            </div>
        </div>
    </div>
    <!-- start: Header -->
<style type="text/css">
    
.nav-tabs.nav-stacked > li > a, .nav-tabs.nav-stacked > li > ul > li > a{



    background-color: black;
}
..nav-tabs.nav-stacked > li{


    width: 110%;
}
</style>
    <div class="container-fluid-full" style="overflow-y: scroll;">
        <div class="row-fluid">

            <!-- start: Main Menu -->
            <div id="sidebar-left" class="span2">
                <div class="nav-collapse sidebar-nav">
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li><a href="{{URL::to('/dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                         <li><a href="{{URL::to('/all_sms')}}"><i class="icon-list-alt"></i><span class="hidden-tablet">All Sms</span></a></li>
                         <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">All Students Of Depertment</span><span class="label label-important"> new </span></a>
                            <ul>
                            <li><a class="submenu" href="{{URL::to('/cse')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> COMPUTER TECHNOLOGY</span></a></li>
                            <li><a class="submenu" href="{{URL::to('/electronics')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">ELECTRONICS TECHNOLOGY</span></a></li>
                             <li><a class="submenu" href="{{URL::to('/electrical')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> ELECTRICAL TECHNOLOGY</span></a></li>
                             <li><a class="submenu" href="{{URL::to('/electro_mediacl')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> ELECTRO-MEDICAL TECHNOLOGY</span></a></li>
                             <li><a class="submenu" href="{{URL::to('/machanical')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> MECHANICAL TECHNOLOGYe</span></a></li>
                            <li><a class="submenu" href="{{URL::to('/rac')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> IPCT</span></a></li>
                            <li><a class="submenu" href="{{URL::to('/ipct')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> REFRIGERATION AND AIR CONDITIONING TECHNOLOGY</span></a></li>
                                 <li><a class="submenu" href="{{URL::to('/civil')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">CIVIL TECHNOLOGY</span></a></li>   

                            </ul>
                        </li> 
                        <li><a href="{{URL::to('/all_teacher')}}"><i class="icon-envelope"></i><span class="hidden-tablet">All Teacher</span></a></li>
                        <li><a href="{{URL::to('/add_teacher')}}"><i class="icon-tasks"></i><span class="hidden-tablet"> Add Teacher</span></a></li>
                        <li><a href="{{URL::to('/all_student')}}"><i class="icon-eye-open"></i><span class="hidden-tablet">All Student</span></a></li>
                        <li><a href="{{URL::to('/add_student')}}"><i class="icon-dashboard"></i><span class="hidden-tablet"> Add Student</span></a></li>
                           
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Notice Uplode</span><span class="label label-important"> new </span></a>
                            <ul>
                                <li><a class="submenu" href="{{URL::to('/add_notice')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add notice</span></a></li>
                                <li><a class="submenu" href="{{URL::to('/all_notice')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All notice</span></a></li>
                             
                            </ul>
                        </li>   
                          <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> latest news Uplode</span><span class="label label-important"> new </span></a>
                            <ul>
                                <li><a class="submenu" href="{{URL::to('/add_news')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add news</span></a></li>
                                <li><a class="submenu" href="{{URL::to('/all_news')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All news</span></a></li>
                             
                            </ul>
                        </li>  
                          <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">welcome text uplode</span><span class="label label-important">  </span></a>
                            <ul>
                                <li><a class="submenu" href="{{URL::to('/add_wlc')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add welcome news</span></a></li>
                                <li><a class="submenu" href="{{URL::to('/all_wlc')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All news</span></a></li>
                             
                            </ul>
                        </li>    
                           <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">form uplode</span><span class="label label-important"> new </span></a>
                            <ul>
                                <li><a class="submenu" href="{{URL::to('/add_form')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add form</span></a></li>
                                <li><a class="submenu" href="{{URL::to('/all_form')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All form</span></a></li>
                             
                            </ul>
                        </li>   
                             <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">PRINCIPAL'S MESSAGE Uplode</span><span class="label label-important"> new </span></a>
                            <ul>
                                <li><a class="submenu" href="{{URL::to('/add_principal')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> ADD PRINCIPAL'S MESSAGE</span></a></li>
                                <li><a class="submenu" href="{{URL::to('/all_principal')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> show all PRINCIPAL'S MESSAGE</span></a></li>
                                <li><a class="submenu" href="{{URL::to('/add_vprincipal')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> ADD VICE PRINCIPAL'S MESSAGE</span></a></li>
                                      <li><a class="submenu" href="{{URL::to('/all_vprincipal')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> all  VICE PRINCIPAL'S MESSAGE</span></a></li>
                             
                            </ul>
                        </li>
    <li>
                            <a class="dropmenu" href="#"><i class="iicon-folder-close-alt"></i><span class="hidden-tablet"> slider</span><span class="label label-important"> new </span></a>
                            <ul>
                                <li><a class="submenu" href="{{URL::to('/add_slider')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add slider</span></a></li>
                                <li><a class="submenu" href="{{URL::to('/all_slider')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All slider</span></a></li>
                             
                            </ul>
                        </li>
                            <li>
                            <a class="dropmenu" href="#"><i class="iicon-folder-close-alt"></i><span class="hidden-tablet"> Result</span><span class="label label-important"> new </span></a>
                            <ul>
                          <li><a href="{{URL::to('/add_result')}}"><i class="icon-list-alt"></i><span class="hidden-tablet">Add Result</span></a></li>
                      <li><a href="{{URL::to('/all_result')}}"><i class="icon-list-alt"></i><span class="hidden-tablet">All Result</span></a></li>
                            </ul>
                        </li>
                        <li><a href="{{('/add_album')}}"><i class="icon-list-alt"></i><span class="hidden-tablet">Add Album</span></a></li>
                          <li><a href="{{('/all_album')}}"><i class="icon-list-alt"></i><span class="hidden-tablet">All Album</span></a></li>
                     <li><a href="{{URL::to('/add_routine')}}"><i class="icon-list-alt"></i><span class="hidden-tablet">Add routine</span></a></li>
                      <li><a href="{{URL::to('/all_routine')}}"><i class="icon-list-alt"></i><span class="hidden-tablet">All routine</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- end: Main Menu -->

            <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
            </noscript>

            <!-- start: Content -->
            <div id="content" class="span10">

                @yield('admin_content')
                <!-- end: Content -->
            </div>
            <!--/#content.span10-->
        </div>
        <!--/fluid-row-->

        <div class="modal hide fade" id="myModal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>

        <div class="clearfix"></div>

       

        <!-- start: JavaScript-->

        <script src="{{asset('admin/js/jquery-1.9.1.min.js')}}"></script>
        <script src="{{asset('admin/js/jquery-migrate-1.0.0.min.js')}}"></script>

        <script src="{{asset('admin/js/jquery-ui-1.10.0.custom.min.js')}}"></script>

        <script src="{{asset('admin/js/jquery.ui.touch-punch.js')}}"></script>

        <script src="{{asset('admin/js/modernizr.js')}}"></script>

        <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>

        <script src="{{asset('admin/js/jquery.cookie.js')}}"></script>

        <script src="{{asset('admin/js/fullcalendar.min.js')}}"></script>

        <script src="{{asset('admin/js/jquery.dataTables.min.js')}}"></script>

        <script src="{{asset('admin/js/excanvas.js')}}"></script>
        <script src="{{asset('admin/js/jquery.flot.js')}}"></script>
        <script src="{{asset('admin/js/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('admin/js/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('admin/js/jquery.flot.resize.min.js')}}"></script>

        <script src="{{asset('admin/js/jquery.chosen.min.js')}}"></script>

        <script src="{{asset('admin/js/jquery.uniform.min.js')}}"></script>

        <script src="{{asset('admin/js/jquery.cleditor.min.js')}}"></script>

        <script src="{{asset('admin/js/jquery.noty.js')}}"></script>

        <script src="{{asset('admin/js/jquery.elfinder.min.js')}}"></script>

        <script src="{{asset('admin/js/jquery.raty.min.js')}}"></script>

        <script src="{{asset('admin/js/jquery.iphone.toggle.js')}}"></script>

        <script src="{{asset('admin/js/jquery.uploadify-3.1.min.js')}}"></script>

        <script src="{{asset('admin/js/jquery.gritter.min.js')}}"></script>

        <script src="{{asset('admin/js/jquery.imagesloaded.js')}}"></script>

        <script src="{{asset('admin/js/jquery.masonry.min.js')}}"></script>

        <script src="{{asset('admin/js/jquery.knob.modified.js')}}"></script>

        <script src="{{asset('admin/js/jquery.sparkline.min.js')}}"></script>

        <script src="{{asset('admin/js/counter.js')}}"></script>

        <script src="{{asset('admin/js/retina.js')}}"></script>

        <script src="{{asset('admin/js/custom.js')}}"></script>
        <!-- end: JavaScript-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.js"></script>
<script>
$(document).on("click", "#delete", function(e) {

    e.preventDefault();
    var link = $(this).attr("href");

    bootbox.confirm("“Are you sure you want to delete?”  ", function(confirmed) {

        if (confirmed) {


            window.location.href = link;
        };


    });
});

</script>
    

</body>
