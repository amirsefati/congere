@extends('students.index')

@section('content')
    <div class="row">
    <div class="col md 12">
        <div class="card">
            <dic class="card-header">ارسال مقاله
            </dic>
            <div class="card-body">


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

                    @foreach($fetchdata as $fdata)
                    <form action="/student/endsendarticlep" method="POST" enctype="multipart/form-data">
                    @csrf
                        <input type="text" value="{{$fdata->id}}" name="id" hidden>
                        <input type="text" value="{{$fdata->code}}" name="code" hidden>

                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div style="margin:auto;text-align:center;background:orange;padding:20px;border-radius:5px">
                            {{$fdata->comment}}

                            </div>
                        </div>
                    </div>    
                    <div class="row mt-5">
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                                 <div class="form-group">
                                    <div style="border:.4px solid #CED4DA;padding:10px;border-radius:6px">
                                    <label for="filedocs">اپلود فایل مقاله(docx)</label>
                                     <input type="file" class="form-control-file" name="filedocs" id="filedocs">
                                     </div>

                                    </div>
                            </div>
                            
                    
                            <div class="col-md-3">
                                 <div class="form-group">
                                    <div style="border:.4px solid #CED4DA;padding:10px;border-radius:6px">
                                    <label for="filepdf">اپلود فایل  مقاله (pdf)</label>
                                     <input type="file" class="form-control-file" name="filepdf" id="filepdf">
                                     </div>

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
          

                            <br><br><hr/><br>
                            <div class="row">
                            

                        <div class="col-md-6">
                            <div class="form-group">
                             <label for="title">عنوان مقاله به فارسی :</label>
                              <input type="text" class="form-control" id="title" name="title" value="{{$fdata->title}}" disabled>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                             <label for="titleen"> عنوان مقاله به انگلیسی :</label>
                              <input type="text" class="form-control" id="titleen" name="titleen" value="{{$fdata->titleen}}" disabled>
                            </div>
                        </div>
                    </div>   

                    <div class="row">

                    <div class="col-md-4">
                                 <div class="form-group">
                                    <label for="axialofarticle"> محور مقاله  :</label>
                                    <select class="form-control" name="axialofarticle" value="{{$fdata->axialofarticle}}" id="axialofarticle" disabled>
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
                                 <input name="author" id="author" value="{{$fdata->author}}" class="form-control" disabled>
                                 <small style="text-align:right">نام نویسندگان را با کاما از یکدیگر جدا کنید.</small>
                            </div>
                         </div>
                    </div>   

                    <div class="row">
                    
                    <div class="col-md-4">
                                 <div class="form-group">
                                    <label for="langarticle"> زبان مقاله:</label>
                                    <select class="form-control" value="{{$fdata->langarticle}}"  name="langarticle" id="langarticle" disabled>
                                    <option>فارسی</option>
                                    <option>انگلیسی </option>
                                    </select>
                                 </div>
                    </div>


                    <div class="col-md-4">
                                 <div class="form-group">
                                 <label for="keywordfa">  کلمات کلیدی فارسی : </label>
                                 <input name="keywordfa" value="{{$fdata->keywordfa}}" id="keywordfa" class="form-control" disabled>
                                 </div>
                             </div>
                      

                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label for="keyworden">  کلمات کلیدی انگلیسی : </label>
                                 <input name="keyworden" value="{{$fdata->keyworden}}" id="keyworden" class="form-control" disabled>
                                 </div>
                             </div>
                   
                    </div>


                    <div class="row">
                        <div class="col-md-2"></div>
                            <div class="col-md-12">
                                 <div class="form-group">
                                 <label for="abstractfa"> چکیده فارسی مقاله : </label>
                                 <textarea name="abstractfa" id="abstractfa"  class="form-control" rows="5" disabled>{{$fdata->abstractfa}}</textarea>
                            </div>
                         </div>
                    </div> 


                    <div class="row">
                        <div class="col-md-2"></div>
                            <div class="col-md-12">
                                 <div class="form-group">
                                 <label for="abstracten"> چکیده انگلیسی مقاله : </label>
                                 <textarea name="abstracten" id="abstracten"  class="form-control" rows="5" disabled>{{$fdata->abstracten}}</textarea>
                            </div>
                         </div>
                    </div> 

                    <div class="row">
                            
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                            <div style="margin:auto;text-align:center">
                                 
                            </div>     
                            </div>
                    </div> 
                   @endforeach
            </div>
        </div>
    </div>

    </div>        

@endsection