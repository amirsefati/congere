@extends('students.index')

@section('content')
    <div class="row">
    <div class="col md 12">
        <div class="card">
        
            <dic class="card-header" id="aaa">  وضعیت ارسال مقاله
            </dic>
            <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>کد مقاله</td>
                    <td>عنوان مقاله</td>
                    <td>وضعیت مقاله</td>
                    <td>قیمت قابل پرداخت</td>
                    <td>وضعیت پرداخت</td>
                </tr>
            </thead>
            
            @foreach($payment as $item)
            <tr>
                <td>{{$item->code}}</td>
                <td>{{$item->title}}</td>
                <td>
                    @if($item->verify2 == 4 && $item->verify == 4)
                    <button class="btn btn-success">تایید شده</button>
                    @else
                    <button class="btn btn-success"> نهایی شده</button>

                    @endif
                </td>
                <td>
                <button class="btn btn-outline-dark">
                300 هزار تومان
                </button>    
               </td>
               <td>
                    @if($item->verify2 == 5 )
                    <button class="btn btn-outline-success">پرداخت موفق</button>
                    @else
                    <form method="POST" action="/student/paymentzarinpal">
                    @csrf
                        <input type="text" name="code" value="{{$item->code}}" hidden>
                        <button class="btn btn-danger">  برای پرداخت کلیک کنید </button>
                    </form>
                    @endif

               </td>


            </tr>

            @endforeach

            </table>
            </div>
        </div>
    </div>

    </div>        

@endsection