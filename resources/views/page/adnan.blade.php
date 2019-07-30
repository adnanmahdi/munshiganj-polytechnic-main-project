@extends('welcome')
@section('content')
<div class="container">
    <div class="row">
        <style type="text/css">
            .cmt_hade {
                background-color: #5FA4E7;
                display: inline-block;
                padding: 0px 20px;
                margin-top: 10px;
                margin-bottom: 10px;
                transform: skew(40deg);
                margin-left: 10px;


            }


            .cmt_hade h1 {
                transform: skew(-40deg);
                display: block;
                color: #fff;
                font-family: 'Raleway', sans-serif;


            }

            p {


                font-family: 'Raleway', sans-serif;
            }

            .star {

                text-align: center;

            }

            .star li {

                display: inline-block;
            }

            .star a {
                font-size: 20px;
                color: green;

            }

            .adnan_img li {

                list-style: none;
                display: inline-block;
                height: 50px;
                width: 50px;
                background-color: #337AB7;
                border-radius: 100px;
            }

            .adnan_img li a {
                font-size: 30px;
                line-height: 50px;


            }

            [class^="fa-"]:before,
            [class*=" fa-"]:before {
                font-family: FontAwesome;
                font-style: normal;
                font-weight: normal;
                line-height: 1;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                padding-right: 10px;
                color: #fff
            }

        </style>
        <div class="all_cmt" style=" text-align: center;">


            <div class="content_cmt" style="margin-left: 1%;">
                <div class="cmt_hade">

                    <h1>Web Design & Developer</h1>
                </div>

                <div class="text-ceter adnan">
                    <div class="adnan_img">
                        <img src="{{asset('user/img/adnan.jpg')}}" style="margin: 10px 20px; height: 200px;width: auto;">
                        <h4>Name: Al-Adnan(Mahdi)</h4>
                        <h3>Munshiganj Polytechnic Institute

                        </h3>
                        <li><a href="https://www.facebook.com/profile.php?id=100009815950963&ref=bookmarks" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class="inst"><a href="https://www.instagram.com/adnan_xohan/" target="_blank"><i class="fa fa-instagram"></i></a></li>

                    </div>


                </div>


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
