@extends('admin.index')

@section('content')
    <div class="row">
    <div class="col md 12">
        <div class="card">
            <dic class="card-header"> اعتراض ها
            </dic>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">ردیف</th>
                        <th scope="col"> مقاله </th>
                        <th scope="col"> عنوان اعتراض </th>
                        <th scope="col"> متن اعتراض </th>
                        <th scope="col">پاسخ</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($report as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td> {{$item->article_code}}</td>
                            <td> {{$item->title}}</td>
                            <td>{{$item->content}}</td>
                            <td>
                                <form action="/admin/report_bad-{{$item->id}}" method="GET" style="width:80px;float:right">
                                    <button class="btn btn-danger">رد کردن</button>
                                </form> 
                                <form action="/admin/report_good-{{$item->id}}" method="GET" >
                                <button class="btn btn-success">قبول اعتراض</button>
                                </form>      
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