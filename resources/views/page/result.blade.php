
@extends('welcome')
@section('content')
<?php

$all_result_info=DB::table('tbl_result')    
 ->orderBy('result_id', 'desc')
 ->get();



?>
<div class="container" style="overflow: scroll;">
    <div class="row">
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
                        <th>result_date</th>
                        <th>Result semester</th>
                        <th>Result depertment</th>
                        <th>Result_shift</th>
                        <th>Result_file</th>

                        <th>Actions</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach($all_result_info as $v_student)
                    <tr>
                        <td>{{$v_student->result_date}}</td>
                        <td>{{$v_student->result_semester}}</td>
                        <td>{{$v_student->result_depertment}}</td>
                        <td>{{$v_student->result_shift}}</td>

                        <td><a href="{{$v_student->result_file}}">{{$v_student->result_file}}</a></td>
                        <td class="center">
                            <a class="btn btn-danger" href="{{$v_student->result_file}}" id="download">
                                <i class="fa fa-download"></i>
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
</div>
@endsection
