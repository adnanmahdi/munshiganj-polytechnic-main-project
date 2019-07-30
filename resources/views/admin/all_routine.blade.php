@extends('admin.dashboard')
@section('admin_content')

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
                        <th>routine_date</th>
                        <th>Type semester</th>
                        <th>routine_depertment</th>
                        <th>routine_shift</th>
                        <th>routine_file</th>

                        <th>Actions</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach($all_routine_info as $v_student)
                    <tr>
                        <td>{{$v_student->routine_date}}</td>
                        <td>{{$v_student->add_routine_name}}</td>
                        <td>{{$v_student->routine_depertment}}</td>
                        <td>{{$v_student->routine_shift}}</td>

                        <td><a href="{{$v_student->routine_file}}">{{$v_student->routine_file}}</a></td>
                        <td class="center">
                            <a class="btn btn-danger" href="{{URL::to('/delete_routine/'.$v_student->routine_id)}}" id="delete">
                                <i class="halflings-icon white trash"></i>
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
@endsection
