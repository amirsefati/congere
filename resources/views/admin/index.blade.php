<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Title web site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Add description">
    <meta name="msapplication-tap-highlight" content="no">
  
<link href="./../css/main.css" rel="stylesheet"></head>
<style>
label{
    float:right;
}
.table th, .table td{
    text-align:right;
}
.app-sidebar{
    overflow:auto;
}

</style>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" dir="rtl" placeholder="جست جو کنید ...">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="/logout" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"> </i>
                                خروج
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                نرم افزار های مورد نیاز
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                تنظمیات
                            </a>
                        </li>
                    </ul>        </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="./../assets/images/settings.png" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">تنظمیات پنل</button>
                                            <button type="button" tabindex="0" class="dropdown-item">تنظمیات حساب کاربری </button>
                                            <button type="button" tabindex="0" class="dropdown-item">فعالیت ها</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">قوانین سایت</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        {{Auth::user()->name}} {{Auth::user()->familyname}}
                                    </div>
                                    <div class="widget-subheading">
                                        مدیر سایت
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>      
       
             <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">داشبورد مدیر</li>
                                <li>
                                    <a href="/admin/sendnews" >
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                 ارسال اخبار
                                    </a>
                                </li>
                                
                                <li class="app-sidebar__heading">چکیده</li>
                                <li>
                                    <a href="/admin/manage_abstract">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                         مدیریت چکیده
                                         @if(App\Article::where('teacher','<',1)->count() > 0)
                                         <span class="badge badge-pill badge-danger">
                                            {{App\Article::where('teacher','<',1)->count()}}
                                            </span> 
                                        @endif  
                                    </a>
                                    <a href="/admin/need_fixbug_abstract">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                         نیاز به رفع نقص
                                        @if(App\Article::where('verify','1')->count() > 0)
                                         <span class="badge badge-pill badge-warning">
                                            {{App\Article::where('verify','1')->count()}}
                                            </span> 
                                        @endif    
                                    </a>
                                    <a href="/admin/verify_abstract">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        تایید شده
                                        @if(App\Article::where('verify','4')->count() > 0)
                                         <span class="badge badge-pill badge-success">
                                            {{App\Article::where('verify','4')->count()}}
                                            </span> 
                                        @endif 
                                    </a>
                                </li>


                                <li class="app-sidebar__heading">مقالات</li>
                                <li>
                                    <a href="/admin/notupload_article">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                         مقاله آپلود نشده

                                         @if(App\Article::where('verify','4')->where('verify2','0')->count() > 0)
                                         <span class="badge badge-pill badge-warning">
                                            {{App\Article::where('verify','4')->where('verify2','0')->count()}}
                                            </span> 
                                        @endif 
                                    </a>
                                    <a href="/admin/need_fixbug_article">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        نیاز به رفع نقص

                                        @if(App\Article::where('verify2','1')->orWhere('verify2','3')->count() > 0)
                                         <span class="badge badge-pill badge-warning">
                                            {{App\Article::where('verify2','1')->orWhere('verify2','3')->count()}}
                                            </span> 
                                        @endif 
     
                                    </a>

                                    <a href="/admin/verify_article">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        تایید شده

                                        @if(App\Article::where('verify2','4')->count() > 0)
                                         <span class="badge badge-pill badge-primary">
                                            {{App\Article::where('verify2','4')->count()}}
                                            </span> 
                                        @endif 
                                    </a>

                                    <a href="/admin/paied_article">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        پرداخت شده
                                        @if(App\Article::where('verify2','5')->count() > 0)
                                         <span class="badge badge-pill badge-success">
                                            {{App\Article::where('verify2','5')->count()}}
                                            </span> 
                                        @endif 
                                    </a>
                                </li>

                                <li class="app-sidebar__heading">اعتراض ها</li>
                                <li>
                                    <a href="/admin/report">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                              پاسخ به اعتراض
                                              @if(App\report::where('level', 1)->count() > 0)
                                            <span class="badge badge-pill badge-danger">
                                                {{App\report::where('level', 1)->count()}}

                                              @endif
                                    </a>
                                </li>

                                <li>
                                    <a href="/admin/reported">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                          انباری اعتراض
                                          @if(App\report::where('level', 3)->count() > 0)
                                            <span class="badge badge-pill badge-dark">
                                                {{App\report::where('level', 3)->count()}}

                                              @endif
                                    </a>
                                </li>
                             
                                <li class="app-sidebar__heading"> ثبت نام بدون مقاله</li>
                                <li>
                                    <a href="/admin/noarticleuser">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        شرکت کنندگان
                                    </a>
                                </li>


                               

                                <li class="app-sidebar__heading">وضعیت دانشجویان</li>
                                <li>
                                    <a href="/admin/allstudent">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                            بررسی وضعیت دانشجویان
                                    </a>
                                </li>

                                
                            </ul>
                        </div>
                    </div>
                </div>  
                  <div class="app-main__outer">
                    <div class="app-main__inner">
                        

                        @yield('content')
                       
        </div>
    </div>
    <script src="./../js/sweetalert.js"></script>
    @include('sweet::alert')    
<script type="text/javascript" src="./../assets/scripts/main.js"></script>
<script src="./../js/jquery.min.js"></script>
<script>
    $('document').ready(function(){
        var url = window.location.href;
        console.log(url)

        var filename = url.substr(url.lastIndexOf("/"))

    
        console.log(filename)

        $('li a').each(function(){
            var href = $(this).attr('href').substr($(this).attr('href').lastIndexOf("/"));
            console.log(href);

            if(href == filename)
            $(this).addClass('mm-active')
        })

    })
</script>
</body>

</html>
