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
         @if($errors->has('vprincipal_image'))
         <span class="help-block" style="display:block;color: red;">
          <strong>{{ $errors->first('vprincipal_image') }}</strong>
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
            <form class="form-horizontal" action="{{url('/input_vprincipal')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <fieldset>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Add vprincipal message area text</label>
                        <div class="controls">
                            <textarea class="cleditor" id="textarea2" rows="3" name="add_vprincipal" required=""></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fileInput">File input</label>
                        <div class="controls">
                            <input class="input-file uniform_on" id="fileInput" type="file" name="vprincipal_image">
                        </div>
                          <p style="color: red"> max size/2024kb</p>
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
