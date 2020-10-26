@extends('students.index')

@section('content')
    <div class="row">
    <div class="col md 12">
        <div class="card">
            <div class="card-header"> ثبت اعتراض
            </div>
            <div class="card-body">
                @if(count($report_table)>0 )
                <div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>کد مقاله</th>
                                <th>متن اعتراض</th>
                                <th>وضعیت</th>
                                <th>لغو</th>


                            </tr>
                        </thead>
                        <tbody>
                        @foreach($report_table as $item)

                            <tr>
                                <td>{{$item->article_code}}</td>
                                <td>{{$item->title}}</td>
                                <!-- TO DO پاسخ اعتراض رو اضافه کنم  -->
                                <td>
                                    @if($item->level == 1)
                                    <button class="btn btn-warning">در دست بررسی</button>
                                    @elseif($item->level == 3)
                                    <button class="btn btn-danger"> اعتراض رد شد</button>
                                    @elseif($item->level == 2)
                                    <button class="btn btn-success"> اعتراض تایید شد</button>
                                    
                                    @endif
                                </td>
                                <td>
                                    <form action="/student/cancelreport" method="post">
                                    @csrf
                                        <input type="text" name="id" value="{{$item->id}}" hidden>
                                        <button class="btn btn-dark"> لغو</button>
                                    </form>

                                </td>
                               
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
             </div>
             @endif        

                <form action="/student/report" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="user" value="{{Auth::user()->id}}" hidden>

                @if (count($errors) > 0)
                        <div class="alert alert-danger" style="margin:auto;text-align:center">
                            لطفا برای ارسال فرم به موارد زیر دقت کیند<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                <br>
                            </ul>
                        </div>
                        <br>    
                    @endif


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                             <label for="title">عنوان اعتراض :</label>
                              <input type="text" placeholder="لطفا عنوان فارسی مقاله را وارد کنید" value="{{old('title')}}" class="form-control" id="title" name="title">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                             <label for="title">اعتراض به مقاله ی  :</label>
                              <input type="text" placeholder="لطفا کد مقاله را وارد کنید "  class="form-control"  id="code"   name="code">
                            </div>
                        </div>    
                    </div>

                    <div class="row">
                        <div class="col md-12">
                            <div class="form-group">
                                <label for="report">متن اعتراض :</label>
                                <textarea name="contentreport" class="form-control"  id="contentreport" cols="30" rows="8">{{{ old('contentreport') }}}</textarea>
                            </div>
                        </div>
                    </div>

                       

                    <div class="row">
                            
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                            <div style="margin:auto;text-align:center">
                                 <div class="form-group">
                                   <button type="submit" style="margin-top:10px" class="btn btn-danger btn-lg pr-4 pl-4"> ثبت اعتراض</button>
                                 </div>
                            </div>     
                            </div>
                    </div> 
                   
                </form>
            </div>
        </div>
    </div>

    </div>        

@endsection