@extends('students.index')

@section('content')
    <div class="row">
    <div class="col md 12">
        <div class="card">
            <dic class="card-header">مقالات ارسال شده
            </dic>
            <div class="card-body">
                <table class="table table-striped">

                    <thead>
                        <tr>
                        <th scope="col">کد</th>
                        <th scope="col">عنوان</th>
                        <th scope="col">وضعیت چکیده</th>
                        <th scope="col">تاریخ ارسال</th>
                        <th scope="col">ویرایش</th>
                        <th scope="col">آپلود مقاله نهایی</th>



                        </tr>
                    </thead>
                    <tbody>
                    @foreach($send_article as $article)

                        <tr>
                        <td>{{$article->code}}</td>
                        <td>{{$article->title}}</td>
                        



                <!-- @if($article->verify2 == 3)
                <td>

                       @if($article->verify2 == 0)
                        <button class="btn btn-Secondary">نامشخص</botton>

                        @elseif($article->verify2 == 1)
                        <button class="btn btn-info">در دست بررسی</botton>

                        @elseif($article->verify2 == 2)
                        <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="{{$article->comment}}">
                        نیاز به رفع نقص
                        </button>
                        @elseif($article->verify2 == 3)
                        <button class="btn btn-success">تایید شده</botton>

                    @endif
                    </td>

                    <td>
                    <a href="/student/final-article">
                    <button type="button"  class="btn btn-warning">نهایی کردن مقاله</button>
                    </a>
                    </td> -->

                <!-- @else -->
                        <td>
                             @if($article->verify == 0)
                        <button class="btn btn-info">در دست بررسی</button>
                            @elseif($article->verify == 1)
                        <button class="btn btn-danger"> نیاز به رفع نقص</button>
                            @elseif($article->verify == 2 )
                        <button class="btn btn-primary"> در دست بررسی</button>
                             @elseif($article->verify == 3 )
                        <button class="btn btn-success"> تایید شده  </button>
                             @elseif($article->verify == 4 )
                          نهایی شده 

                             @endif   
                        </td>
                        <td>{{$article->updated_at}}</td>
                        <td>
                        @if($article->verify == 1)
                            <a href="/student/editabstract-{{$article->code}}">
                                <button type="button" class="btn btn-info btn-sm">ویرایش</button></a>
                            <a href="/student/delete-{{$article->code}}">
                                <button type="button" class="btn btn-danger btn-sm">حذف</button></a>
                       
                        @else
                        امکان ویراِش ندارید

                        @endif
                        </td>
                        <td>
                            @if($article->verify == 3)

                            <a href="/student/sendarticlefinal-{{$article->code}}">
                            <button type="button" class="btn btn-dark">آپلود</button>
                            </a>
                            @else
                            <button type="button" class="btn btn-dark disabled">غیرفعال</button>

                            </td>
                                @endif   


   <td>
                       

                     
                <!-- @endif -->

                        </td>
                        </tr>
                     
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </div>        

@endsection