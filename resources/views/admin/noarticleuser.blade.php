@extends('admin.index')

@section('content')
    <div class="row">
    <div class="col md 12">
        <div class="card">
            <dic class="card-header"> چکیده های تایید شده 
            </dic>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">ردیف</th>
                        <th scope="col"> نام</th>
                        <th scope="col"> نام خانوادگی</th>
                        <th scope="col"> شماره تلفن</th>
                        <th scope="col"> ایمیل </th>
                        <th scope="col"> دانشگاه </th>

                        <th scope="col"> شماره پیگیری پرداخت </th>


                        </tr>
                    </thead>
                    <tbody>
                    @foreach($teachers as $teacher)

                        <tr>
                        <th scope="row">{{$teacher->id}}</th>
                        <th>{{$teacher->name}}</th>
                        <th>{{$teacher->familyname}}</th>
                        <th>{{$teacher->phone}}</th>
                        <th>{{$teacher->email}}</th>
                        <th>{{$teacher->university}}</th>
                        <th>
                        {{App\Payment::where('article_code',$teacher->id)->get()}}

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