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
                        <th scope="col"> عملیات </th>

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
                                <form action="/admin/recovery_report-{{$item->id}}" method="GET">
                                    <button class="btn btn-dark">بازگردانی</button>
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