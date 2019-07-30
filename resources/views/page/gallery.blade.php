

@extends('welcome')
@section('content')



       <?php

$rs = DB::table('tbl_albam')->orderBy('albam_id', 'desc')
    
    ->get();

     ?>


 <div class="container" style=" font-family: 'Raleway', sans-serif;">
                            <div class="row margin-vert-30">
                                <div class="col-md-12 text-center">
                                    <h2 style=" font-family: 'Raleway', sans-serif;">Munshiganj Polytechnic Institute Photos Album</h2><hr>
                                    <!-- Filter Buttons -->
                            
                                    <!-- End Filter Buttons -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 portfolio-group no-padding">
                                    <!-- Portfolio Item -->
                                    @foreach($rs as $v_album)
                                    <div class="col-md-3 portfolio-item margin-bottom-40 code" style="">
                                        <div>
                                            <a href="{{$v_album->albam_file}}" class="thumbBox"  rel="lightbox-thumbs">
                                                <h3 class="margin-top-20">{{$v_album->add_albam_name}}</h3>
                                                <figure>
                                                    <img src="{{URL::to($v_album->albam_file)}}" alt="image1" style="">
                                                    <figcaption>
                                                        <span style="color:#212121; "><h4>Image Upload Date:{{$v_album->albam_date}}</h4></span>
                                                    </figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                        @endsection
                      