<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- Title -->
    <title>Munshiganj polytechnic</title>
    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- admin -->
    <!-- Favicon -->
    <link href="{{asset('user/img/munlogo.jpg')}}" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset('user/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('user/css/animate.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('user/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('user/css/nexus.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('user/css/custom.css')}}" rel="stylesheet">
    <!-- Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
    <link href="http://    fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Raleway&display=swap')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('user/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('user/css/responsive.css')}}" rel="stylesheet">

    <!-- admin -->

    <!-- start: JavaScript-->


</head>

<body>




    <style type="text/css">
        .slicknav_menu {
            background: #337AB7;
            padding: 5px;
            border-bottom: 2px solid #C91419;

        }

        #base a {


            color: #fff;
        }

        #base [class^="fa-"]:before,
        #base [class*=" fa-"]:before {

            color: white;
        }

    </style>




    <?php

$result = DB::table('tbl_albam')->orderBy('albam_id', 'desc')
    ->limit(9)
    ->get();

     ?>

    <div id="body_bg">
        <div id="pre_header" class="container">
            <div class="row margin-top-10 visible-lg">
                <div class="col-md-6">


                </div>
                <div class="col-md-6 text-right">
                    <p>
                        <a href="{{URL::to('/backend')}}" target="_blank" style="background-color: #689DCA;color: #fff;padding: 6px 10px; border-radius: 30px;">Admin Login</a></p>
                </div>
            </div>
        </div>
        <div class="primary-container-group" style="padding-bottom:50px;">
            <!-- Background -->
            <div class="primary-container-background">
                <div class="primary-container"></div>
                <div class="clearfix"></div>
            </div>
            <!--End Background -->
            <div class="primary-container">
                <div id="header" class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html" title="">
                                <img src="{{URL::to('user/img/munlogo.jpg')}}" alt="Logo" / style="height:140px;  margin-top: -30px; margin-left:-20px">
                            </a>
                        </div>

                        <div class="mains text-center" style="margin-top:-90px">

                            <h3 style=" font-weight:500;   font-family: 'Raleway', sans-serif;
                            font-weight:;
                            line-height: 1.1;
                            color:#000;
                            font-size:30px;">Munshiganj Polytechnic Institute
                            </h3>
                            <h5 style=" font-family: 'Raleway', sans-serif;">Institute Code: 49021</h5>

                        </div>
                        <div class="logos text-right" style="margin-top:-110px; margin-right: -10px;">
                            <img src="{{URL::to('user/img/govtlogo.png')}}">
                        </div>
                    </div>
                </div>

                <!-- Top Menu -->
                <div id="hornav" class="container no-padding">
                    <div class="row">
                        <div class="col-md-12 no-padding">
                            <div class="pull-left visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav">
                                    <li>
                                        <a href="{{URL::to('/')}}" class="fa-home">Home</a>
                                    </li>
                                    <li>
                                        <span class="fa-info">ABOUT US </span>
                                        <ul>

                                            <li>
                                                <a href="{{URL::to('/mission_v')}}">MISSION & VISION</a>
                                            </li>
                                            <li>
                                                <a href="{{URL::to('/principal')}}">MESSAGES FROM PRINCIPAL</a>
                                            </li>
                                            <li>
                                                <a href="{{URL::to('/principal_v')}}">MESSAGES FROM VICE PRINCIPAL</a>
                                            </li>
                                            <li>
                                                <a href="{{URL::to('/campus')}}">ADMINISTRATION & ABOUT CAMPUS</a>
                                            </li>
                                           
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="fa-book">
                                            DEPARTMENTS</span>
                                        <ul>

                                            <li>
                                                <a href="{{URL::to('/computer_dpt')}}">COMPUTER TECHNOLOGY</a>
                                            </li>
                                            <li>
                                                <a href="{{URL::to('/electronics_dpt')}}"> ELECTRONICS TECHNOLOGY</a>
                                            </li>
                                            <li>
                                                <a href="{{URL::to('/electrical_dpt')}}"> ELECTRICAL TECHNOLOGY</a>
                                            </li>
                                            <li>
                                                <a href="{{URL::to('/medical_dpt')}}">ELECTRO-MEDICAL TECHNOLOGY</a>
                                            </li>
                                            <li>
                                                <a href="{{URL::to('/machanical_dpt')}}">MECHANICAL TECHNOLOGY</a>
                                            </li>
                                            <li>
                                                <a href="{{URL::to('/ipct_dpt')}}">INSTRUMENTATION AND PROCESS CONTROL TECHNOLOGY</a>
                                            </li>
                                            <li>
                                                <a href="{{URL::to('/rac_dpt')}}">REFRIGERATION AND AIR CONDITIONING TECHNOLOGY</a>


                                            </li>

                                            <li>
                                                <a href="{{URL::to('/civil_dpt')}}">CIVIL</a>


                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <span class="fa-info">ALL INFORMATION</span>
                                        <ul>

                                            <li class="parent">
                                                <span>STUDENT INFORMATION</span>
                                                <ul>
                                                    <li>
                                                        <a href="{{URL::to('/electronics_student')}}"> ELECTRONICS TECHNOLOGY</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{URL::to('/computer_student')}}">COMPUTER TECHNOLOGY</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{URL::to('/electrical_student')}}">ELECTRICAL TECHNOLOGY</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{URL::to('/medical_student')}}">ELECTRO-MEDICAL TECHNOLOGY</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{URL::to('/machanical_student')}}">MECHANICAL TECHNOLOGY</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{URL::to('/ipct_student')}}">INSTRUMENTATION AND PROCESS CONTROL TECHNOLOGY</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{URL::to('/rac_student')}}">REFRIGERATION AND AIR CONDITIONING TECHNOLOGY</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{URL::to('/civil_student')}}">CIVIL</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="parent">
                                                <span>TEACHER INFORMATION</span>
                                                <ul>
                                                    <li>
                                                        <a href="{{URL::to('/electronics_teacher')}}"> ELECTRONICS TECHNOLOGY</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{URL::to('/computer_teacher')}}">COMPUTER TECHNOLOGY</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{URL::to('/electrical_teacher')}}">ELECTRICAL TECHNOLOGY</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{URL::to('/medical_teacher')}}">ELECTRO-MEDICAL TECHNOLOGY</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{URL::to('/machanical_teacher')}}">MECHANICAL TECHNOLOGY</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{URL::to('/ipct_teacher')}}">INSTRUMENTATION AND PROCESS CONTROL TECHNOLOGY</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{URL::to('/rac_teacher')}}">REFRIGERATION AND AIR CONDITIONING TECHNOLOGY</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{URL::to('/civil_teacher')}}">CIVIL TECHNOLOGY</a>
                                                         <li>
                                                        <a href="{{URL::to('/non_tec')}}">NON DEPERTMENT</a>
                                                    </li>
                                                    </li>
                                                </ul>
                                            </li>


                                        </ul>
                                    </li>

                                    <li>
                                        <span class="fa-graduation-cap">ACADEMICS</span>
                                        <ul>

                                            <li>
                                                <a href="{{URL::to('/rules')}}">RULES & REGULATION</a>
                                            </li>
                                            <li>
                                                <a href="{{URL::to('/font_routine')}}">CLASS ROUTINE</a>
                                            </li>
                                            <li>
                                                <a href="{{URL::to('/semester_plan')}}"> SEMESTER PLAN</a>
                                            </li>
                                            <li>
                                                <a href="{{URL::to('/result')}}"> RESULT</a>
                                            </li>

                                        </ul>
                                    </li>


                                    <li>
                                        <a href="{{URL::to('/notice')}}" class="fa-bell">NOTICE</a>
                                    </li>

                                    <li>
                                        <a href="{{URL::to('/form')}}" class="fa-envelope">FORM BOX</a>
                                    </li>

                                    <li>
                                        <a href="{{URL::to('/gallery')}}" class="fa-th">ALBUM</a>
                                    </li>

                                    <li>
                                        <a href="{{URL::to('/sms')}}" class="fa-comment">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('content')





                <!-- === END CONTENT === -->
                <!-- === BEGIN FOOTER === -->
                <div id="base" style="font-family: 'Raleway', sans-serif;">
                    <div class="container padding-vert-30 margin-top-40" style="background-color: #337AB7; color: #fff;border: 8px solid white; border-style: double;">
                        <div class="row">
                            <!-- Sample Menu -->
                            <div class="col-md-3 margin-bottom-20">
                                <h3 class="margin-bottom-10">
                                    কেন্দ্রীয় ই-সেবা</h3>
                                <ul class="menu">
                                    <li>
                                        <a class="fa-tasks" href="https://services.nidw.gov.bd/" target="_blank">NID তথ্য হালনাগাদকরণ</a>
                                    </li>
                                    <li>
                                        <a class="fa-users" href="http://www.bmet.gov.bd/BMET/onlinaVisaCheckAction" target="_blank">অনলাইনে পাসপোর্টের আবেদন

                                        </a>
                                    </li>
                                    <li>
                                        <a class="fa-signal" href="http://www.bpsc.gov.bd/" target="_blank">সরকারি কর্ম-কমিশনে আবেদন</a>
                                    </li>

                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <!-- End Sample Menu -->
                            <!-- Contact Details -->
                            <div class="col-md-3 margin-bottom-20">
                                <h3 class="margin-bottom-10" style="font-family: 'Raleway', sans-serif;">MUPI Facebook Page </h3>
                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMUPI-Notice-Board-221047205247563%2F%3Fref%3Dbr_rs&tabs=timeline&width=250&height=200&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="250" height="200" style="border:2px solid black;overflow:hidden;border-style: dotted;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                            </div>
                            <style type="text/css">
                                .thumbs-gallery i {
                                    background: #000000;
                                    display: block;
                                    position: absolute;
                                    left: 3px;
                                    top: 3px;
                                    height: 60px;
                                    width: 65px;
                                    opacity: 0;
                                }

                            </style>
                            <!-- End Contact Details -->
                            <!-- Thumbs Gallery -->
                            <div class="col-md-3 margin-bottom-20">
                                <h3 class="margin-bottom-10" style="font-family: 'Raleway', sans-serif;">Portfolio Highlights</h3>
                                <div class="thumbs-gallery">
                                    @foreach($result as $v_album)
                                    <a class="thumbBox" rel="lightbox-thumbs" href="{{$v_album->albam_file}}">
                                        <img src="{{URL::to($v_album->albam_file)}}" alt="image1.jpg" style="height: 60px;width: 65px;">
                                        <i></i>
                                    </a>
                                    @endforeach

                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- End Thumbs Gallery -->
                            <!-- Disclaimer -->
                            <div class="col-md-3 margin-bottom-20">
                                <h3 class="margin-bottom-10">
                                    কারিগরি সহায়তায়</h3>
                                <p><a href="{{URL::to('/adnan')}}">Munshiganj Polytechnich computer technology student 15-16</a></p>
                                <div class="clearfix"></div>
                            </div>
                            <!-- End Disclaimer -->
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- Footer Menu -->
                <div id="footer">
                    <div class="container">
                        <div class="row">
                            <div id="copyright" class="col-md-12 text-center">
                                <p>(c) 2019 Copyright mupi</p>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- End Footer Menu -->
                <!-- JS -->
                <script type="text/javascript" src="{{asset('user/js/jquery.min.js')}}" type="text/javascript"></script>
                <script type="text/javascript" src="{{asset('user/js/bootstrap.min.js')}}" type="text/javascript"></script>
                <script type="text/javascript" src="{{asset('user/js/scripts.js')}}"></script>
                <!-- Isotope - Portfolio Sorting -->
                <script type="text/javascript" src="{{asset('user/js/jquery.isotope.js')}}" type="text/javascript"></script>
                <!-- Mobile Menu - Slicknav -->
                <script type="text/javascript" src="{{asset('user/js/jquery.slicknav.js')}}" type="text/javascript"></script>
                <!-- Animate on Scroll-->
                <script type="text/javascript" src="{{asset('user/js/jquery.visible.js')}}" charset="utf-8"></script>
                <!-- Sticky Div -->
                <script type="text/javascript" src="{{asset('user/js/jquery.sticky.js')}}" charset="utf-8"></script>
                <!-- Slimbox2-->
                <script type="text/javascript" src="{{asset('user/js/slimbox2.js')}}" charset="utf-8"></script>
                <!-- Modernizr -->
                <script src="{{asset('user/js/modernizr.custom.js')}}" type="text/javascript"></script>
                <!-- End JS -->



                <!-- admin -->
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

</body>
