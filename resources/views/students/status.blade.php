@extends('students.index')

@section('content')
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <dic class="card-header">   اخبار کنگره
            </dic>
            <div class="card-body">
            <div class="row">
            @foreach($newsstudent as $item)

                <div class="col-md-3">
                    <div class="cardnews">
                        <img src="{{$item->image}}" style="border-radius:10px 10px 0px 0px" alt="" width="100%" height="250px">
                        <p style="text-align:center;padding-top:10px">{{$item->title}}</p>
                        <p style="text-align:center;padding:0px 30px 10px 30px  ;font-color:#828282;font-size:10px">{{$item->content}}</p>
                        <div>
                            <div style="width:50%;float:left;">
                                <p style="text-align:left;color:gray;font-size:8px;margin-top:20px;padding:5px">{{$item->created_at}}</p>
                            </div>    

                            <div style="width:40%">
                                <a href="{{$item->link}}">
                                <img src="./../assets/images/link.png" style="margin:10px" width="25px" alt="">
                                </a>
                                <a href="{{$item->downloadfile}}">
                                <img src="./../assets/images/download.png" width="25px" alt="">
                                </a>
                            </div>

                            
                    </div>
                    </div>
                </div>
                @endforeach

            </div>    


            </div>
        </div>
    </div>

    </div>        

@endsection