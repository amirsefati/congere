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
                        <th scope="col">عنوان مقاله</th>
                        <th scope="col">وضعیت مقاله</th>
                        </tr>

                    </thead>
                    <tbody>
                    @foreach($final as $article)

                        <tr>
                        <th scope="row">{{$article->code}}</th>
                        <td> {{$article->title}}</td>

                        @if($article->verify2 == 1)
                        <td><button class="btn btn-warning"> در دست بررسی  </button></td>

                        
                        @elseif($article->verify2 == 2)
                        <td>
                                 <a href="/student/reuploadedarpp-{{$article->code}}">
                                 <button type="button" class="btn btn-danger">
                                  نقص دارد (آپلود مجدد)
                                  </button>
                                 </a>
                        </td>

                        @elseif($article->verify2 == 3)
                        <td><button class="btn btn-primary"> در دست بررسی  </button></td>

                        @elseif($article->verify2 == 4)
                        <td>  تایید شده</td>
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