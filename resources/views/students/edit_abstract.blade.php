@extends('students.index')

@section('content')
    <div class="row">
    <div class="col md 12">

    @foreach($edit_article as $edit)

        <div class="card mb-4">
                <div class="card-body">
                    <div style="margin:auto;text-align:center">
                    {{$edit->comment}}
                    </div>
                </div>
        </div>


        <div class="card">
            <div class="card-header">ارسال مقاله
            </div>               

            <div class="card-body">

                <form action="/student/edit_abstract_post" method="POST" enctype="multipart/form-data">
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
                              <input type="text" class="form-control" value="{{$edit->title}}" id="title" name="title">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                             <label for="titleen"> عنوان مقاله به انگلیسی :</label>
                              <input type="text" class="form-control" value="{{$edit->titleen}}" id="titleen" name="titleen">
                            </div>
                        </div>
                    </div>   

                    <div class="row">

                    <div class="col-md-4">
                                 <div class="form-group">
                                    <label for="axialofarticle"> محور مقاله  :</label>
                                    <select class="form-control" value="{{$edit->axialofarticle}}" name="axialofarticle" id="axialofarticle">
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
                                 <input name="author" value="{{$edit->author}}" id="author" class="form-control">
                                 <small style="text-align:right">نام نویسندگان را با کاما از یکدیگر جدا کنید.</small>
                            </div>
                         </div>
                    </div>   

                    <div class="row">
                    
                    <div class="col-md-4">
                                 <div class="form-group">
                                    <label for="langarticle"> زبان مقاله:</label>
                                    <select class="form-control" value="{{$edit->langarticle}}" name="langarticle" id="langarticle">
                                    <option>فارسی</option>
                                    <option>انگلیسی </option>
                                    </select>
                                 </div>
                    </div>


                    <div class="col-md-4">
                                 <div class="form-group">
                                 <label for="keywordfa">  کلمات کلیدی فارسی : </label>
                                 <input name="keywordfa" value="{{$edit->keywordfa}}" id="keywordfa" class="form-control">
                                 </div>
                             </div>
                      

                             <div class="col-md-4">
                                 <div class="form-group">
                                 <label for="keyworden">  کلمات کلیدی انگلیسی : </label>
                                 <input name="keyworden" value="{{$edit->keyworden}}" id="keyworden" class="form-control">
                                 </div>
                             </div>
                    <!-- <div class="col-md-4">
                                 <div class="form-group">
                                    <div style="border:.4px solid #CED4DA;padding:10px;border-radius:6px">
                                    <label for="filedocs">اپلود فایل مقاله(docx)</label>
                                     <input type="file" class="form-control-file" name="filedocs" id="filedocs">
                                     </div>

                                    </div>
                            </div>
                            
                    
                            <div class="col-md-4">
                                 <div class="form-group">
                                    <div style="border:.4px solid #CED4DA;padding:10px;border-radius:6px">
                                    <label for="filepdf">اپلود فایل  مقاله (pdf)</label>
                                     <input type="file" class="form-control-file" name="filepdf" id="filepdf">
                                     </div>

                                 </div>
                            </div> -->
                    </div>


                    <div class="row">
                        <div class="col-md-2"></div>
                            <div class="col-md-12">
                                 <div class="form-group">
                                 <label for="abstractfa"> چکیده فارسی مقاله : </label>
                                 <textarea name="abstractfa"  id="abstractfa" class="form-control" rows="5">{{$edit->abstractfa}}</textarea>
                            </div>
                         </div>
                    </div> 


                    <div class="row">
                        <div class="col-md-2"></div>
                            <div class="col-md-12">
                                 <div class="form-group">
                                 <label for="abstracten"> چکیده انگلیسی مقاله : </label>
                                 <textarea name="abstracten" id="abstracten" class="form-control" rows="5">{{$edit->abstracten}}</textarea>
                            </div>
                         </div>
                    </div> 

                    <input type="text" name="code" value="{{$edit->code}}" hidden>

                    <div class="row">
                            
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                            <div style="margin:auto;text-align:center">
                                 <div class="form-group">
                                   <button type="submit" style="margin-top:10px" class="btn btn-success btn-lg pr-4 pl-4"> اپدیت چکیده</button>
                                 </div>
                            </div>     
                            </div>
                    </div> 
                   
                </form>
            </div>
        </div>
    </div>
        @endforeach
    </div>        

@endsection