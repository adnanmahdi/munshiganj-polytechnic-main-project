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
                        <th>principal id</th>
                        <th>add_principal</th>
                        <th>principal_image</th>
                     
                        <th>Actions</th>
                    </tr>
                </thead>

                
                <tbody>
                    @foreach($all_principal_info as $v_principal)
                    <tr>
                        <td>{{$v_principal->principal_id}}</td>
                        <td>{{$v_principal->add_principal}}</td>
                 

                         <td class="center"><img src="{{URL::to($v_principal->principal_image)}}" style="height:80px; width:70px; " ></td>
                      


                       
                        <td class="center">

                            <a class="btn btn-info" href="{{URL::to('/edit_principal/'.$v_principal->principal_id)}}">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="{{URL::to('/delete_principal/'.$v_principal->principal_id)}}" id="delete">
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