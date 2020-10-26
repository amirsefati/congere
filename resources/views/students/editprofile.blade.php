@extends('students.index')

@section('content')
    <div class="row">
    <div class="col md 12">
    <div class="card">
                <div class="card-header">     آپدیت پروفایل  :</div>
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

                <div class="card-body">
                <form action="/student/editprofile" method="POST">
                @csrf
        @foreach($edit_profile as $profile)

            <div class="row">
                <div class="col-md-3">
                    <label for="name">نام :</label>
                    <input type="text" name="name" class="form-control" value="{{$profile->name}}">
                </div>

                <div class="col-md-3">
                    <label for="lastname">نام خانوادگی :</label>
                    <input type="text" name="lastname" class="form-control" value="{{$profile->familyname}}">
                </div>

                <div class="col-md-3">
                    <label for="englishname">نام انگلیسی :</label>
                    <input type="text" name="englishname" class="form-control" value="{{$profile->englishname}}">
                </div>

                <div class="col-md-3">
                    <label for="enlastname">نام خانوادگی انگلیسی :</label>
                    <input type="text" name="enlastname" class="form-control" value="{{$profile->englishfamilyname}}">
                </div>
            </div>

<br>
            <div class="row">
                <div class="col-md-3">
                    <label for="idencode">شماره شناسنامه :</label>
                    <input type="text" name="idencode" class="form-control" value="{{$profile->identitycode}}">
                </div>

                <div class="col-md-3">
                <label for="exampleFormControlSelect1">جنسیت</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="gender" dir="rtl">
                                <option>مرد</option>
                                <option>زن</option>
                                </select>
                </div>

                <div class="col-md-3">
                    <label for="grade">مدرک تحصیلی  :</label>
                    <input type="text" name="grade" class="form-control" value="{{$profile->grade}}">
                </div>

                <div class="col-md-3">
                <label for="exampleInputEmail1">تاریخ تولد</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" name="birthdate" aria-describedby="emailHelp" value="{{$profile->birthdate}}" placeholder="">        
                </div>
            </div>

<br>
            <div class="row">
                <div class="col-md-4">
                    <label for="uni"> دانشگاه :</label>
                    <input type="text" name="uni" class="form-control" value="{{$profile->university}}">
                </div>

                <div class="col-md-4">
                    <label for="phone">شماره تلفن  :</label>
                    <input type="text" name="phone" class="form-control" value="{{$profile->phone}}">
                </div>

                <div class="col-md-4">
                    <label for="address">آدرس   :</label>
                    <input type="text" name="address" class="form-control" value="{{$profile->address}}">
                </div>

               
            </div>
<br><br>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div style="margin:auto;text-align:center">
                         <button class="btn btn-success pr-5 pl-5">آپدیت اطلاعات</button>
                     </div>
                </div>

            </div>
            </form>
        @endforeach       
                </div>
            </div>
    </div>

    </div>        

@endsection