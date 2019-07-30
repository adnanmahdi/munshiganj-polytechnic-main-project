<?php

namespace App\Http\Controllers;
use DB;
use Session;
use Validator;
session_start();
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class slidercontroller extends Controller
{
    
    public function add_slider(){
         $this->adminauthcheck();
        return view('page.addslider');
        
        
        
        
        
    }
    
    
     public function save_slider (Request $request){


        $validator=Validator::make($request->all(), [
            'slider_image'=> 'mimes:jpeg,bmp,png,jpg|max:2024'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
         
         $data=array();


          $data['publication_status']=$request->publication_status;
         
            $image=$request->file('slider_image');
        if($image){
           $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $uplode_path='image/';
            $image_url=$uplode_path.$image_full_name;
            $success=$image->move($uplode_path,$image_full_name);
            if($success){
                $data['slider_image']=$image_url;
                DB::table('tbl_slider')->insert($data);
               session::put('message','slider  add sucssfully');
            return Redirect::to('/add_slider');
            
            }     
        }   
          $data['slider_image']='';
          DB::table('tbl_slider')->insert($data);
         
             session::put('message','slider add sucssfully without image');
            return Redirect::to('/add_slider');
        
        
        
         
         
         
         
     }
    
    public function all_slider(){
         $this->adminauthcheck();
        $all=DB::table('tbl_slider')
        
            ->get();
        
        $manage=view('page.allslider')
            ->with('result',$all);
        return View('admin.dashboard')
            ->with('page.allslider',$manage);
        
        
        
        
       // return view('page.allslider');
        
        
        
        
        
    }
    
    public function delete_slider($slider_id){
        
       DB::table('tbl_slider')
           ->where('slider_id',$slider_id)
           ->delete();
        
        Session::put('message',"slider delete sussessfully!!!!");
        return Redirect::to('/all_slider ');
  
        
        
        
        
        
        
    }
    public function unactiveslider($slider_id){
        $info=DB::table('tbl_slider')
            ->where('slider_id',$slider_id)
            ->update(['publication_status'=>0]);
        Session::put('message',"slider unactive successfully!!!!");
        return Redirect::to('/all_slider');
   
        
    }
        public function active_slider($slider_id){
        $info=DB::table('tbl_slider')
            ->where('slider_id',$slider_id)
            ->update(['publication_status'=>1]);
        Session::put('message',"slider active successfully!!!!");
        return Redirect::to('/all_slider');
   
        
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
