@extends('admin.dashboard')
@section('admin_content')

<div class="container">

 <div class="left" style="box-sizing: border-box; box-shadow: 2px 3px 15px 4px #888888;padding: 30px;display: inline-block;">
<div class="right" style="float: right;">
    <img src="{{URL::to($allstudent_info->student_photo)}}" style="height:120px; width:120px; border: 2px solid #000">

</div>
<h1 style="color:#337AB7;">Student,s all information list</h1>

<h2>1/ Student name:&nbsp &nbsp<b style="color: green;">{{$allstudent_info->student_name}}</b></h2>
<h2>2/ Studen, Father Name:&nbsp &nbsp<b style="color: green">{{$allstudent_info->student_father_name}}</b></h2>
<h2>3/ Studen, Mother Name:&nbsp &nbsp<b style="color: green">{{$allstudent_info->student_mother_name}}</b></h2>
<h2>4/ Studen,s Address:&nbsp &nbsp<b style="color: green">{{$allstudent_info->student_address}}</b></h2>

<h2>5/ Studen,s Rool:&nbsp &nbsp<b style="color: green">{{$allstudent_info->student_rool}}</b></h2>
<h2>6/ Studen,s Registation Number:&nbsp &nbsp<b style="color: green">{{$allstudent_info->student_reg}}</b></h2>
<h2>7/ Studen,s Session:&nbsp &nbsp<b style="color: green">{{$allstudent_info->student_session}}</b></h2>
<h2>8/ Studen,s Shift:&nbsp &nbsp<b style="color: green">{{$allstudent_info->student_shift}}</b></h2>
<h2>9/ Studen,s Addmission Year:&nbsp &nbsp<b style="color: green">{{$allstudent_info->student_admissionyear}}</b></h2>

<h2>10/ Studen,s Depertment:&nbsp &nbsp<b style="color: green">{{$allstudent_info->student_depertment}}</b></h2>
<h2>11/ Studen,s Phone Number:&nbsp &nbsp<b style="color: green">{{$allstudent_info->student_phone}}</b></h2>
</div>
</div>

<!--/row-->
@endsection
