@extends('admin.index')

@section('content')
    <div class="row">
    <div class="col md 12">
        <div class="card">
            <dic class="card-header">  در انتظار آپلود مقاله
            </dic>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">ردیف</th>
                        <th scope="col">کد مقاله</th>
                        <th scope="col">عنوان مقاله</th>
                        <th scope="col">نویسنده</th>
                        <th scope="col">استاد مقاله</th>
                        <th scope="col"> محور مقاله</th>

                        <th scope="col"> مطالعه چکیده</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($teachers as $teacher)

                        <tr>
                        <th scope="row">{{$teacher->id}}</th>
                        <th>{{$teacher->code}}</th>
                        <th>{{$teacher->title}}</th>
                        <th>{{$teacher->author}}</th>
                        <th>{{App\Article::find($teacher->id)->user_article_teacher->name}}  {{App\Article::find($teacher->id)->user_article_teacher->familyname}}</th>
                        <th>{{$teacher->axialofarticle}}</th>
                        <th>
                              <a href="/teacher/verify-abstract-{{$teacher->id}}">
                              <button class="btn btn-outline-warning">
                                 چکیده
                                 </button>
                              </a>
                        </th>
                        </th>
                        </tr>
                @endforeach        
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    </div>        

@endsection