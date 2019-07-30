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
            @if($errors->has('result_file'))
         <span class="help-block" style="display:block;color: red;">
          <strong>{{ $errors->first('result_file') }}</strong>
                   </span>
          @endif
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
            <form class="form-horizontal" action="{{url('/input_result')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="date01">result uplode date</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge datepicker" id="date01" value="02/16/19" name="result_date" required>
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label" for="textarea2"> Select semester </label>
                        <select name="result_semester" required>
                            <option value="null">SELECT ANY ONE</option>

                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd</option>
                            <option value="4th">4th</option>
                            <option value="5th">5th</option>
                            <option value="6th">6th</option>
                            <option value="7th">7th</option>
                            <option value="8th">8th</option>
                        </select>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2"> student,s Depertment </label>
                        <select name="result_depertment" required>
                            <option value="null">SELECT ANY ONE</option>

                            <option value="computer">COMPUTER TECHNOLOGY</option>
                            <option value="electronics">ELECTRONICS TECHNOLOGY</option>
                            <option value="electrical">ELECTRICAL TECHNOLOGY</option>
                            <option value="electro_mediacl">ELECTRO-MEDICAL TECHNOLOGY</option>
                            <option value="mechanical">MECHANICAL TECHNOLOGY</option>
                            <option value="rac">REFRIGERATION AND AIR CONDITIONING TECHNOLOGY</option>
                            <option value="ipct">INSTRUMENTATION AND PROCESS CONTROL TECHNOLOGY</option>
                            <option value="civil">CIVIL TECHNOLOGY</option>
                        </select>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2"> student,s shift </label>
                        <select name="result_shift" required="">
                            <option value="first">1st </option>
                            <option value="second">2nd</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="upload_file" class="control-label col-sm-3">Upload File</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="file" name="result_file" id="upload_file">
                        </div>
                         <p style="color: red"> max size/2024kb</p>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save Data</button>
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
