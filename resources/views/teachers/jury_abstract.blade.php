@extends('teachers.index')

@section('content')
    <div class="row">
    <div class="col md 12">
        <div class="card">
            <dic class="card-header">
            </dic>
            <div class="card-body">
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">ردیف</th>
                        <th scope="col">کد</th>
                        <th scope="col">عنوان مقاله</th>
                        <th scope="col">نام نویسنده</th>
                        <th scope="col">دانشگاه</th>
                        <th scope="col">وضعیت داوری چکیده</th>

                        </tr>

                    </thead>
                    <tbody>
                    @foreach($teacher as $article)

                        <tr>
                        <th scope="row">{{$article->id}}</th>
                        <th>{{$article->code}}</th>
                        <td> {{$article->title}}</td>

                        <td>{{$article->author}}</td>
                        <td> {{App\Article::find($article->id)->user_article->university}}</td>
                        <!-- <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="{{$article->abstractfa}}">
                        <button> -->

                        @if($article->verify == 0)
                            <td>
                                <a href="/teacher/verify-abstract-{{$article->id}}">
                                    <button class="btn btn-danger">بررسی نشده</button>
                                </a>
                            </td>
                        @elseif($article->verify == 1)
                            <td><button class="btn btn-warning">منتظر پاسخ نویسنده</button></td>

                        @elseif($article->verify == 2)
                            <td>
                                <a href="/teacher/verify-abstract-{{$article->id}}">
                                    <button class="btn btn-danger">بازبینی مجدد </button>
                                </a>
                            </td>

                        @elseif($article->verify == 3)
                         <td><button class="btn btn-success">بررسی و تایید شده</button></td>
                        
                         @elseif($article->verify == 4)
                         <td>  مقاله آپلود شده</td>
                        

                        @endif
                        
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    </div>        

@endsection