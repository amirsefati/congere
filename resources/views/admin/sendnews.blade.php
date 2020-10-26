@extends('admin.index')

@section('content')
    <div class="row">
    <div class="col-md-12">
        <div class="card">
        
            <div class="card-header">  ارسال خبر
            </div>
            <div class="card-body">
            @if (count($errors) > 0)
                        <div class="alert alert-danger" style="margin:auto;text-align:center">
                            لطفا برای ارسال فرم به موارد زیر دقت کیند<br><br>
                            <ul>
                                    <li>رئیس موارد الزامی رو پر کن !!!</li>
                                <br>
                            </ul>
                        </div>
                        <br>    
                    @endif
            <form action="/admin/sendnews" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="col-md-12">
                    <label for="title">عنوان خبر :  </label>
                        <input type="text" name="title" class="form-control">
                    </div>
                </div>
            <br>
                <div class="row">
                    <div class="col-md-12">
                    <label for="content">متن خبر</label>
                        <textarea type="" name="content" class="form-control" row="6" ></textarea>
                    </div>
                </div>
                <br><br>    
            <div class="row">

                <div class="col-md-6">
                    <label for="link">لینک به خارج سایت : </label>
                    <input type="text" name="link" class="form-control">
                </div>

                <div class="col-md-3">
                    <label for="image">آپلود عکس : </label><br>
                    <input type="file" name="image" class="from-control">
                </div>

                <div class="col-md-3">
                    <label for="downloadfile">آپلود فایل : </label><br>
                    <input type="file" name="downloadfile" class="from-control">
                </div>
            </div>
        <br><br>
            <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div style="text-align:center;margin:auto">
                            <button class="btn btn-success p-4">ارسال خبر</button>
                        </div>
                    </div>

                 </div>    
            
            </form>
                
            </div>
        </div>

<br><br><br>
<div class="card">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>عنوان خبر</th>
                    <th>متن خبر</th>
                    <th>ویرایش خبر</th>
                    <th>حذف خبر</th>
                    <th>مخفی کردن خبر</th>
                </tr>
            </thead>
            <tbody>
            @foreach($getnews as $item)
                <tr>
                    <td>{{$item->title}}</td>
                    <td>{{$item->content}}</td>
                    <td><button class="btn btn-warning">ویرایش</button></td>
                    <form action="/admin/delete_news" method="POST">
                        @csrf
                        <input type="text" name="id" value="{{$item->id}}" hidden>
                        <td><button class="btn btn-danger">حذف</button></td>
                    </form>
                    <td><button class="btn btn-dark">محو</button></td>


                </tr>
            @endforeach    
            </tbody>

        </table>
        </div>
    </div>

    </div>        

@endsection