<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Report;
use App\News;
use Alert;
use App\User;



class admincontroller extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function sendnews(){
        $getnews = News::orderBy('created_at','desc')->get();
        return view('admin.sendnews',compact('getnews'));
    }
    public function manage_abstract(){
        $teachers = Article::where('teacher','<',20)->orderBy('created_at','desc')->get();
        return view('admin.manage_abstract',compact('teachers'));
 
    }

    public function select_teacher(Request $request){
        Article::where('id',$request->id)->update(['teacher'=>$request->teacher]);
        return redirect('admin/manage_abstract');
    }

    public function select_teacher_tozero($id){
        Article::where('id',$id)->update(['teacher'=>0]);
        return redirect('admin/manage_abstract');

    }
    public function report_page(){
        $report = Report::where('level','1')->get();
        return view('admin.report',compact('report'));
    }
    public function report_page_bad($code){
        Report::where('id',$code)->update(['level'=>'3']);
        return redirect('/admin/report');
        
    }
    public function report_page_good($code){
        Report::where('id',$code)->update(['level'=>'2']);
        return redirect('/admin/report');
        
    }

    
    public function reported(){
        $report = Report::where('level','>','1')->get();
        return view('admin.reported',compact('report'));
    }
    public function recovery_report($code){
        Report::where('id',$code)->update(['level'=>'1']);
        return redirect('/admin/report');
    }

    public function sendnewspost(Request $request){
        $request->validate([
            'title'=>'required',
            'link'=>'required',
            'image'=>'required',
            'content'=>'required',
            'downloadfile'=>'required'

        ]);
        $news = new News();
        $news->title = $request->title;
        $news->content = $request->content;
        $news->link = $request->link;

        $myimage = $request->file('image');
        $myimagename = time() .'.'. $myimage->getClientOriginalExtension();
        $destinationpath = public_path('/images');
        $saveimagetodb = '/images/'. $myimagename;
        $myimage->move($destinationpath,$myimagename);
        
        $news->image = $saveimagetodb;

        $myfile = $request->file('downloadfile');
        $myfilename = time() .'_file' . '.'. $myfile->getClientOriginalExtension();
        $destinationpathfile = public_path('/images');
        $savefiletodb = '/images/'. $myfilename;
        $myfile->move($destinationpathfile,$myfilename);

        $news->downloadfile = $savefiletodb;
        $news->etcone = '0';
        $news->etctwo = '0';
        $news->save();
        Alert::success('ارسال خبر با موفقیت انجام شد');

        return redirect('/admin/sendnews');
    }

    public function need_fixbug_abstract(){
        $teachers = Article::where('verify','1')->get();
        return view('admin.need_bug_abstract',compact('teachers'));
    }

    public function verify_abstract(){
        $teachers = Article::where('verify','4')->get();
        return view('admin.verify_abstract',compact('teachers'));
    }

    public function notupload_article(){
        $teachers = Article::where('verify','4')->where('verify2','0')->get();
        return view('admin.notupload_article',compact('teachers'));
    }

    public function need_fixbug_article(){
        $teachers = Article::where('verify2','1')->orWhere('verify2','3')->get();
        return view('admin.need_bug_article',compact('teachers'));
    }

    public function verify_article(){
        $teachers = Article::where('verify2','4')->get();
        return view('admin.verify_article',compact('teachers'));
    }

    public function paied_article(){
        $teachers = Article::where('verify2','5')->get();
        return view('admin.paied_article',compact('teachers'));
    }

    public function delete_news(Request $request){
        News::where('id',$request->id)->delete();
        Alert::success('حذف خبر با موفقیت انجام شد');
        return redirect('admin/sendnews');
    }

    public function noarticleuser(){
        $teachers = User::where('kind','3')->get();
        return view('admin.noarticleuser',compact('teachers'));
        
    }

    public function allstudent(){
        $all = User::where('userlevel',0)->get();
        return view('admin.allstudent',compact('all'));
    }

}
