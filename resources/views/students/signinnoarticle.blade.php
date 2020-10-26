@extends('students.index')

@section('content')
    <div class="row">
    <div class="col md 12">
        <div class="card">
            <div class="card-header"> مشخصات کارت ورود به کنگره
            </div>
            <div class="card-body" style="margin-bottom:10px">
        @if(App\User::where('id',Auth::user()->id)->pluck('kind') == '[2]' || App\User::where('id',Auth::user()->id)->pluck('kind') == '[1]' )


                <div class="page1">
                    <p style="text-align:right">
                    مشخصات زیر به منزله ی هویت شما جهت حضور در کنگره است ، لازم به ذکر است پس از تایید مشخصات و پرداخت وجه مسئولیت هر گونه مغایرتی در مشخصات وارد شده با هویت شما به عهده شخص است .
                    </p>
                    <form action="/student/regsiter_user_noarticle" method="POST">
                    @csrf


                 @if (count($errors) > 0)
                        <div class="alert alert-danger" style="margin:auto;text-align:center">
                            لطفا برای ارسال فرم به موارد زیر دقت کیند<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                <br>
                            </ul>
                        </div>
                        <br>    
                    @endif

                    @foreach($profilereg as $item)
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                             <label for="title"> نام  :</label>
                              <input type="text" value="{{$item->name}}" class="form-control" id="name" name="name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                             <label for="title"> نام خانوادگی  :</label>
                              <input type="text" value="{{$item->familyname}}" class="form-control" id="title" name="family">
                            </div>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                             <label for="title">  نام انگلیسی :</label>
                              <input type="text" value="{{$item->englishname}}" class="form-control" id="title" name="nameen">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                             <label for="title"> نام خانوادگی انگلیسی :</label>
                              <input type="text" value="{{$item->englishfamilyname}}" class="form-control" id="title" name="familyen">
                            </div>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                             <label for="title">   شماره تماس :</label>
                              <input type="text" value="{{$item->phone}}" class="form-control" id="title" name="tel">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                             <label for="title"> کد ملی :</label>
                              <input type="text" value="{{$item->identitycode}}" class="form-control" id="title" name="codemeli">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                             <label for="title">    شرکت/دانشگاه :</label>
                              <input type="text" value="{{$item->university}}" class="form-control" id="title" name="university">
                            </div>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                             <label for="title">  نوع ثبت نام :</label>
                                <select name="type" class="form-control">
                                    <option value=""> انتخاب کنید ...</option>
                                    <option value="1">دانشجو</option>
                                    <option value="2"> عادی</option>

                                </select>

                            </div>
                        </div>

                        <div class="col-md-6" >
                            <div style="padding:30px;float:left">
                                <button type="submit" class="btn btn-warning pl-5 pr-5">تصحیح اطلاعات</button>
                            </div>

                            
                        </div>

                        
                        </div>

                  
                        <hr style=" border: 0;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));">
                    <div class="row">
                        <div class="col-md-12">

                        <div style="text-align:center;margin:auto">
                                @if($item->kind > 0)
                                <p><strong>پس از  انتخاب نوع ثبت نام </strong> و چک کردن دقیق اطلاعات برای  شرکت در کنفرانس و پرداخت هزینه کلید کنید</p>

                                    <button id="btnregsiterpage1" type="button" class="btn btn-success pl-5 pr-5">تایید اطلاعات</button>
                                @else
                                    لطفا در صورت مغایرت اطلاعات خود را تصحیح و نوع ثبت نام را انتخاب کنید
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
                </div> 

            
          
                </div>

                <div class="page2" style="display:none">
                    <div class="row"  >
                        <div class="col-md-1"></div>
                            <div class="col-md-10">
                            <table class="table table-bordered">
  
    <tbody>
      <tr>
      <form action="/student/paynoarticle" method="POST">
      @csrf
      <input name="kind" value="{{$item->kind}}" hidden>
        <td style="padding:15px">نام : {{$item->name}}</td>
        <td>نام خانوادگی : {{$item->familyname}}</td>
        <td>نام انگلیسی : {{$item->englishname}}</td>
        <td>نام خانوادگی انگلیسی : {{$item->englishfamilyname}}</td>

      </tr>
      <tr>
        <td style="padding:15px">شماره تماس : {{$item->phone}}</td>
        <td>کد ملی : {{$item->identitycode}}</td>
        <td>شرکت/دانشگاه : {{$item->university}}</td>
        <td>نوع ثبت نام : 
        @if($item->kind == 1)
            دانشجویی
        @elseif($item->kind == 2)
            عادی
        @endif
        </td>

      </tr>
      <tr>
        <td colspan="4" style="padding:30px">
            برآورد هزینه : 
            @if($item->kind == 1)
                200 هزار تومان
            @elseif($item->kind == 2)
                300 هزار تومان
            @endif
            
            </span>
        <div style="text-align:center;margin:auto"> <br><br>   
        <button class="btn btn-success"> پرداخت هزینه </button>

        </form>

            <span> <a href="/student/signinnoarticle"><button class="btn btn-warning">ویرایش مجدد</button> </a>
            <button class="btn btn-secondary">دریافت کاتالوگ</button>
            <button class="btn btn-danger">زمان بندی کنگره</button>
        </div>    
        </span>
        </td>

      </tr>
    </tbody>
    @endforeach

    @else
    @foreach($profilereg as $item)
    <table class="table table-bordered">

    <tbody>
      <tr>
      <form action="/student/paynoarticle" method="POST">
      @csrf
      <input name="kind" value="{{$item->kind}}" hidden>
        <td style="padding:15px">نام : {{$item->name}}</td>
        <td>نام خانوادگی : {{$item->familyname}}</td>
        <td>نام انگلیسی : {{$item->englishname}}</td>
        <td>نام خانوادگی انگلیسی : {{$item->englishfamilyname}}</td>

      </tr>
      <tr>
        <td style="padding:15px">شماره تماس : {{$item->phone}}</td>
        <td>کد ملی : {{$item->identitycode}}</td>
        <td>شرکت/دانشگاه : {{$item->university}}</td>
        <td>ثبت نام با موفقیت انجام شد
        </td>

      </tr>
      <tr>
        

      </tr>
    </tbody>
  
    @endforeach
    @endif    

  </table>

                            </div>

                    </div> 
            </div>

            </div>
            <br>
            <br>

        </div>
    </div>

    </div>        

@endsection