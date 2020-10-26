<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Auth;
use App\User;
use SoapClient;
use Alert;
use App\Report;
use App\News;
use App\Payment;

class studentscontroller extends Controller
{

    public function index(){
        $newsstudent = News::where('etcone','0')->orderby('created_at','DESC')->get();
        return view('students.status',compact('newsstudent'));
    }
    
    public function send_article(){

        return view('students.send_article');
    }

    
    public function sended_article(){
        $send_article = Article::where('user_id',Auth::user()->id)->where('verify','<',5)->get();
        return view('students.sended_article',compact('send_article'));
    }


    public function sended_article_post(Request $request){


        $request->validate([
            'title' => 'required|max:200',
            'titleen' => 'required|max:200',
            'axialofarticle' => 'required|max:150',
            'author' => 'required|max:150',
            'langarticle' => 'required|max:150',
            'abstractfa' => 'required|max:150',
            'abstracten' => 'required|max:150',
            'keywordfa' => 'required|max:150',
            'keyworden' => 'required|max:150',

        ]);

        if( $request->input('axialofarticle') == 'تحریم'){
            $code ="SA" ."-".substr(Auth::user()->englishname,0,2)  ."". rand(100,999); 
        }
        elseif($request->input('axialofarticle') == 'بالادست نفت و گاز') {
            $code = "UP" ."-".substr(Auth::user()->englishname,0,2)  ."". rand(100,999); 
        }
        elseif($request->input('axialofarticle') == 'پایین دست نفت و گاز') {
            $code = "DO" ."-".substr(Auth::user()->englishname,0,2)  ."". rand(100,999); 
        }
        elseif($request->input('axialofarticle') == 'دیپلماسی انرژی') {
            $code = "DI" ."-".substr(Auth::user()->englishname,0,2)  ."". rand(100,999); 
        }
        elseif($request->input('axialofarticle') == 'بهره وری انرژی') {
            $code = "EF" ."-".substr(Auth::user()->englishname,0,2)  ."". rand(100,999); 
        }
        elseif($request->input('axialofarticle') == 'برق') {
            $code = "EL" ."-".substr(Auth::user()->englishname,0,2)  ."". rand(100,999); 
        }

        $storedata = new Article();
        $storedata->user_id = Auth::user()->id;
        $storedata->title = $request->input('title');
        $storedata->titleen = $request->input('titleen');
        $storedata->langarticle = $request->input('langarticle');
        $storedata->axialofarticle = $request->input('axialofarticle');
        $storedata->author =$request->input('author');;
        $storedata->abstractfa = $request->input('abstractfa');
        $storedata->abstracten = $request->input('abstracten');  
        $storedata->keywordfa = $request->input('keywordfa');  
        $storedata->keyworden = $request->input('keyworden'); 
        $storedata->verify = '0'; 
        $storedata->verify2 = '0'; 
        $storedata->comment = '0'; 
        $storedata->filedocs = '0'; 
        $storedata->filepdf = '0'; 
        $storedata->teacher = '0'; 

        $storedata->code = $code; 

        
        // $filenamedocs = Auth()->user()->id . "_docs_";
        // $filenamepdf = Auth()->user()->id . "_pdf_";

        // $request->filedocs->store($filenamedocs);
        // $request->filepdf->store($filenamepdf);

        $storedata->save();
        Alert::success('چکیده با موفقیت ارسال شد');
        return redirect('student/sended-article');
    }

    public function editprofile(){
        $edit_profile = User::where('id',Auth::user()->id)->get();
        return view('students.editprofile',compact('edit_profile'));
    }

    //To Do
    public function editprofile_post(Request $request){
        $request->validate([
            'name' => 'required|max:200',
            'lastname' => 'required|max:200',
            'englishname' => 'required|max:200',
            'enlastname' => 'required|max:200',
            'idencode' => 'required|max:200',
            'gender' => 'required|max:200',
            'grade' => 'required|max:200',
            'birthdate' => 'required|max:200',
            'uni' => 'required|max:200',
            'phone' => 'required|max:200',
            'address' => 'required|max:200',
        ]);

        User::where('id',Auth::user()->id)->update([
            'name' => $request->name,
            'familyname' => $request->lastname,
            'englishname' => $request->englishname,
            'englishfamilyname' => $request->enlastname,
            'identitycode' => $request->idencode,
            'gender' => $request->gender,
            'birthdate' => $request->birthdate,
            'university' => $request->uni,
            'phone' => $request->phone,
            'address' => $request->address,


            
            ]);
            Alert::success('ویرایش پروفایل کاربری با موفقت انجام شد');
            return redirect('student/sended-article');

    }


    public function sendarticlefinal($id){
        $fetchdata = Article::where('code',$id)->get();
        return view('students.edit_final_article',compact('fetchdata'));
         
    }


    
    public function final_article(){
        $final = Article::where('user_id', Auth::user()->id)->where('verify',4)->where('verify2','<',5)->get();
        return view('students.final_article',compact('final'));
    }

    public function editabstract($id){
        $edit_article = Article::where('code',$id)->get();
        return view('students.edit_abstract',compact('edit_article'));
    }

    public function edit_abstract_post(Request $request){
        
        $request->validate([
            'title' => 'required|max:200',
            'titleen' => 'required|max:200',
            'axialofarticle' => 'required|max:200',
            'author' => 'required|max:200',
            'langarticle' => 'required|max:200',
            'keywordfa' => 'required|max:200',
            'keyworden' => 'required|max:200',
            'abstractfa' => 'required|max:200',
            'abstracten' => 'required|max:200',
        ]);
                
        Article::where('code',$request->code)->update([
            'title'=>request()->title,
            'titleen'=>request()->titleen,
            'axialofarticle'=>request()->axialofarticle,
            'author'=>request()->author,
            'langarticle'=>request()->langarticle,
            'keywordfa'=>request()->keywordfa,
            'keyworden'=>request()->keyworden,
            'abstractfa'=>request()->abstractfa,
            'abstracten'=>request()->abstracten
            ]);

        Article::where('code',$request->code)->update(['verify'=>2]);   
        Alert::success('ویرایش  چکیده با موفقیت انجام شد');
        return redirect('student/sended-article');
    }

    public function delete_abstract($id){
        
        Article::where('code',$id)->delete();
        return redirect('student/sended-article');
    }



    public function uploadarticle(Request $request){
        // $request->validate([
        //     'filedocs' => 'required|max:25000|mimes:docx',
        //     'filepdf' => 'required|max:25000|mimes:pdf'
        // ]);
        $data = getdate();
        $name_article = $request->filedocs->getClientOriginalName();
        //return "{$data['mday']}_{$data['wday']}_{$data['year']}";

        $folder = "{$data['mday']}_{$data['month']}_{$data['year']}" . "_" . Auth::user()->englishname . "_" . Auth::user()->englishfamilyname ;
        $savetodatabaseword = "app/" . "{$data['mday']}_{$data['month']}_{$data['year']}" . "_" . Auth::user()->englishname . "_" . Auth::user()->englishfamilyname."/{$request->code}.docx" ;
        $savetodatabasepdf =  "app/" . "{$data['mday']}_{$data['month']}_{$data['year']}" . "_" . Auth::user()->englishname . "_" . Auth::user()->englishfamilyname."/{$request->code}.pdf" ;
        
        $request->filedocs->storeAs($folder,"{$request->code}.docx");
        $request->filepdf->storeAs($folder,"{$request->code}.pdf");

        Article::where('id',$request->id)->update(['filedocs'=>$savetodatabaseword]);
        Article::where('id',$request->id)->update(['filepdf'=>$savetodatabasepdf]);    
            
        Article::where('id',$request->id)->update(['verify'=> 4]);
        Article::where('id',$request->id)->update(['verify2'=> 1]);

        Alert::success('آپلود فایل با موفقیت انجام شد');
        return redirect('student/sended-article');
        //$request->filedocs->store()

        
    }

    public function downloadfromserver($id){
        $download = Article::where('code',$id)->first();
        $downloaddocs = $download->filedocs;
        
        return response()->download(storage_path($downloaddocs));   

    }

    public function resend_article($id){
        $fetchdata = Article::where('code',$id)->where('verify2',2)->get();
        return view('students.resend_article',compact('fetchdata'));
    }

    public function editarticlepost(Request $request){
        // $request->validate([
        //     'filedocs' => 'required|max:25000|mimes:docx',
        //     'filepdf' => 'required|max:25000|mimes:pdf'
        // ]);
        $data = getdate();
        $name_article = $request->filedocs->getClientOriginalName();
        //return "{$data['mday']}_{$data['wday']}_{$data['year']}";

        $folder = "{$data['mday']}_{$data['month']}_{$data['year']}" . "_" . Auth::user()->englishname . "_" . Auth::user()->englishfamilyname ;
        $savetodatabaseword = "app/" . "{$data['mday']}_{$data['month']}_{$data['year']}" . "_" . Auth::user()->englishname . "_" . Auth::user()->englishfamilyname."/{$request->code}.docx" ;
        $savetodatabasepdf =  "app/" . "{$data['mday']}_{$data['month']}_{$data['year']}" . "_" . Auth::user()->englishname . "_" . Auth::user()->englishfamilyname."/{$request->code}.pdf" ;
        
        $request->filedocs->storeAs($folder,"{$request->code}.docx");
        $request->filepdf->storeAs($folder,"{$request->code}.pdf");

        Article::where('id',$request->id)->update(['filedocs'=>$savetodatabaseword]);
        Article::where('id',$request->id)->update(['filepdf'=>$savetodatabasepdf]);    
            
        Article::where('id',$request->id)->update(['verify2'=> 3]);
        Alert::success('آپلود مجدد مقاله با موفقت انجام شد');

        return redirect('student/final-article');
        //$request->filedocs->store()
    }


    public function payment(){
        $payment = Article::where('verify2','>','3')->where('user_id', Auth::user()->id)->get();
        return view('students.payment',compact('payment'));
    }

    public function report(){
        $report_table = Report::where('user_id',Auth::user()->id)->where('level','>','0')->get();
        return view('students.report',compact('report_table'));
    }
    public function report_post(Request $request){
        $request->validate([
            'user'=>'required',
            'title'=>'required|max:150',
            'code'=>'required|max:150|exists:articles',
            'contentreport'=>'required|max:150',

        ]);
        $report = new Report();
        $report->user_id = $request->user;
        $report->article_code = $request->code;
        $report->title = $request->title;
        $report->content = $request->contentreport;
        $report->level = '1';

        $report->save();
        alert()->success(' اعتراض با موفقیت ثبت شد، لطفا تا زمان پاسخ گویی منتظر بمانید', 'عملیات موفق');

        return redirect('student/report');         
        //create data base report for log report 

    }

    public function cancelreport(Request $request){
        Report::where('id',$request->id)->delete();
        alert()->success(' اعتراض با موفقیت حذف شد', 'عملیات موفق');

        return redirect('student/report');
    }

    //پرداخت نهایی پول قسمت نهایی شدم مقالات
    public function paymentzarinpalpost(Request $request){

        $MerchantID = 'edd03670-158a-11ea-ad42-000c295eb8fc'; //Required
        $Amount = 100000; //Amount will be based on Toman - Required
        $Description = '  تایید مقاله به شماره کد  '.$request->code ; // Required
        $Email = Auth::user()->email; // Optional
        $Mobile = Auth::user()->phone; // Optional
        $CallbackURL = 'http://localhost:8000/student/paymentzarinpal'; // Required
        
        
        $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
        
        $result = $client->PaymentRequest(
        [
        'MerchantID' => $MerchantID,
        'Amount' => $Amount,
        'Description' => $Description,
        'Email' => $Email,
        'Mobile' => $Mobile,
        'CallbackURL' => $CallbackURL,
        ]
        );
        
        //Redirect to URL You can do it also by creating a form
        if ($result->Status == 100) {

            Payment::create([
                'user_id' => Auth::user()->id ,
                'article_code' => $request->code ,
                'reserved' => $result->Authority ,
                'price' => $Amount
            ]);

        return redirect('https://www.zarinpal.com/pg/StartPay/'.$result->Authority);
        //برای استفاده از زرین گیت باید ادرس به صورت زیر تغییر کند:
        //Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority.'/ZarinGate');
        } else {
        echo'ERR: '.$result->Status;
        }   
     }

     public function paymentzarinpalget(){
        $MerchantID = 'edd03670-158a-11ea-ad42-000c295eb8fc';
        $Amount = 100000; 
        $Authority = $_GET['Authority'];
        
        if ($_GET['Status'] == 'OK') {
        
        $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
        
        $result = $client->PaymentVerification(
        [
        'MerchantID' => $MerchantID,
        'Authority' => $Authority,
        'Amount' => $Amount,
        ]
        );

        if ($result->Status == 100) {

            $id_pay = Payment::where('reserved',$Authority)->first();            
            $id_article = Payment::find($id_pay->id)->pay_to_article()->get();
            $id = $id_article[0]->id;
            Article::where('id',$id)->update(['verify2'=>5]);

            alert()->success('عملیات موفق', 'پرداخت با موفقیت انجام شد');
            return redirect('student/payment');


        } else {
            Alert::error('خطا در پرداخت', 'اشکال از طرف بانک میباشد با مدیریت سایت تماس بگیرید')->autoclose(4000);
            return redirect('student/payment');

        }
        } else {
            
            Alert::error(' لطفا دوباره تلاش کنید ','پرداخت ناموفق')->autoclose(4000);
            
            return redirect('student/payment');
        }
     }

     public function signinnoarticle(){
        $profilereg = User::where('id', Auth::user()->id)->get();    
        return view('students.signinnoarticle',compact('profilereg'));
     }

     public function regsiter_user_noarticle(Request $request){
        $request->validate([
            'name'=>'required|max:150',
            'family'=>'required|max:150',
            'nameen'=>'required|max:150|',
            'familyen'=>'required|max:150',
            'tel'=>'required|max:150',
            'codemeli'=>'required|max:150',
            'university'=>'required|max:150',
            'type'=>'required|max:15',
        ]);
        User::where('id',Auth::user()->id)->update([
            'name'=>$request->name,
            'familyname'=>$request->family,
            'englishname'=>$request->nameen,
            'englishfamilyname'=>$request->familyen,
            'phone'=>$request->tel,
            'identitycode'=>$request->codemeli,
            'university'=>$request->university,
            'kind'=>$request->type,
            ]);
        return redirect('student/signinnoarticle');
    }


    
    public function paynoarticle(Request $request){
        $request->validate([
            'kind'=>'required|max:3',
        ]);

            
        $MerchantID = 'edd03670-158a-11ea-ad42-000c295eb8fc'; //Required
            if($request->kind == 1){
                $Amount = 200000; 

            }elseif($request->kind == 2){
                $Amount = 300000; 

            }else{
                $Amount = 500000; 

            }
        $Description = '  تایید مقاله به شماره کد  '; // Required
        $Email = Auth::user()->email; // Optional
        $Mobile = Auth::user()->phone; // Optional
        $CallbackURL = 'http://localhost:8000/student/signinnoarticlepay'; // Required
        
        
        $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
        
        $result = $client->PaymentRequest(
        [
        'MerchantID' => $MerchantID,
        'Amount' => $Amount,
        'Description' => $Description,
        'Email' => $Email,
        'Mobile' => $Mobile,
        'CallbackURL' => $CallbackURL,
        ]
        );
        
        //Redirect to URL You can do it also by creating a form
        if ($result->Status == 100) {
        return redirect('https://www.zarinpal.com/pg/StartPay/'.$result->Authority);
        //برای استفاده از زرین گیت باید ادرس به صورت زیر تغییر کند:
        //Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority.'/ZarinGate');
        } else {
        echo'ERR: '.$result->Status;
        }
    }


    public function signinnoarticlepay(){
        $MerchantID = 'edd03670-158a-11ea-ad42-000c295eb8fc';
        $Amount = 300000; //Amount will be based on Toman
        $Authority = $_GET['Authority'];
        
        if ($_GET['Status'] == 'OK') {
        
        $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
        
        $result = $client->PaymentVerification(
        [
        'MerchantID' => $MerchantID,
        'Authority' => $Authority,
        'Amount' => $Amount,
        ]
        );
        
        if ($result->Status == 100) {
            alert()->success('عملیات موفق', 'پرداخت با موفقیت انجام شد');
            User::where('id',Auth::user()->id)->update(['kind'=>3]);

            Payment::create([
                'user_id' => Auth::user()->id ,
                'article_code' => Auth::user()->id ,
                'reserved' => $Authority ,
                'price' => $Amount
            ]);

            return redirect('student/signinnoarticle');


        } else {
            Alert::error('خطا در پرداخت', 'اشکال از طرف بانک میباشد با مدیریت سایت تماس بگیرید')->autoclose(4000);
            return redirect('student/signinnoarticle');

        }
        } else {
            Alert::error(' لطفا دوباره تلاش کنید ', 'پرداخت ناموفق')->autoclose(4000);

            Payment::create([
                'user_id' => Auth::user()->id ,
                'article_code' => Auth::user()->id ,
                'reserved' => $Authority ,
                'price' => $Amount
            ]);
            
            return redirect('student/signinnoarticle');
        }
     }
}
