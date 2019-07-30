<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', 'fontcontroller@index');
   
Route::get('/','homecontroller@index');
Route::get('/dashboard','admincontroller@index');
Route::get('/backend','admincontroller@backend');
Route::post('/loginadmin','admincontroller@loginadmin');
Route::get('/logout','admincontroller@logout');
Route::get('/dashboard','admincontroller@subdashboard');

//add teacher//////////////////////////////////////////////

Route::get('/add_teacher','admincontroller@add_teacher');
Route::post('/input_teacher','admincontroller@input_teacher');
Route::get('/all_teacher','admincontroller@all_teacher');
Route::get('/edit_teachers/{teacher_id}','admincontroller@edit_teachers');
Route::post('/update_teacher/{teacher_id}','admincontroller@update_teacher');
Route::get('/delete_teacher/{teacher_id}','admincontroller@delete_teacher');
// student area//////////////////////////////////////////////
Route::get('/add_student','admincontroller@add_student');
Route::post('/input_student','admincontroller@input_student');

Route::get('/all_student','admincontroller@all_student');


Route::get('/view_student/{student_id}','admincontroller@view_student');

Route::get('/delete_student/{student_id}','admincontroller@delete_student');
Route::get('/edit_students/{student_id}','admincontroller@edit_students');
Route::post('/update_student/{student_id}','admincontroller@update_student');
// depertment show////////////////////////////////
Route::get('/cse','admincontroller@cse');
Route::get('/electronics','admincontroller@electronics');
Route::get('/electrical','admincontroller@electrical');
Route::get('/electro_mediacl','admincontroller@electro_mediacl');
Route::get('/machanical','admincontroller@machanical');
Route::get('/rac','admincontroller@rac');
Route::get('/ipct','admincontroller@ipct');
Route::get('/civil','admincontroller@civil');

// news area///////////////////////////////////////////////////////////////////////

Route::get('/add_news','admincontroller@add_news');
Route::post('/input_news','admincontroller@input_news');
Route::get('/all_news','admincontroller@all_news');
Route::get('/delete_news/{news_id}','admincontroller@delete_news');
Route::get('/edit_news/{news_id}','admincontroller@edit_news');

Route::post('/update_news/{news_id}','admincontroller@update_news');
// notice uplode//////////////////////////////////////////////////////////////////////////////////
Route::get('/add_notice','admincontroller@add_notice');

Route::post('/input_notice','admincontroller@input_notice');
Route::post('/input_notice','admincontroller@input_notice');
Route::get('/all_notice','admincontroller@all_notice');
Route::get('/delete_notice/{notice_id}','admincontroller@delete_notice');
// notice fontend
Route::get('/notice','fontcontroller@notice');
//slider//////////////////////////////////////////////////////////////////////////

    Route::get('/add_slider','slidercontroller@add_slider');
    Route::get('/unactiveslider/{slider_id}','slidercontroller@unactiveslider');
    Route::get('/active_slider/{slider_id}','slidercontroller@active_slider');
    Route::post ('/save_slider','slidercontroller@save_slider');
    Route::get ('/all_slider','slidercontroller@all_slider');
    Route::get ('/delete_slider/{slider_id}','slidercontroller@delete_slider');


// welcome area///////////////////////////////////////////////////////////////////////////////////////////
Route::get('/add_wlc','fontcontroller@add_wlc');
Route::post('/input_wlc','fontcontroller@input_wlc');
Route::get('/all_wlc','fontcontroller@all_wlc');
Route::get('/edit_wlc/{wlc_id}','fontcontroller@edit_wlc');
Route::post('/update_wlc/{wlc_id}','fontcontroller@update_wlc');
Route::get('/delete_wlc/{wlc_id}','fontcontroller@delete_wlc');
// principal message area//////////////////////////////////////////////////////////
Route::get('/add_principal','fontcontroller@add_principal');
Route::post('/input_principal','fontcontroller@input_principal');
Route::get('/all_principal','fontcontroller@all_principal');
Route::get('/edit_principal/{principal_id}','fontcontroller@edit_principal');
 Route::post('/update_principal/{principal_id}','fontcontroller@update_principal');
 Route::get('/delete_principal/{principal_id}','fontcontroller@delete_principal');
 // vice principal message area//////////////////////////////////////////////////////////
Route::get('/add_vprincipal','fontcontroller@add_vprincipal');
Route::post('/input_vprincipal','fontcontroller@input_vprincipal');
Route::get('/all_vprincipal','fontcontroller@all_vprincipal');
Route::get('/edit_vprincipal/{vprincipal_id}','fontcontroller@edit_vprincipal');
 Route::post('/update_vprincipal/{vprincipal_id}','fontcontroller@update_vprincipal');
 Route::get('/delete_vprincipal/{vprincipal_id}','fontcontroller@delete_vprincipal');
 // form uplode
 Route::get('/add_form','fontcontroller@add_form');

Route::post('/input_form','fontcontroller@input_form');
Route::get('/all_form','fontcontroller@all_form');
Route::get('/delete_form/{form_id}','fontcontroller@delete_form');




// depertment information/////////////////////////////////////////////////////
Route::get('/computer_student','fontcontroller@computer_student');
Route::get('/view_studentinfo/{student_id}','fontcontroller@view_studentinfo');
Route::get('/electronics_student','fontcontroller@electronics_student');
Route::get('/electrical_student','fontcontroller@electrical_student');

Route::get('/medical_student','fontcontroller@medical_student');

Route::get('/machanical_student','fontcontroller@machanical_student');

Route::get('/ipct_student','fontcontroller@ipct_student');
Route::get('/rac_student','fontcontroller@rac_student');
Route::get('/civil_student','fontcontroller@civil_student');



// teacher information/////////////////////////////////////////////////////
Route::get('/computer_teacher','fontcontroller@computer_teacher');
Route::get('/view_teacherinfo/{teacher_id}','fontcontroller@view_teacherinfo');
Route::get('/electronics_teacher','fontcontroller@electronics_teacher');
Route::get('/electrical_teacher','fontcontroller@electrical_teacher');

Route::get('/medical_teacher','fontcontroller@medical_teacher');

Route::get('/machanical_teacher','fontcontroller@machanical_teacher');

Route::get('/ipct_teacher','fontcontroller@ipct_teacher');
Route::get('/rac_teacher','fontcontroller@rac_teacher');
Route::get('/civil_teacher','fontcontroller@civil_teacher');
Route::get('/non_tec','fontcontroller@non_tec');

// form///////////////////////////////////////////////////////
Route::get('/form','fontcontroller@form');
// depertment////////////////////////////////////////////////////////////////////////////////////////
Route::get('/computer_dpt','fontcontroller@computer_dpt');
Route::get('/medical_dpt','fontcontroller@medical_dpt');
Route::get('/machanical_dpt','fontcontroller@machanical_dpt');
Route::get('/ipct_dpt','fontcontroller@ipct_dpt');
Route::get('/rac_dpt','fontcontroller@rac_dpt');
Route::get('/electronics_dpt','fontcontroller@electronics_dpt');
Route::get('/electrical_dpt','fontcontroller@electrical_dpt');
Route::get('/civil_dpt','fontcontroller@civil_dpt');

// mission//////////////////////////////////////////////////////
Route::get('/mission_v','fontcontroller@mission_v');
Route::get('/principal','fontcontroller@principal');
Route::get('/principal_v','fontcontroller@principal_v');
// add_routine///////////////////////////////////////////////////
Route::get('/add_routine','admincontroller@add_routine');
Route::post('/input_routine','admincontroller@input_routine');
Route::get('/all_routine','admincontroller@all_routine');

Route::get('/delete_routine/{routine_id}','admincontroller@delete_routine');

Route::get('/font_routine','fontcontroller@font_routine');
// semester_plan////////////////////////////////////////////////////////////////////
Route::get('/semester_plan','fontcontroller@semester_plan');
Route::get('/sms','fontcontroller@sms');
Route::post('/input_sms','fontcontroller@input_sms');
Route::get('/all_sms','fontcontroller@all_sms');
Route::get('/delete_sms/{sms_id}','fontcontroller@delete_sms');
// adnan////////////////////////////////////////////////////////////////////////////////////
Route::get('/adnan','fontcontroller@adnan');
// albam////////////////////////////////////////////////////////////////////////////////
Route::get('/add_album','admincontroller@add_album');
Route::post('/input_albam','admincontroller@input_albam');

 Route::get ('/all_album','admincontroller@all_album');
    Route::get ('/delete_album/{albam_id}','admincontroller@delete_album');



Route::get('/gallery','fontcontroller@gallery');
Route::get('/rules','fontcontroller@rules');



// result////////////////////////////////////////////////////////////
Route::get('/add_result','admincontroller@add_result');
Route::post('/input_result','admincontroller@input_result');
Route::get('/all_result','admincontroller@all_result');
Route::get('/result','fontcontroller@result');
// campus//////////////////////////////////////////////////////////////
Route::get('/campus','fontcontroller@campus');
