<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="./../assets/images/favicon.png" type="image/x-icon">
    <title> کـنـگـره
سیاستگذاری انرژی</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="msapplication-tap-highlight" content="no">

    <meta name="keywords" content="سیاستگذاری انرژی , کـنـگـره سیاستگذاری انرژی, دانشگاه صنعتی امیرکبیر,نخـستین کـنـگـره سیاستگذاری انرژی">
    <meta name="description" content="موتور محرک تولید و اجرای سیاستگذاری انرژی">
    <meta name="author" content="sefati100@gmail.com">
  
<link href="./../css/main.css" rel="stylesheet">


</head>
<style>
label{
    float:right;
}
.table th, .table td{
    text-align:right;
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
                       
                    </ul>        </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="32" class="rounded-circle" src="./../assets/images/settings.png" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item"> گزارش پرداختی ها </button>
                                           <a href="/student/editprofile" style="text-decoration:none"> <button type="button" tabindex="0" class="dropdown-item">تنظمیات حساب کاربری </button></a>
                                            <button type="button" tabindex="0" class="dropdown-item">فعالیت ها</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">قوانین سایت</button>
                                            <a href="/logout" style="text-decoration:none"> <button type="button" tabindex="0" class="dropdown-item"> خروج از حساب کاربری </button></a>

                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        {{Auth::user()->name}} {{Auth::user()->familyname}}
                                    </div>
                                    <div class="widget-subheading">
                                        {{Auth::user()->gender}}
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
          <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i >راهنما</i>
            </button>
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
                        <h3 class="themeoptions-heading">نحوه استفاده از سایت
                        </h3>
              <div style="text-align:right;padding:20px">     
       <p style="margin:20px 10px 0px;font-size:18px">  متن راهنما :   </p>   

<br>
        <p style="color:black;font-size:16px">  جهت تایید نهایی مقاله خود و حضور در کنگره مراحل زیر را انجام دهید:</p> <br>
        <p style="color:gray;line-height:24px"> 
            1- در ابتدا به بخش ارسال چکیده بروید، چکیده مقاله خود را در آن قرار دهید و ثبت نمایید.<br>
            2- سپس منتظر بمانید تا استاد مربوط چکیده شما را مطالعه نماید. در صورتی که چکیده نیاز به اصلاح داشته باشد استاد داور موارد مورد نیاز به اصلاح را برای شما می نویسد و شما باید پس از رفع آن ها چکیده خود را دوباره ارسال نمایید. <br>
            3- در صورت تایید چکیده شما توسط استاد داور به بخش ارسال مقاله رفته و مقاله خود را آپلود نمایید.<br>
            4- پس از تایید مقاله شما توسط استاد داور درگاه بانکی برای پرداخت هزینه چاپ مقاله و شرکت در کنگره فعال می شود.<br>
            5- با پرداخت مبلغ، ثبت نام شما نهایی می شود.<br>
        </p>
            </div>
                       
                    </div>
                </div>
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
                                <li class="app-sidebar__heading">داشبورد دانشجویان</li>
                                <li>
                                    <a href="/student/index" >
                                        <i class="metismenu-icon ">
                                        <img src="/assets/images/speaker.png" style="width:25px;height:25px" alt="">
   
                                        </i>
                                اخبار کنگره
                                    </a>
                                </li>

                                <li class="app-sidebar__heading">ثبت نام در کنگره 
                                   <span style="font-size:10px"> (مختص افراد فاقد مقاله)</span>
                                </li>
                                <li>
                                    <a href="/student/signinnoarticle" >
                                        <i class="metismenu-icon ">
                                        <img src="/assets/images/speaker.png" style="width:25px;height:25px" alt="">
   
                                        </i>
                                 ثبت نام 
                                    </a>
                                </li>

                                <li class="app-sidebar__heading">مقالات</li>
                                <li     
                                >
                                    <a href="/student/send-article">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        ارسال چکیده
                                    </a>
                                    
                                </li>
                                <li
                            
                                >
                                    <a href="/student/sended-article">
                                                وضعیت چکیده و ارسال مقاله
                                            @if(App\Article::where('user_id',Auth::user()->id)->where('verify', 1)->count() > 0)
                                            <span class="badge badge-pill badge-warning">

                                                {{App\Article::where('user_id',Auth::user()->id)->where('verify',1)->count()}}
                                            
                                            @elseif(App\Article::where('user_id',Auth::user()->id)->where('verify', 3)->count() > 0)
                                            <span class="badge badge-pill badge-warning">

                                                {{App\Article::where('user_id',Auth::user()->id)->where('verify',3)->count()}}    
                                            @else

                                            @endif    
                                                </span>                               
                                                
                                             </a>
                                    
                                </li>
                                <li >
                                    <a href="/student/final-article">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        وضعیت مقاله
                                        @if(App\Article::where('user_id',Auth::user()->id)->where('verify2',2)->count() > 0)
                                        <span class="badge badge-pill badge-primary">
                                            {{App\Article::where('user_id',Auth::user()->id)->where('verify2',2)->count()}}
                                            </span> 

                                        @endif    
                                    </a>
                                </li>
                                @if(App\Article::where('user_id',Auth::user()->id)->where('verify2',4)->count() > 0)  

                                <li >
                                    <a href="/student/payment">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                            پرداختی ها
                                            @if(App\Article::where('user_id',Auth::user()->id)->where('verify2',4)->count() > 0)
                                            <span class="badge badge-pill badge-success">
                                            {{App\Article::where('user_id',Auth::user()->id)->where('verify2',4)->count()}}
                                            </span>
                                            @endif
                                    </a>
                                </li>
                                @endif                                 

                                <li class="app-sidebar__heading">اعتراض</li>
                                <li>
                                    <a href="/student/report">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        ثبت اعتراض
                                        @if(App\Report::where('user_id',Auth::user()->id)->where('level','>',1)->count() > 0)

                                        <span class="badge badge-pill badge-danger">
                                            {{App\Report::where('user_id',Auth::user()->id)->where('level','>',1)->count()}}
                                            </span>
                                        @endif    
                                    </a>
                                </li>
                            
                            </ul>
                        </div>
                    </div>
                </div>  
                <div class="mobileformat" style="text-align: center;margin-top:40%">
                            برای نمایش کامل لطفا موبایل خود را در حالت عرضی قرار دهید <br><br>
                            <strong>با تشکر</strong>  
                        </div>
                  <div class="app-main__outer">
                    <div class="app-main__inner">

                    <div class="col-md-12">
                    <h4 style="text-align:center">زمان بندی مراحل ارسال و داوری مقالات</h4>
                    <br>
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">مهلت ارسال چکیده توسعه یافته</th>
                        <th scope="col">اعلام نتایج داوری چکیده توسعه یافته</th>
                        <th scope="col">مهلت ارسال فایل نهایی مقالات</th>
                        <th scope="col">اعلام نتایج داوری مقالات</th>
                        </tr>

                    </thead>
                    <tbody>
                       
                        <tr>
                        <th>25 بهمن ماه 1398</th>
                        <td>30 بهمن ماه 1398 </td>
                        <td>25 اسفند ماه 1398</td>
                        <td>20 فروردین ماه 1399</td>

                        </tr>
                    </tbody>
                </table>
                    </div>
                      
                        

                        @yield('content')
                       
                           
        </div>
    </div>
    <script src="./../js/sweetalert.js"></script>
    @include('sweet::alert')
        <script type="text/javascript" src="./../assets/scripts/main.js"></script>
        <script src="./../js/jquery.min.js"></script>
<script>

     
  

    $("#btnregsiterpage1").click(function(){
        $('.page1').animate({
        },800).fadeOut(500,function(){
            $('.page2').fadeIn(200)
        });
    })
</script>
<script>
    $('document').ready(function(){
        var url = window.location.href;
        var filename = url.substr(url.lastIndexOf("/"))
        $('li a').each(function(){
            var href = $(this).attr('href').substr($(this).attr('href').lastIndexOf("/"));
            if(href == filename)
                $(this).addClass('mm-active')
               })      
    })

</script>
</body>
</html>
