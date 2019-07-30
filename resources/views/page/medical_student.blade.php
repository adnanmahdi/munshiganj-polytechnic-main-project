@extends('welcome')
@section('content')
<div class="container">


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
                     
                        <th>student name</th>
                        <!-- <th>student_father_name</th>
                        <th>student_mother_name</th> -->
                        <th>student photo</th>
                        <th>student_rool</th>
             
                        <th>student_shift</th>    
                   <!--      <th>student_admissionyear</th>     -->      
                    <!--     <th>student address</th>  -->
                        <!-- <th>student phone</th>  -->
                     
                       
                        <th>View all information</th>
                    </tr>
                </thead>

                   <?php

  $einfo=DB::table('tbl_student')
        ->where(['student_depertment'=>'electro_mediacl'])
        ->get();
        


?>
                <tbody>
                    @foreach($einfo as $v_student)
                    <tr>
                   
                        <td>{{$v_student->student_name}}</td>
                      <!--   <td>{{$v_student->student_father_name}}</td> -->
                      <!--   <td>{{$v_student->student_mother_name}}</td> -->

                         <td class="center"><img src="{{URL::to($v_student->student_photo)}}" style="height:80px; width:70px; " ></td> 
                         <td class="center">{{$v_student->student_rool}}</td>
                        
                       
                        <td class="center">{{$v_student->student_shift}}</td>
             <!--            <td class="center">{{$v_student->student_admissionyear}}</td> -->
                 <!--        <td class="center">{{$v_student->student_address}}</td> -->
                        


                      
                       
                    
             <!--            <td class="center">{{$v_student->student_phone}}</td> -->
                       
                        <td class="center">

                         
                              <a class="btn btn-danger" href="{{URL::to('/view_studentinfo/'.$v_student->student_id)}}" id="">
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
