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
                        <th scope="col">نام </th>
                        <th scope="col">نام حانوادگی </th>
                        <th scope="col">شماره تماس</th>
                        <th scope="col">تحصیلات </th>
                        <th scope="col"> دانشگاه </th>
                        <th scope="col">ایمیل</th>
                        <th scope="col">استاد کردن</th>  
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($all as $teacher)

                        <tr>
                        <th scope="row">{{$teacher->id}}</th>
                        <th>{{$teacher->name}}</th>
                        <th>{{$teacher->familyname}}</th>
                        <th>{{$teacher->phone}}</th>
                        <th>{{$teacher->grade}}</th>
                        <th>{{$teacher->university}}</th>
                        <th>{{$teacher->email}}</th>
                        <th><button class="btn btn-success" disabled>In Next Version</button></th>

                      
                        </tr>
                @endforeach        
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    </div>        

@endsection