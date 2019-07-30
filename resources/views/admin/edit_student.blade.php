@extends('admin.dashboard')
@section('admin_content')
<!-- start: Content -->

 

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="#">Forms</a>
    </li>
</ul>

<div class="row sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2 class="alert-success"><i class="halflings-icon edit"></i><span class="break"></span>
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
            <form class="form-horizontal"action="{{url('/update_student',$student_infos->student_id)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <fieldset>

                    <div class="control-group">
                        <label class="control-label" for="date01">Student,s name</label>
                        <div class="controls">
                            <input type="text" value="{{$student_infos->student_name}}" name="student_name"required>
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="date01">Student,s father name</label>
                        <div class="controls">
                            <input type="text" name="student_father_name" value="{{$student_infos->student_father_name}}" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="date01">Student,s mother name</label>
                        <div class="controls">
                            <input type="text" name="student_mother_name" value="{{$student_infos->student_mother_name}}" required>
                        </div>
                    </div>
                        <div class="control-group">
                        <label class="control-label" for="date01">Student,s session</label>
                        <div class="controls">
                            <input type="text" name="student_session" value="{{$student_infos->student_session}}" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="date01">Student,s  registretion number</label>
                        <div class="controls">
                            <input type="text" name="student_reg" value="{{$student_infos->student_reg}}" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="date01">Student,s Rool</label>
                        <div class="controls">
                            <input type="text" name="student_rool" value="{{$student_infos->student_rool}}" required>
                        </div>
                    </div>
                 
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">student,s address</label>
                        <div class="controls">
                            <textarea class="cleditor" id="textarea2" rows="3" name="student_address"  required>
                                 {{$student_infos->student_address}}
                            </textarea>
                        </div>
                    </div>   
                    <div class="control-group">
                        <label class="control-label" for="textarea2"> student,s Depertment </label>
                        <select name="student_depertment" required>
                            <option value="null">SELECT ANY ONE</option>

                            <option value="computer">COMPUTER TECHNOLOGY</option>
                            <option value="electronics">ELECTRONICS TECHNOLOGY</option>
                            <option value="electrical">ELECTRICAL TECHNOLOGY</option>
                            <option value="electro_mediacl">ELECTRO-MEDICAL TECHNOLOGY</option>
                            <option value="machanical">MECHANICAL TECHNOLOGY</option>
                            <option value="rac">REFRIGERATION AND AIR CONDITIONING TECHNOLOGY</option>
                            <option value="ipct">INSTRUMENTATION AND PROCESS CONTROL TECHNOLOGY</option>
  
                        </select>
                    </div>
                      <div class="control-group">
                        <label class="control-label" for="textarea2"> student,s shift </label>
                        <select name="student_shift" required="">
                            <option value="first">1st </option>
                            <option value="second">2nd</option>
                        </select>
                    </div>
                    <div class="control-group">
                        <label class="control-label">student,s Phone</label>
                        <div class="controls">
                            <input type="number" name="student_phone" value="{{$student_infos->student_phone}}" required>
                        </div>
                    </div>
                        <div class="control-group">
                              <label class="control-label" for="date01">student admission yeart</label>
                              <div class="controls">
                                <input type="text"class="input-xlarge datepicker" id="date01" value="02/16/12" name="student_admissionyear" value="{{$student_infos->student_admissionyear}}" required>
                              </div>
                            </div>
                          <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>

            </form>

        </div>
    </div>
    <!--/span-->

</div>
<!--/row-->

@endsection