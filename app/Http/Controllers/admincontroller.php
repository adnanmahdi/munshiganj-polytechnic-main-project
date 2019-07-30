<?php

namespace App\Http\Controllers;
use DB;
use Session;
session_start();
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



class admincontroller extends Controller
{
    public function index(){
         $this->adminauthcheck();
        return view('admin.dashboard');
        
        
    }
    public function backend(){
        return view('admin.login');
     
        
    }
    public function subdashboard(){
         $this->adminauthcheck();
        
        return view('admin.subdashboard');
        
        
    }
    
public function loginadmin(Request $request){
  
    $admin_email=$request->admin_email;
    $admin_password=md5($request->admin_password);
    $result=DB::table('admin_tbl')
        ->where('admin_email',$admin_email)
        ->where('admin_password',$admin_password)
        ->first();
 if($result){
     
     session::put('admin_name',$result->admin_name);
     session::put('admin_id',$result->admin_id);
     return Redirect::to('/dashboard');
     
 }
    else{
        
        session::put('massage',"Email or password are invalid");
        return Redirect::to('/backend');
      
    }

}
       public function logout(){
//        Session::put('admin_name',null);
//        Session::put('admin_id',null);
          Session::flush();
        return Redirect::to('/backend');
        
          
        
    }
    
    



//add teacher///////////////////////////////////////////////////////

public function add_teacher(){
     $this->adminauthcheck();
    return view('admin.addteacher');
    
    
}
   public function input_teacher(Request $request){
      
           $validator=Validator::make($request->all(), [
            'teacher_photo'=> 'mimes:jpeg,bmp,png,jpg|max:2024'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

            $data = array();
              $data['teacher_id']=$request->teacher_id;
              $data['teacher_name']=$request->teacher_name;
              $data['teacher_phone']=$request->teacher_phone;


              $data['teacher_address']=$request->teacher_address;
             $data['teacher_designation']=$request->teacher_designation;
              $data['teacher_depertment']=$request->teacher_depertment;
       
           $image=$request->file('teacher_photo');
           if($image){
           $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $uplode_path='image/';
            $image_url=$uplode_path.$image_full_name;
            $success=$image->move($uplode_path,$image_full_name);
            if($success){
            $data['teacher_photo']=$image_url;
            DB::table('tbl_teacher')->insert($data);
            Session::put('message','Teacher  add sucssfully');
            return Redirect::to('/add_teacher');
            
            }     
        }   
          $data['teacher_photo']='';
          DB::table('tbl_teacher')->insert($data);
             Session::put('message','Teacher,s data add sucssfully without image');
            return Redirect::to('/add_teacher');
       
    }
    
//    all teacher////////////////////////////////
    
        
    
     public function all_teacher(){
       $this->adminauthcheck();
$teacher_info = DB::table('tbl_teacher')->orderBy('teacher_id', 'desc')
    ->get();
         $manege_teacher=view('admin.all_teacher')
             ->with('allteacher_info',$teacher_info);
             return view('admin.dashboard')
                 ->with('admin.all_teacher',$manege_teacher);
         
     }
   public function edit_teachers($teacher_id){
            $this->adminauthcheck();
       
         $info=DB::table('tbl_teacher')
            ->where('teacher_id',$teacher_id)
            ->first();
        
        $manage=view('admin.edit_teacher')
            ->with('teacher_info',$info);
            return view('admin.dashboard')  
                ->with('admin.edit_teacher',$manage);
       
       
   }
   public function update_teacher( Request $request,$teacher_id){

     
  
            $data=array() ;
            $data['teacher_name']=$request->teacher_name;
            $data['teacher_address']=$request->teacher_address;
            $data['teacher_designation']=$request->teacher_designation;
            $data['teacher_phone']=$request->teacher_phone;
            $data['teacher_depertment']=$request->teacher_depertment;
       
       

             DB::table('tbl_teacher')
                ->where('teacher_id',$teacher_id)
                ->update($data);
            Session::put('message',"teacher update successfully!!!");
            return Redirect::to('/all_teacher');

   }
  public function delete_teacher($teacher_id){
           DB::table('tbl_teacher')
           ->where('teacher_id',$teacher_id)
            ->delete();
             Session::put('message',"Teacher delete successfully!!");
            return Redirect::to('/all_teacher');
   


  }
// student area/////////////////////////////////////////////////////////////////////////////////////////
public function add_student(){


     $this->adminauthcheck();


   return view('admin.add_student');
}

     public function input_student(Request $request){
  $validator=Validator::make($request->all(), [
            'student_photo'=> 'mimes:jpeg,bmp,png,jpg|max:2024'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = array();
          $data['student_name']=$request->student_name;
          $data['student_rool']=$request->student_rool;
          $data['student_father_name']=$request->student_father_name;
          $data['student_mother_name']=$request->student_mother_name;
          $data['student_reg']=$request->student_reg;
          $data['student_phone']=$request->student_phone;
          $data['student_shift']=$request->student_shift;
      
          $data['student_session']=$request->student_session;
          $data['student_address']=$request->student_address;
          $data['student_admissionyear']=$request->student_admissionyear;
          $data['student_depertment']=$request->student_depertment;

 $image=$request->file('student_photo');
           if($image){
           $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $uplode_path='image/';
            $image_url=$uplode_path.$image_full_name;
            $success=$image->move($uplode_path,$image_full_name);

            if($success){
            $data['student_photo']=$image_url;
            DB::table('tbl_student')->insert($data);
            Session::put('message','Student  add sucssfully');
            return Redirect::to('/add_student');
            
            }     
        }   
          $data['student_photo']='';
          DB::table('tbl_student')->insert($data);
             Session::put('message','Student,s data add sucssfully without image');
            return Redirect::to('/add_student');
       

    }   
      public function all_student(){
           $this->adminauthcheck();
$student_info = DB::table('tbl_student')->orderBy('student_id', 'desc')
    ->get();
         $manege_student=view('admin.all_student')
             ->with('allstudent_info',$student_info);
             return view('admin.dashboard')
                 ->with('admin.all_student',$manege_student);
         
     }


    public function view_student($student_id){
     $this->adminauthcheck();
       $student_view = DB::table('tbl_student')
       ->where('student_id',$student_id)
    ->first();
         $manege_view=view('admin.view_student')
             ->with('allstudent_info',$student_view);
             return view('admin.dashboard')
                 ->with('admin.view_student',$manege_view);


    }
  public function delete_student($student_id){
           DB::table('tbl_student')
           ->where('student_id',$student_id)
            ->delete();
             Session::put('message',"Student delete successfully!!");
            return Redirect::to('/all_student');
   


  }
   public function edit_students($student_id){
       
       
         $info=DB::table('tbl_student')
            ->where('student_id',$student_id)
            ->first();
        
        $manage=view('admin.edit_student')
            ->with('student_infos',$info);
            return view('admin.dashboard')  
                ->with('admin.edit_student',$manage);
       
       
   }
 
 public function update_student( Request $request,$student_id){

     
  
            $data=array() ;
           $data['student_name']=$request->student_name;
          $data['student_rool']=$request->student_rool;
          $data['student_father_name']=$request->student_father_name;
          $data['student_mother_name']=$request->student_mother_name;
          $data['student_reg']=$request->student_reg;
          $data['student_phone']=$request->student_phone;
          $data['student_shift']=$request->student_shift;
      
          $data['student_session']=$request->student_session;
          $data['student_address']=$request->student_address;
          $data['student_admissionyear']=$request->student_admissionyear;
          $data['student_depertment']=$request->student_depertment;

             DB::table('tbl_student')
                ->where('student_id',$student_id)
                ->update($data);
            Session::put('message',"Student update successfully!!!");
            return Redirect::to('/all_student');

   }

// depertment show_source////////////////////////////////////////////////////////////////////



   public function cse(){

          $this->adminauthcheck();
    $cseinfo=DB::table('tbl_student')
        ->where(['student_depertment'=>'computer'])
        ->get();
        
        $manage_cse=view('admin.cse')
             ->with('cseinfo',$cseinfo);
        return view('admin.dashboard')
            ->with('cse',$manage_cse);
             return view('admin.cse');
            


   }
   public function civil(){
     $this->adminauthcheck();
     
    $cseinfo=DB::table('tbl_student')
        ->where(['student_depertment'=>'civil'])
        ->get();
        
        $manage_cse=view('admin.civil')
             ->with('cseinfo',$cseinfo);
        return view('admin.dashboard')
            ->with('cse',$manage_cse);
             return view('admin.civil');
            


   }

   public function electronics(){
     $this->adminauthcheck();
     
    $einfo=DB::table('tbl_student')
        ->where(['student_depertment'=>'electronics'])
        ->get();
        
        $manage_e=view('admin.electronics')
             ->with('einfo',$einfo);
        return view('admin.dashboard')
            ->with('cse',$manage_e);
             return view('admin.electronics');
            


   }

   public function electrical(){
     $this->adminauthcheck();
     
    $einfo=DB::table('tbl_student')
        ->where(['student_depertment'=>'electrical'])
        ->get();
        
        $manage_e=view('admin.electrical')
             ->with('elinfo',$einfo);
        return view('admin.dashboard')
            ->with('cse',$manage_e);
             return view('admin.electrical');
            


   }
// depertment area //////////////////

   public function electro_mediacl(){

          $this->adminauthcheck();
    $einfo=DB::table('tbl_student')
        ->where(['student_depertment'=>'electro_mediacl'])
        ->get();
        
        $manage_e=view('admin.electro_mediacl')
             ->with('electro_mediaclinfo',$einfo);
        return view('admin.dashboard')
            ->with('cse',$manage_e);
             return view('admin.electro_mediacl');
            


   }



   public function machanical(){

          $this->adminauthcheck();
    $einfo=DB::table('tbl_student')
        ->where(['student_depertment'=>'mechanical'])
        ->get();
        
        $manage_e=view('admin.electrical')
             ->with('elinfo',$einfo);
        return view('admin.dashboard')
            ->with('cse',$manage_e);
             return view('admin.machanical');
            


   }

   public function rac(){
     $this->adminauthcheck();
     
    $einfo=DB::table('tbl_student')
        ->where(['student_depertment'=>'rac'])
        ->get();
        
        $manage_e=view('admin.rac')
             ->with('racinfo',$einfo);
        return view('admin.dashboard')
            ->with('cse',$manage_e);
             return view('admin.rac');
            


   }

   public function ipct(){
     $this->adminauthcheck();
     
    $einfo=DB::table('tbl_student')
        ->where(['student_depertment'=>'ipct'])
        ->get();
        
        $manage_e=view('admin.ipct')
             ->with('ipctinfo',$einfo);
        return view('admin.dashboard')
            ->with('cse',$manage_e);
             return view('admin.ipct');
            


   }

// news area////////////////////////////////////////////////////////////
public function add_news()
{
     $this->adminauthcheck();
return view('admin.add_news');



}


public function input_news(Request $request){

   

            $data=array() ;
           $data['add_news']=$request->add_news;
        

             DB::table('tbl_news')
             
                ->insert($data);
            Session::put('message',"news add  successfully!!!");
            return Redirect::to('/add_news');



}
      public function all_news(){
           $this->adminauthcheck();
$all_news = DB::table('tbl_news')->orderBy('news_id', 'desc')
    ->get();
         $manege_student=view('admin.all_news')
             ->with('all_news_info',$all_news);
             return view('admin.dashboard')
                 ->with('admin.all_news',$manege_student);
         
     }
public function delete_news($news_id)

{

   DB::table('tbl_news')
           ->where('news_id',$news_id)
            ->delete();
             Session::put('message',"News delete successfully!!");
            return Redirect::to('/all_news');



}


   public function edit_news($news_id){
       
            $this->adminauthcheck();
         $info=DB::table('tbl_news')
            ->where('news_id',$news_id)
            ->first();
        
        $manage=view('admin.edit_news')
            ->with('newsinfo',$info);
            return view('admin.dashboard')  
                ->with('admin.edit_news',$manage);
       
       
   }
 


 
 public function update_news( Request $request,$news_id){

     
  
            $data=array() ;
       
          $data['add_news']=$request->add_news;

             DB::table('tbl_news')
                ->where('news_id',$news_id)
                ->update($data);
            Session::put('message',"news update successfully!!!");
            return Redirect::to('/all_news');

   }
// notices uplode/////////////////////////////////////////////////////////////////////////////////////////////////////////
public function add_notice(){

     $this->adminauthcheck();
return view('admin.add_notice');


}
   public function input_notice(Request $request){

        $validator=Validator::make($request->all(), [
            'notice_file'=> 'mimes:jpeg,bmp,png,jpg,pdf,x-pdf,vnd.pdf,x-pdf|max:2024'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
     
        $data = array();
          $data['add_notice']=$request->add_notice;
          $data['notice_date']=$request->notice_date;

        
 $file=$request->file('notice_file');
           if($file){
           $file_name=str_random(20);
            $ext=strtolower($file->getClientOriginalExtension());
            $file_full_name=$file_name.'.'.$ext;
            $uplode_path='file/';
            $file_url=$uplode_path.$file_full_name;
            $success=$file->move($uplode_path,$file_full_name);

            if($success){
            $data['notice_file']=$file_url;
            DB::table('tbl_notice')->insert($data);
            Session::put('message','file  add sucssfully');
            return Redirect::to('/add_notice');
            
            }     
        }   
          $data['notice_file']='';
          DB::table('tbl_notice')->insert($data);
             Session::put('message','notice data add sucssfully without file');
            return Redirect::to('/add_notice');
       


    
     }
     public function all_notice(){
     $this->adminauthcheck();
        $all_notice = DB::table('tbl_notice')->orderBy('notice_id', 'desc')
    ->get();
         $manege_notice=view('admin.all_notice')
             ->with('all_notice_info',$all_notice);
             return view('admin.dashboard')
                 ->with('admin.all_notice',$manege_notice);
         
     }

   public function delete_notice($notice_id){
           DB::table('tbl_notice')
           ->where('notice_id',$notice_id)
            ->delete();
             Session::put('message',"Notice delete successfully!!");
            return Redirect::to('/all_notice');
   


  }


// add_routine//////////////////////////////////////////////////////////////////
  public function add_routine()
{
     $this->adminauthcheck();
return view('admin.add_routine');

}

public function input_routine(Request $request){


     
        $validator=Validator::make($request->all(), [
            'routine_file'=> 'mimes:jpeg,bmp,png,jpg,pdf,x-pdf,vnd.pdf,x-pdf|max:2024'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = array();
          $data['routine_date']=$request->routine_date;
          $data['add_routine_name']=$request->add_routine_name;
          $data['routine_depertment']=$request->routine_depertment;
          $data['routine_shift']=$request->routine_shift;
         

        
 $file=$request->file('routine_file');
           if($file){
           $file_name=str_random(20);
            $ext=strtolower($file->getClientOriginalExtension());
            $file_full_name=$file_name.'.'.$ext;
            $uplode_path='file/';
            $file_url=$uplode_path.$file_full_name;
            $success=$file->move($uplode_path,$file_full_name);

            if($success){
            $data['routine_file']=$file_url;
            DB::table('routine_tbl')->insert($data);
            Session::put('message','Routine  add sucssfully');
            return Redirect::to('/add_routine');
            
            }     
        }   
          $data['routine_file']='';
          DB::table('routine_tbl')->insert($data);
             Session::put('message','Routine data add sucssfully without file');
            return Redirect::to('/add_routine');
     }
    public function all_routine(){
     $this->adminauthcheck();
        $all_routine = DB::table('routine_tbl')->orderBy('routine_id', 'desc')
    ->get();
         $manege_notice=view('admin.all_routine')
             ->with('all_routine_info',$all_routine);
             return view('admin.dashboard')
                 ->with('admin.all_routine',$manege_notice);
         
     }
   public function delete_routine($routine_id){
           DB::table('routine_tbl')
           ->where('routine_id',$routine_id)
            ->delete();
             Session::put('message',"Routine delete successfully!!");
            return Redirect::to('/all_routine');
   


  }
// albam/////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function add_album(){
   $this->adminauthcheck();
return view('admin.add_albam');


}

public function input_albam(Request $request){

   
        $validator=Validator::make($request->all(), [
            'albam_file'=> 'mimes:jpeg,bmp,png,jpg,pdf,x-pdf,vnd.pdf,x-pdf|max:2024'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
     
        $data = array();
          $data['albam_date']=$request->albam_date;
          $data['add_albam_name']=$request->add_albam_name;
  
         

        
 $file=$request->file('albam_file');

           if($file){
           $file_name=str_random(20);
            $ext=strtolower($file->getClientOriginalExtension());
            $file_full_name=$file_name.'.'.$ext;
            $uplode_path='image/';
            $file_url=$uplode_path.$file_full_name;
            $success=$file->move($uplode_path,$file_full_name);

            if($success){
            $data['albam_file']=$file_url;
            DB::table('tbl_albam')->insert($data);
            Session::put('message','Album  add sucssfully');
            return Redirect::to('/add_album');
            
            }     
        }   
          $data['albam_file']='';
          DB::table('tbl_albam')->insert($data);
             Session::put('message','Album data add sucssfully without file');
            return Redirect::to('/add_album');
     }





// album////////////////////////////////////////////////////////////////


    
    public function all_album(){
      
         $this->adminauthcheck();
        $all=DB::table('tbl_albam')
        
            ->get();
        
        $manage=view('admin.all_album')
            ->with('result',$all);
        return View('admin.dashboard')
            ->with('admin.all_album',$manage);
      
    }
    
    public function delete_album($albam_id){
        
       DB::table('tbl_albam')
           ->where('albam_id',$albam_id)
           ->delete();
        
        Session::put('message',"Albam delete sussessfully!!!!");
        return Redirect::to('/all_album ');
  
        
        }
   // result///////////////////////////////////////////////////////////
    
   public function  add_result(){
    $this->adminauthcheck();

    return view('admin.add_result');
   }
   public function input_result(Request $request){

        $validator=Validator::make($request->all(), [
            'result_file'=> 'mimes:jpeg,bmp,png,jpg,pdf,x-pdf,vnd.pdf,x-pdf|max:2024'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

     
        $data = array();
          $data['result_date']=$request->result_date;
          $data['result_semester']=$request->result_semester;
          $data['result_depertment']=$request->result_depertment;
          $data['result_shift']=$request->result_shift;
     
         

        
 $file=$request->file('result_file');
           if($file){
           $file_name=str_random(20);
            $ext=strtolower($file->getClientOriginalExtension());
            $file_full_name=$file_name.'.'.$ext;
            $uplode_path='file/';
            $file_url=$uplode_path.$file_full_name;
            $success=$file->move($uplode_path,$file_full_name);

            if($success){
            $data['result_file']=$file_url;
            DB::table('tbl_result')->insert($data);
            Session::put('message','Result  add sucssfully');
            return Redirect::to('/add_result');
            
            }     
        }   
          $data['result_file']='';
          DB::table('tbl_result')->insert($data);
             Session::put('message','Result data add sucssfully without file');
            return Redirect::to('/add_result');
     }


      public function all_result(){
     $this->adminauthcheck();
        $all_result = DB::table('tbl_result')->orderBy('result_id', 'desc')
    ->get();
         $manege_notice=view('admin.all_result')
             ->with('all_result_info',$all_result);
             return view('admin.dashboard')
                 ->with('admin.all_result',$manege_notice);
         
     }

// end////////////////////////////////////////////////////////////////////////////////////////////



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
