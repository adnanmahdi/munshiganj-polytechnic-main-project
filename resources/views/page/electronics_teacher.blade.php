@extends('welcome')
@section('content')
<div class="container">

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Tables</a></li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2 class="alert-success"><i class="halflings-icon user"></i><span class="break"></span>
                <?php
                    $message=Session::get('message');
                    if($message){
                        echo $message;
                        Session::put('message',null);
                    }
                    ?> 

               <?php

  $allteacher_info=DB::table('tbl_teacher')
        ->where(['teacher_depertment'=>'electronics'])
        ->get();
        


?>

            </h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                   
                        <th>teacher name</th>
                        <th>teacher photo</th>
                     <!--    <th>teacher address</th> -->
                    <!--     <th>teacher_designation</th> -->
                        <th>teacher_depertment</th>
                        <th>teacher_phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                
                <tbody>
                    @foreach($allteacher_info as $v_teacher)
                    <tr>
               
                        <td>{{$v_teacher->teacher_name}}</td>
                         <td class="center"><img src="{{URL::to($v_teacher->teacher_photo)}}" style="height:80px; width:70px; " </td> 
                       <!--   <td class="center">{{$v_teacher->teacher_address}}</td> -->
                        <!-- <td class="center">{{$v_teacher->teacher_designation}}</td> -->
                        <td class="center">{{$v_teacher->teacher_depertment}}</td>
                       
                    
                        <td class="center">{{$v_teacher->teacher_phone}}</td>
                       
                        <td class="center">

                            
                            <a class="btn btn-danger" href="{{URL::to('/view_teacherinfo/'.$v_teacher->teacher_id)}}" id="">
                                <i class="fa fa-user"></i>
                            </a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
    <!--/span-->

</div>
<!--/row-->
</div>
@endsection
