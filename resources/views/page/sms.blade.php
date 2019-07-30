 

@extends('welcome')
@section('content')








                        <div class="container">
                            <div class="row margin-vert-30">
                                <!-- Main Column -->
                                <div class="col-md-9">
                                    <!-- Main Content -->
                                    <div class="headline">
                                        <h2 style="font-family: 'Raleway', sans-serif">Contact Form of Munshiganj Polytechnic Institute</h2>
                                    </div>
                                    <p style="font-size: 20px;color: green;font-family: 'Raleway', sans-serif; font-weight: 700;">   <?php
                            $message=Session::get('message'); 
                            if($message){
                                echo $message;
                                Session::put('message',null);
                            }
                            ?></p>
                                    <br>
                                    <!-- Contact Form -->
                                    <form  action="{{url('/input_sms')}}" method="post">
                                    {{csrf_field()}}
                                        <label>Name</label>
                                        <div class="row margin-bottom-20">
                                            <div class="col-md-6 col-md-offset-0">
                                                <input class="form-control" type="text" name="sms_name" required>
                                            </div>
                                        </div>
                                        <label>Email
                                            <span class="color-red">*</span>
                                        </label>
                                        <div class="row margin-bottom-20">
                                            <div class="col-md-6 col-md-offset-0">
                                                <input class="form-control" type="Email" name="sms_email" required>
                                            </div>
                                        </div>
                                        <label>Message</label>
                                        <div class="row margin-bottom-20">
                                            <div class="col-md-8 col-md-offset-0">
                                                <textarea rows="8" class="form-control" name="sms_comment" required></textarea>
                                            </div>
                                        </div>
                                        <p>
                                            <button type="submit" class="btn btn-primary">Send Message</button>
                                        </p>
                                    </form>
                                    <!-- End Contact Form -->
                                    <!-- End Main Content -->
                                </div>

                                <!-- End Main Column -->
                                <!-- Side Column -->
                                <div class="col-md-3">
                                    <!-- Recent Posts -->
                                    <div class="panel panel-default" style="box-shadow: 0px 6px 8px 9px #ccc;">
                                        <div class="panel-heading" style="background-color: /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#3b679e+0,207cca+17,207cca+17,2b88d9+17,2e4bea+43,7db9e8+51 */
background: rgb(59,103,158); /* Old browsers */
background: -moz-linear-gradient(-45deg,  rgba(59,103,158,1) 0%, rgba(32,124,202,1) 17%, rgba(32,124,202,1) 17%, rgba(43,136,217,1) 17%, rgba(46,75,234,1) 43%, rgba(125,185,232,1) 51%); /* FF3.6-15 */
background: -webkit-linear-gradient(-45deg,  rgba(59,103,158,1) 0%,rgba(32,124,202,1) 17%,rgba(32,124,202,1) 17%,rgba(43,136,217,1) 17%,rgba(46,75,234,1) 43%,rgba(125,185,232,1) 51%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(135deg,  rgba(59,103,158,1) 0%,rgba(32,124,202,1) 17%,rgba(32,124,202,1) 17%,rgba(43,136,217,1) 17%,rgba(46,75,234,1) 43%,rgba(125,185,232,1) 51%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3b679e', endColorstr='#7db9e8',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
;color: #fff;">
                                            <h3 class="panel-title">Contact Info</h3>
                                        </div>
                                        <div class="panel-body">
                                            <p>অনুগ্রহ করে প্রতিষ্ঠানের কোন তথ্য জানতে হলে নিম্নোক্ত নাম্বারে কল করুন অথবা আপনার তত্ত্বটি আপনার পাশে রাখা ফর্ম বক্স টি পূরণ করে আমাদের কাছে পাঠিয়ে দিন</p>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <i class="fa-phone color-primary"></i>+353-44-55-66</li>
                                                <li>
                                                    <i class="fa-envelope color-primary"></i>Email: mpiprincipal@gmail.com</li>
                                                <li>
                                                    <i class="fa-home color-primary"></i>Web: munpoly.gov.bd</li>
                                            </ul>
                                            <ul class="list-unstyled">
                                               
                                               
                                            </ul>

                                        </div>
                                    </div>
                                        <div class="panel panel-default" style="box-shadow: 0px 6px 8px 9px #ccc;">
                                        <div class="panel-heading" style="background-color: /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#3b679e+0,207cca+17,207cca+17,2b88d9+17,2e4bea+43,7db9e8+51 */
background: rgb(59,103,158); /* Old browsers */
background: -moz-linear-gradient(-45deg,  rgba(59,103,158,1) 0%, rgba(32,124,202,1) 17%, rgba(32,124,202,1) 17%, rgba(43,136,217,1) 17%, rgba(46,75,234,1) 43%, rgba(125,185,232,1) 51%); /* FF3.6-15 */
background: -webkit-linear-gradient(-45deg,  rgba(59,103,158,1) 0%,rgba(32,124,202,1) 17%,rgba(32,124,202,1) 17%,rgba(43,136,217,1) 17%,rgba(46,75,234,1) 43%,rgba(125,185,232,1) 51%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(135deg,  rgba(59,103,158,1) 0%,rgba(32,124,202,1) 17%,rgba(32,124,202,1) 17%,rgba(43,136,217,1) 17%,rgba(46,75,234,1) 43%,rgba(125,185,232,1) 51%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3b679e', endColorstr='#7db9e8',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
;color: #fff;">
                                            <h3 class="panel-title">মুন্সিগঞ্জ পলিটেকনিক ইনস্টিটিউট
</h3>
                                        </div>
                                        <div class="panel-body">
                                          
                                            <ul class="list-unstyled">
                                                <li>
                                                    <b>ধরন:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>সরকারি</li>
                                                <li>
                                                     <li>
                                                    <b>স্থাপিত:
:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> ২০০৬</li>
                                                <li>
                                                     <li>
                                                    <b>অধ্যক্ষ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> জহিরুল আলম [১]</li>
                                                <li>
                                                     <li>
                                                    <b>প্রশাসনিক কর্মকর্তা
:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>৩৪</li>
                                                <li>
                                                     <li>
                                                    <b>শিক্ষার্থী:
:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>২২০০</li>
                                                <li>
                                                     <li>
                                                    <b>অবস্থান:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> মিরকাদিম, মুন্সিগঞ্জ জেলা, বাংলাদেশ
২৩.৫৬৯০৮১° উত্তর ৯০.৪৮৫৯১৪° পূর্ব</li>
                                                <li>
                                                     <li>
                                                    <b>শিক্ষাঙ্গন :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>গ্রামীন</li>
                                                <li>
                                                     <li>
                                                    <b>সংক্ষিপ্ত নাম:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>MUPI</li>
                                               
                                            </ul>
                                            <ul class="list-unstyled">
                                               
                                               
                                            </ul>

                                        </div>
                                    </div>
                                    <!-- End recent Posts -->
                                    <!-- About -->
                                    <div class="">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">MUPI Google Map</h3>
                                        </div>
                                        <div class="">
                            <div class="mapouter"><div class="gmap_canvas" style="box-shadow: 0px 6px 8px 9px #ccc;"><iframe width="243" height="265" id="gmap_canvas" src="https://maps.google.com/maps?q=munshiganj%20polytechnic&t=k&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://ultimatewp.net">colorlib theme</a></div><style>.mapouter{position:relative;text-align:right;height:265px;width:243px;}.gmap_canvas {overflow:hidden;background:none!important;height:265px;width:243px;}</style></div>
                                        </div>
                                    </div>
                                   
                                <!-- End Side Column -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection