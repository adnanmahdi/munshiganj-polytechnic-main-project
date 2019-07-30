@extends('welcome')
@section('content')
<?php
$all_routine_info=DB::table('routine_tbl')
                ->orderBy('routine_id', 'desc')
 
->get();

?>
<div class="container" style="overflow: scroll;">

<div class="row-fluid sortable text-center nlg " style=" "  >
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
        <div class="box-content ">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        
                        <th>Routine uplode date</th>

                        <th>Semester</th>
                        <th>Routine file</th>
                        <th>Routine depertment</th>
                        <th>Routine shift</th>
                        
                        <th>Download</th>
                    </tr>
                </thead>

                
                <tbody>
                    @foreach($all_routine_info as $v_student)
                    <tr>
                        <td>{{$v_student->routine_date}}</td>
                        <td>{{$v_student->add_routine_name}}</td>
                        <td><a href="{{$v_student->routine_file}}">{{$v_student->routine_file}}</a></td>
                        
                                 <td>{{$v_student->routine_depertment}}</td>
                        <td>{{$v_student->routine_shift}}</td>
                               
                                <td class="center">
                            <a class="btn btn-danger" href="{{$v_student->routine_file}}" id="">
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
@endsection