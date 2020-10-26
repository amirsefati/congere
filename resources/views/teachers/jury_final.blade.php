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
                        <th scope="col">وضعیت مقاله</th>

                        <th scope="col">دانلود مقاله</th>

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

                        @if($article->verify2 == 1)
                        <td>
                            <a href="/teacher/verifyarticlefinal-{{$article->id}}">
                                <button class="btn btn-danger">بررسی نشده</button>
                            </a>
                        </td>
                        @elseif($article->verify2 == 2)
                        <td><button class="btn btn-warning">منتظر پاسخ نویسنده</botton></td>
                        @elseif($article->verify2 == 3)
                        <td>
                            <a href="/teacher/verifyarticlefinal-{{$article->id}}">
                                <button class="btn btn-danger"> بررسی مجدد</button>
                            </a>
                        </td>                
                        @elseif($article->verify2 == 4)
                        <td><button class="btn btn-success">  تایید شد </botton></td>

                        @endif

                        <td>
                            <a href="/teacher/eedownllloadpppdf-{{$article->code}}">
                                <button class="btn btn-light">pdf</button>
                            </a>

                            <a href="/teacher/eedownllloadppword-{{$article->code}}">
                                <button class="btn btn-light">docx</button>
                            </a> 
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    </div>        

   
@endsection