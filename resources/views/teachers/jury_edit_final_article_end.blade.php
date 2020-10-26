@extends('teachers.index')

@section('content')
    <div class="row">
    <div class="col md 12">
    @foreach($verify_final as $fdata)

        <div class="card">
        <form action="/teacher/verifywithcommentfinal" method="POST">
        @csrf
            <div class="card-header">
                    مقاله نیاز به اصلاح دارد
            </div>
            <div class="body-card">
                <div class="row">

                    <div class="col-md-1"></div>
                    <div class="col-md-10 p-4">
                        <label for="comment"> در صورت نیاز به رفع نقص چکیده مقاله باکس جعبه رفع نقص رو پر کنید و دکمه نیاز به رفع نقص را کلید کنید :</label>
                        <textarea class="form-control" name="comment" id="comment"  rows="8" required></textarea>
                        <input type="text" name="id" value="{{$fdata->id}}" hidden>
                    </div>

                </div>

                <div class="row pb-3">
                    <div class="col-md-9"></div>
                    <div class="col-md-2">
                        <button class="btn btn-danger">اصلاح گردد</button>
                    </div>
                </div>
            </div>
        </form>
        </div>

        <div class="card mt-2">
            <div class="card-header" type="submit">
                مقاله تایید شده
            </div>

            <div class="card-body">
                <div class="row pb-2">

                    <div class="col-md-3">
                    در صورت تایید مقاله بر روی تایید کلیک کنید

                    </div>
                    <div class="col-md-6"></div>

                    <div class="col-md-2">
                    <a href="/teacher/verifynocomment-final-{{$fdata->id}}">
                        <button class="btn btn-success pr-4 pl-4">تایید</button>
                    </a>    
                    </div>

                </div>
            </div>
        
        </div>
            


        <br><br>

        <div class="card">
            <dic class="card-header"> اطلاعات مقاله
            </dic>
            <div class="card-body">
              
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

                        </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                    اطلاعات فرد ارسال کننده
            </div>

            <div class="card-body">
                <div class="row pt-2">
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                    <label for="name">نام ارسال کننده</label>
                                    <input class="form-control" type="text" value="{{App\Article::find($fdata->id)->user_article->name}} {{App\Article::find($fdata->id)->user_article->familyname}}">
                                </div></div>

                                <div class="col-md-4">
                                     <div class="form-group">
                                    <label for="name">ایمیل </label>
                                    <input class="form-control" type="text" value="{{App\Article::find($fdata->id)->user_article->email}}">
                                </div></div>

                                <div class="col-md-3">
                                     <div class="form-group">
                                    <label for="name">شماره تلفن </label>
                                    <input class="form-control" type="text" value="{{App\Article::find($fdata->id)->user_article->phone}}">
                                </div></div>
                             </div>
                        </div> 
                </div>
        </div>
                       
                        
                    @endforeach

           
    </div>

    </div>        

@endsection