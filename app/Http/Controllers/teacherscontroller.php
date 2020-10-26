<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Auth;
use Alert;
class teacherscontroller extends Controller
{
    public function index(){
        return view('teachers.index');
    }

    public function jury_abstract(){
    
    $teacher = Article::where('teacher',Auth::user()->id)->where('verify','<',5)->get();    
    return view('teachers.jury_abstract',compact('teacher'));

    }

    public function verify_abstract($id){
        $verify_article = Article::where('id',$id)->get();
        return view('teachers.jury_edit_abstract',compact('verify_article'));
    }

    public function verify_abstract_no_comment($id){
        Article::where('id',$id)->update(['verify'=>'3']);
        return redirect('teacher/jury-abstract');
    }

    public function verify_abstract_with_comment(Request $request){
      
        Article::where('id',$request->id)->update(["comment"=>$request->comment,"verify"=>1]);
        return redirect('teacher/jury-abstract');
    }

    public function jury_final(){
        $teacher = Article::where('teacher',Auth::user()->id)->where('verify2','<',6)->where('verify','4')->get();    
        return view('teachers.jury_final',compact('teacher'));
    }

    public function verifyabstractfianl($id)
    {
        $verify_final = Article::where('id',$id)->get();
        return view('teachers.jury_edit_final_article_end',compact('verify_final'));
    }


    public function verifywithcommentfinal(Request $request){
        Article::where('id',$request->id)->update(["comment"=>$request->comment,"verify2"=>2]);
        return redirect('teacher/jury-final');
    }

    public function verify_article_no_comment($id){
        Article::where('id',$id)->update(['verify2'=>'4']);
        return redirect('teacher/jury-final');
       

    }

    public function downloadfromserverpdf($id){
        $downloadpdf = Article::where('code',$id)->first();
        return response()->download(storage_path($downloadpdf->filepdf));
    }

    public function downloadfromserverword($id){
        $downloadpdf = Article::where('code',$id)->first();
        return response()->download(storage_path($downloadpdf->filedocs)); 
       }

       public function amir(Request $request){
           return $request;
       }
}
