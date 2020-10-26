@extends('admin.index')

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
                        <th scope="col">ردیف</th>
                        <th scope="col">کد مقاله</th>
                        <th scope="col">عنوان مقاله</th>
                        <th scope="col">نویسنده</th>
                        <th scope="col">محور مقاله</th>
                        <th scope="col"> چکیده </th>
                        <th scope="col"> مقاله</th>

                        <th scope="col">تخصیص استاد مقاله</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($teachers as $teacher)

                        <tr>
                        <th scope="row">{{$teacher->id}}</th>
                        <th>{{$teacher->code}}</th>
                        <th>{{$teacher->title}}</th>
                        <th>{{$teacher->author}}</th>
                        <th>{{$teacher->axialofarticle}}</th>
                        <th>
                              <a href="/teacher/verify-abstract-{{$teacher->id}}">
                              <button class="btn btn-outline-warning">
                                 چکیده
                                 </button>
                              </a>
                        </th>
                        
                    @if($teacher->verify == 4)   
                    <th> 
                        <a href="/teacher/eedownllloadpppdf-{{$teacher->code}}">
                        <button class="btn btn-outline-success">
                                 مقاله
                                 </button>
                              </a></th>
                    @else
                    <th> 
                        <a href="#">
                        <button class="btn btn-outline-success">
                                 مقاله
                                 </button>
                              </a></th>
                    @endif
                        @if($teacher->teacher == 0)
                        <th>
                        <div class="row">
                        <form action="/admin/select_teacher" method="POST">
                        @csrf
                        <div class="row">
                        <input type="text" value="{{$teacher->id}}" name="id" hidden>
                            <div class="col-md-9">
                            <select class="form-control" name="teacher"  dir="rtl">
                                <!-- edit select teacher from db -->
                                    <option value="2">تحریم</option>
                                    <option value="3">بالادست نفت و گاز</option>
                                    <option value="4">پایین دست نفت و گاز </option>
                                    <option value="5">دیپلماسی انرژی</option>
                                    <option value="6">بهره وری انرژی</option>
                                    <option value="7">برق</option>
                                </select>
                            </div>



                            <div class="col-md-3">
                            <button type="submit" class="btn btn-info">تایید</button>
                        </form>
                            </div>
                            </div>
                        </div>
                               
                             </div>
                        @else
                        <th>
                        <a href="/admin/select_teacher_tozero-{{$teacher->id}}">
                        <button class="btn btn-outline-danger">
                                استاد انتخاب شده :  {{App\Article::find($teacher->id)->user_article_teacher->name}} {{App\Article::find($teacher->id)->user_article_teacher->familyname}}                                </button>
                              </a>
                        </th>           
                    @endif

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