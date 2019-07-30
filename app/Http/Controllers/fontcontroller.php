<?php

namespace App\Http\Controllers;
use DB;
use Validator;
use Session;
session_start();

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class fontcontroller extends Controller
{

public function index (){



return view('welcome');

}

    public function notice (){



return view('page.notice');

}


public function add_wlc(){
   $this->adminauthcheck();



	return view('admin.add_wlc');
}

 public function input_wlc(Request $request){

      $validator=Validator::make($request->all(), [
            'wlc_image'=> 'mimes:jpeg,bmp,png,jpg,pdf,x-pdf,vnd.pdf,x-pdf|max:2024'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

            $data = array();
              $data['wlc_id']=$request->wlc_id;
          
              $data['add_wlc']=$request->add_wlc;
       
           $image=$request->file('wlc_image');
           if($image){
           $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $uplode_path='image/';
            $image_url=$uplode_path.$image_full_name;
            $success=$image->move($uplode_path,$image_full_name);
            if($success){
            $data['wlc_image']=$image_url;
            DB::table('tbl_wlc')->insert($data);
            Session::put('message','welcome image  add sucssfully');
            return Redirect::to('/add_wlc');
            
            }     
        }   
          $data['wlc_image']='';
          DB::table('tbl_wlc')->insert($data);
             Session::put('message','wlc,s data add sucssfully without image');
            return Redirect::to('/add_wlc');
       

 }

public function all_wlc(){

   $this->adminauthcheck();
$all_wlc = DB::table('tbl_wlc')->orderBy('wlc_id', 'desc')
    ->get();
         $manege_wlc=view('admin.all_wlc')
             ->with('all_wlc_info',$all_wlc);
             return view('admin.dashboard')
                 ->with('admin.all_wlc',$manege_wlc);
         
     }
   public function edit_wlc($wlc_id){
       
       
         $info=DB::table('tbl_wlc')
            ->where('wlc_id',$wlc_id)
            ->first();
        
        $manage=view('admin.edit_wlc')
            ->with('edit_wlc_info',$info);
            return view('admin.dashboard')  
                ->with('admin.edit_wlc',$manage);
       
        
   }


   public function update_wlc( Request $request,$wlc_id){

     
  
            $data=array() ;
            $data['add_wlc']=$request->add_wlc;
           

             DB::table('tbl_wlc')
                ->where('wlc_id',$wlc_id)
                ->update($data);
            Session::put('message',"welcom text update successfully!!!");
            return Redirect::to('/all_wlc');

   }
  public function delete_wlc($wlc_id){
           DB::table('tbl_wlc')
           ->where('wlc_id',$wlc_id)
            ->delete();
             Session::put('message',"welcome delete successfully!!");
            return Redirect::to('/all_wlc');
   


  }
// principal area////////////////////////////////////////////////////////////////////////////
public function add_principal(){
   $this->adminauthcheck();



	return view('admin.add_principal');
}

 public function input_principal(Request $request){

$validator=Validator::make($request->all(), [
            'principal_image'=> 'mimes:jpeg,bmp,png,jpg,pdf,x-pdf,vnd.pdf,x-pdf|max:2024'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

            $data = array();
              $data['principal_id']=$request->principal_id;
          
              $data['add_principal']=$request->add_principal;
       
           $image=$request->file('principal_image');
           if($image){
           $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $uplode_path='image/';
            $image_url=$uplode_path.$image_full_name;
            $success=$image->move($uplode_path,$image_full_name);
            if($success){
            $data['principal_image']=$image_url;
            DB::table('tbl_principal')->insert($data);
            Session::put('message','principal message  add sucssfully');
            return Redirect::to('/add_principal');
            
            }     
        }   
          $data['wlc_image']='';
          DB::table('tbl_principal')->insert($data);
             Session::put('message','wlc,s data add sucssfully without image');
            return Redirect::to('/add_principal');
       

 }
public function all_principal(){
   $this->adminauthcheck();

$all_wlc = DB::table('tbl_principal')->orderBy('principal_id', 'desc')
    ->get();
         $manege_wlc=view('admin.all_principal')
             ->with('all_principal_info',$all_wlc);
             return view('admin.dashboard')
                 ->with('admin.all_principal',$manege_wlc);
         
     }
 public function edit_principal($principal_id){
       
       
         $info=DB::table('tbl_principal')
            ->where('principal_id',$principal_id)
            ->first();
        
        $manage=view('admin.edit_principal')
            ->with('edit_principal_info',$info);
            return view('admin.dashboard')  
                ->with('admin.edit_principal',$manage);
       
       
   }
  public function update_principal( Request $request,$principal_id){

     
  
            $data=array() ;
            $data['add_principal']=$request->add_principal;
           

             DB::table('tbl_principal')
                ->where('principal_id',$principal_id)
                ->update($data);
            Session::put('message',"principal  text update successfully!!!");
            return Redirect::to('/all_principal');

   }
    public function delete_principal($principal_id){
           DB::table('tbl_principal')
           ->where('principal_id',$principal_id)
            ->delete();
             Session::put('message',"principal delete successfully!!");
            return Redirect::to('/all_principal');
   


  }






  // vprincipal area////////////////////////////////////////////////////////////////////////////
public function add_vprincipal(){

   $this->adminauthcheck();


  return view('admin.add_vprincipal');
}

 public function input_vprincipal(Request $request){

$validator=Validator::make($request->all(), [
            'vprincipal_image'=> 'mimes:jpeg,bmp,png,jpg,pdf,x-pdf,vnd.pdf,x-pdf|max:2024'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }


            $data = array();
              $data['vprincipal_id']=$request->vprincipal_id;
          
              $data['add_vprincipal']=$request->add_vprincipal;
       
           $image=$request->file('vprincipal_image');
           if($image){
           $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $uplode_path='image/';
            $image_url=$uplode_path.$image_full_name;
            $success=$image->move($uplode_path,$image_full_name);
            if($success){
            $data['vprincipal_image']=$image_url;
            DB::table('tbl_vprincipal')->insert($data);
            Session::put('message','vprincipal message  add sucssfully');
            return Redirect::to('/add_vprincipal');
            
            }     
        }   
          $data['wlc_image']='';
          DB::table('tbl_vprincipal')->insert($data);
             Session::put('message','wlc,s data add sucssfully without image');
            return Redirect::to('/add_vprincipal');
       

 }
public function all_vprincipal(){
   $this->adminauthcheck();

$all_wlc = DB::table('tbl_vprincipal')->orderBy('vprincipal_id', 'desc')
    ->get();
         $manege_wlc=view('admin.all_vprincipal')
             ->with('all_vprincipal_info',$all_wlc);
             return view('admin.dashboard')
                 ->with('admin.all_vprincipal',$manege_wlc);
         
     }
 public function edit_vprincipal($vprincipal_id){
       
       
         $info=DB::table('tbl_vprincipal')
            ->where('vprincipal_id',$vprincipal_id)
            ->first();
        
        $manage=view('admin.edit_vprincipal')
            ->with('edit_vprincipal_info',$info);
            return view('admin.dashboard')  
                ->with('admin.edit_vprincipal',$manage);
       
       
   }
  public function update_vprincipal( Request $request,$vprincipal_id){

     
  
            $data=array() ;
            $data['add_vprincipal']=$request->add_vprincipal;
           

             DB::table('tbl_vprincipal')
                ->where('vprincipal_id',$vprincipal_id)
                ->update($data);
            Session::put('message',"vprincipal  text update successfully!!!");
            return Redirect::to('/all_vprincipal');

   }
    public function delete_vprincipal($vprincipal_id){
           DB::table('tbl_vprincipal')
           ->where('vprincipal_id',$vprincipal_id)
            ->delete();
             Session::put('message',"vprincipal delete successfully!!");
            return Redirect::to('/all_vprincipal');
   


  }

// forms uplode/////////////////////////////////////////////////////////////////////////////////////////////////////////
public function add_form(){
   $this->adminauthcheck();

return view('admin.add_form');


}
   public function input_form(Request $request){

$validator=Validator::make($request->all(), [
            'form_file'=> 'mimes:jpeg,bmp,png,jpg,pdf,x-pdf,vnd.pdf,x-pdf|max:2024'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

     
        $data = array();
          $data['add_form']=$request->add_form;
          $data['form_date']=$request->form_date;

        
 $file=$request->file('form_file');
           if($file){
           $file_name=str_random(20);
            $ext=strtolower($file->getClientOriginalExtension());
            $file_full_name=$file_name.'.'.$ext;
            $uplode_path='file/';
            $file_url=$uplode_path.$file_full_name;
            $success=$file->move($uplode_path,$file_full_name);

            if($success){
            $data['form_file']=$file_url;
            DB::table('tbl_form')->insert($data);
            Session::put('message','file  add sucssfully');
            return Redirect::to('/add_form');
            
            }     
        }   
          $data['form_file']='';
          DB::table('tbl_form')->insert($data);
             Session::put('message','form data add sucssfully without file');
            return Redirect::to('/add_form');
       


    
     }
     public function all_form(){
   $this->adminauthcheck();
        $all_form = DB::table('tbl_form')->orderBy('form_id', 'desc')
    ->get();
         $manege_form=view('admin.all_form')
             ->with('all_form_info',$all_form);
             return view('admin.dashboard')
                 ->with('admin.all_form',$manege_form);
         
     }

   public function delete_form($form_id){
           DB::table('tbl_form')
           ->where('form_id',$form_id)
            ->delete();
             Session::put('message',"form delete successfully!!");
            return Redirect::to('/all_form');
   


  }


// depertment info///////////////////////////////////////////////////////////////////////////
  public function computer_student(){



    return view('page.computer_student');
  }
 public function view_studentinfo($student_id){


       $student_view = DB::table('tbl_student')
       ->where('student_id',$student_id)
    ->first();
         $manege_view=view('page.student_info')
             ->with('allstudent_infos',$student_view);
             return view('welcome')
                 ->with('page.student_info',$manege_view);

    
  }
public function electronics_student(){

return view('page.electronics_student');


}
public function civil_student(){

return view('page.civil_student');


}
public function electrical_student(){

return view('page.electrical_student');


}
public function medical_student(){

return view('page.medical_student');


}
public function machanical_student(){

return view('page.machanical_student');


}
public function ipct_student(){

return view('page.ipct_student');


}
public function rac_student(){

return view('page.rac_student');


}
// teacher info//////////////////////////////////////////////////////////
 public function computer_teacher(){



    return view('page.computer_teacher');
  }
 public function view_teacherinfo($teacher_id){


       $teacher_view = DB::table('tbl_teacher')
       ->where('teacher_id',$teacher_id)
    ->first();
         $manege_view=view('page.teacher_info')
             ->with('allteacher_infos',$teacher_view);
             return view('welcome')
                 ->with('page.teacher_info',$manege_view);

    
  }
public function electronics_teacher(){

return view('page.electronics_teacher');


}
public function civil_teacher(){

return view('page.civil_teacher');


}
public function electrical_teacher(){

return view('page.electrical_teacher');


}
public function medical_teacher(){

return view('page.medical_teacher');


}
public function machanical_teacher(){

return view('page.mechanical_teacher');


}
public function ipct_teacher(){

return view('page.ipct_teacher');


}
public function non_tec(){

return view('page.non_tec');


}
public function rac_teacher(){

return view('page.rac_teacher');


}
public function form(){

return view('page.form');


}

// depertment page////////////////////////////////////////////////////////////////////////////////////////

public function computer_dpt()
{


return view('subject.computer');


}

public function electronics_dpt()
{


return view('subject.electronics');


}
public function electrical_dpt()
{


return view('subject.electrical');


}

public function medical_dpt()
{


return view('subject.medical');


}

public function machanical_dpt()
{


return view('subject.machanical');


}


public function ipct_dpt()
{


return view('subject.ipct');


}


public function rac_dpt()
{
return view('subject.rac');
}

public function civil_dpt()
{
return view('subject.civil');
}



public function mission_v()
{
return view('page.mission_v');
}

public function principal()
{
return view('page.principal');
}

public function principal_v()
{
return view('page.principal_v');
}
public function font_routine()
{
return view('page.font_routine');
}
public function semester_plan()
{
return view('page.semester_plan');
}
public function sms()
{
return view('page.sms');
}
public function adnan()
{
return view('page.adnan');
}
public function input_sms(Request $request){




            $data = array();
              $data['sms_name']=$request->sms_name;
          
              $data['sms_email']=$request->sms_email;
              $data['sms_comment']=$request->sms_comment;
              DB::table('sms_tbl')->insert($data);
             Session::put('message','***Message  send successfully!!***');
            return Redirect::to('/sms');



}

public function all_sms(){
   $this->adminauthcheck();

$all_sms = DB::table('sms_tbl')->orderBy('sms_id', 'desc')
    ->get();
         $manege_wlc=view('admin.all_sms')
             ->with('allsms_info',$all_sms);
             return view('admin.dashboard')
                 ->with('admin.all_sms',$manege_wlc);
         
     }

    public function delete_sms($sms_id){
           DB::table('sms_tbl')
           ->where('sms_id',$sms_id)
            ->delete();
             Session::put('message',"sms delete successfully!!");
            return Redirect::to('/all_sms');
   


  }




public function gallery(){

  return view('page.gallery');



}

public function result(){

  return view('page.result');



}

public function rules(){

  return view('page.rules');



}

public function campus(){

  return view('page.campus');



}




public function adminauthcheck(){
        $admin=Session::get('admin_id');
        if($admin){
            
            return;
           
        }
        
        else{
            
            return Redirect::to('/backend')->send();
           
        }
    }
    
    
}
  

















