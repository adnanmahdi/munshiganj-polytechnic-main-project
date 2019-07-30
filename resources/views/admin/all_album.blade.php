@extends('admin.dashboard')
@section('admin_content')
<!-- start: Content -->


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
                        <th>album id</th>
                        <th>image uplode date</th>
                        <th>image name</th>


                        <th>Album image</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($result as $v_album)
                    <tr>

                        <td class="center">{{$v_album->albam_id}}</td>
                        <td class="center">{{$v_album->albam_date}}</td>
                        <td class="center">{{$v_album->add_albam_name}}</td>


                        <td class="center"><img src="{{URL::to($v_album->albam_file)}}" style="height:200px; width:250px; " </td> <td class="center">


                            <a class="btn btn-danger" href="{{URL::to('/delete_album/'.$v_album->albam_id)}}" id="delete">
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
