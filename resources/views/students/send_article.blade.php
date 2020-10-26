@extends('students.index')

@section('content')
    <div class="row">
    <div class="col md 12">
        <div class="card">
            <dic class="card-header">ارسال مقاله
            </dic>
            <div class="card-body">
                <form action="/student/send-article" method="POST" enctype="multipart/form-data">
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


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                             <label for="title">عنوان مقاله به فارسی :</label>
                              <input type="text" value="{{old('title')}}" class="form-control" id="title" name="title">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                             <label for="titleen"> عنوان مقاله به انگلیسی :</label>
                              <input type="text" value="{{old('titleen')}}" class="form-control" id="titleen" name="titleen">
                            </div>
                        </div>
                    </div>   

                    <div class="row">

                    <div class="col-md-4">
                                 <div class="form-group">
                                    <label for="axialofarticle"> محور مقاله  :</label>
                                    <select class="form-control" name="axialofarticle" id="axialofarticle">
                                    <option>تحریم</option>
                                    <option>بالادست نفت و گاز</option>
                                    <option>پایین دست نفت و گاز </option>
                                    <option>دیپلماسی انرژی</option>
                                    <option>بهره وری انرژی</option>
                                    <option>برق</option>

                                    </select>
                                 </div>
                            </div>

                    <div class="col-md-8">
                                 <div class="form-group">
                                 <label for="author"> نویسندگان </label>
                                 <input name="author" value="{{old('author')}}" id="author" class="form-control">
                                 <small style="text-align:right">نام نویسندگان را با کاما از یکدیگر جدا کنید.</small>
                            </div>
                         </div>
                    </div>   

                    <div class="row">
                    
                    <div class="col-md-4">
                                 <div class="form-group">
                                    <label for="langarticle"> زبان مقاله:</label>
                                    <select class="form-control" name="langarticle" id="langarticle">
                                    <option>فارسی</option>
                                    <option>انگلیسی </option>
                                    </select>
                                 </div>
                    </div>


                    <div class="col-md-4">
                                 <div class="form-group">
                                 <label for="keywordfa">  کلمات کلیدی فارسی : </label>
                                 <input name="keywordfa" value="{{old('keywordfa')}}" id="keywordfa" class="form-control">
                                 </div>
                             </div>
                      

                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label for="keyworden">  کلمات کلیدی انگلیسی : </label>
                                 <input name="keyworden" value="{{old('keyworden')}}" id="keyworden" class="form-control">
                                 </div>
                             </div>
       
                    </div>


                    <div class="row">
                        <div class="col-md-2"></div>
                            <div class="col-md-12">
                                 <div class="form-group">
                                 <label for="abstractfa"> چکیده فارسی مقاله : </label>
                                 <textarea name="abstractfa" id="abstractfa" class="form-control" rows="5">{{{old('abstractfa')}}}</textarea>
                            </div>
                         </div>
                    </div> 


                    <div class="row">
                        <div class="col-md-2"></div>
                            <div class="col-md-12">
                                 <div class="form-group">
                                 <label for="abstracten"> چکیده انگلیسی مقاله : </label>
                                 <textarea name="abstracten" id="abstracten" class="form-control" rows="5">{{{old('abstracten')}}}</textarea>
                            </div>
                         </div>
                    </div> 

                    <div class="row">
                            
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                            <div style="margin:auto;text-align:center">
                                 <div class="form-group">
                                   <button type="submit" style="margin-top:10px" class="btn btn-success btn-lg pr-4 pl-4">ارسال مقاله</button>
                                 </div>
                            </div>     
                            </div>
                    </div> 
                   
                </form>
            </div>
        </div>
    </div>

    </div>        

@endsection