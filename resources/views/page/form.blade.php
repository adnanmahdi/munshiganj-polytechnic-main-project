@extends('welcome')
@section('content')
<?php
$all_form_info=DB::table('tbl_form')
                ->orderBy('form_id', 'desc')
 
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
                        
                        <th>form uplode date</th>

                        <th>form name</th>
                        <th>form file</th>
                        
                        <th>Download</th>
                    </tr>
                </thead>

                
                <tbody>
                    @foreach($all_form_info as $v_student)
                    <tr>
                        <td>{{$v_student->form_date}}</td>
                        <td>{{$v_student->add_form}}</td>
                        <td><a href="{{$v_student->form_file}}">{{$v_student->form_file}}</a></td>
                        <td class="center">
                            <a class="btn btn-danger" href="{{$v_student->form_file}}" id="">
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