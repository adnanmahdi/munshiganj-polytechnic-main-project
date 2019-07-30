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
                        <th>Sms number</th>
                        <th>Sender name</th>
                        <th>Sender Email</th>
                        <th>Subject</th>
                        <th>Actions</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach($allsms_info as $v_student)
                    <tr>
                        <td>{{$v_student->sms_id}}</td>
                        <td>{{$v_student->sms_name}}</td>



                        <td class="center">{{$v_student->sms_email}}</td>
                        <td class="center">{{$v_student->sms_comment}}</td>








                        <td class="center">

                            <a class="btn btn-danger" href="{{URL::to('/delete_sms/'.$v_student->sms_id)}}" id="delete">
                                <i class="halflings-icon white trash"></i>
                            </a>

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
