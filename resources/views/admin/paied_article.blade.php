@extends('admin.index')

@section('content')
    <div class="row">
    <div class="col md 12">
        <div class="card">
            <dic class="card-header"> پرداخت شده ها 
            </dic>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">ردیف</th>
                        <th scope="col">کد </th>
                        <th scope="col">عنوان </th>
                        <th scope="col">نویسنده</th>
                        <th scope="col">استاد </th>
                        <th scope="col"> محور </th>
                        <th scope="col">چکیده</th>
                        <th scope="col">مقاله</th>

                        <th scope="col"> مبلغ پرداختی</th>
                        <th scope="col"> کد پیگیری پرداخت </th>
                        <th scope="col">تاریخ پرداخت</th>


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
                        <th> 
                        <a href="/teacher/eedownllloadpppdf-{{$teacher->code}}">
                        <button class="btn btn-outline-success">
                                 مقاله
                                 </button>
                              </a></th>
                        
                        <th>{{App\Article::find($teacher->id)->admin_show_pay->price}}</th>
                        <th>{{App\Article::find($teacher->id)->admin_show_pay->reserved}}</th>
                        <th>{{App\Article::find($teacher->id)->admin_show_pay->created_at}}</th>


                        </tr>
                @endforeach        
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    </div>        

@endsection