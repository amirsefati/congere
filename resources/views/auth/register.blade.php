<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.fa.min.js') }}"></script>


    <script>
    $(document).ready(function() {
        $(".datepicker").datepicker(
            {
                    changeMonth: true,
                    changeYear: true
                }
            
        );
    });

  
</script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datepicker.css') }}" rel="stylesheet">

</head>
<body style="background: #F4F5F5;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                

                
            </div>
        </nav>

        <main class="py-4">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header"> فرم ثبت نام
             </div>

         

            <div class="card-body" style="padding:0px">
                <div class="row">
                    
               
                <div class="col-md-7">

                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf
                    <div style="padding:5px">

                        <div class="form-group row">

                        <div class="col-md-6">
                                <label for="name">  نام : </label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"  tabindex="1">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="col-md-6">
                                <label for="familyname">  نام خانوادگی :  </label>
                                <input id="familyname" type="text" class="form-control{{ $errors->has('familyname') ? ' is-invalid' : '' }}" name="familyname" value="{{ old('familyname') }}" tabindex="2">
                                @if ($errors->has('familyname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('familyname') }}</strong>
                                    </span>
                                @endif
                        </div>


                      

                            
                        </div>
                     <!-- نام  -->


                   


                    <!-- نام خانوادگی -->
                    <div class="form-group row">

                    <div class="col-md-6" id="englishnamecol">
                                <label for="englishname">  نام انگلیسی : </label>
                                <input id="englishname" style="direction:ltr"  type="text" class="form-control{{ $errors->has('englishname') ? ' is-invalid' : '' }}" name="englishname" value="{{ old('englishname') }}"  tabindex="3">
                                
                             
                           <script>
                           $(function(){
                                $("#englishname").keypress(function(event){
                                    var ew = event.which;
                                    if(ew == 32)
                                        return true;
                                    if(48 <= ew && ew <= 57)
                                        return false;
                                    if(65 <= ew && ew <= 90)
                                        return true;
                                    if(97 <= ew && ew <= 122)
                                        return true;
                                    
                                    else    
                                    
                                    if($("#englishname").hasClass('is-invalid'))
                                        return false;
                                    else
                                    $("#englishname").addClass('is-invalid');
                                    $("#englishnamecol").append('<span class="invalid-feedback" role="alert"><strong>لطفا فقط انگلیسی تایپ کنید</strong></span>');        
                                    return false;

                                });
                            });
                                                    
                           </script>
                                
                                @if ($errors->has('englishname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('englishname') }}</strong>
                                    </span>
                                @endif
                            </div>


                        <div class="col-md-6" id="family">
                                <label for="englishfamilyname"   >  نام خانوادگی انگلیسی : </label>
                                <input id="englishfamilyname" style="direction:ltr"  type="text" class="form-control{{ $errors->has('englishfamilyname') ? ' is-invalid' : '' }}" name="englishfamilyname" value="{{ old('englishfamilyname') }}"  tabindex="4"  >
                           
                           <script>
                           $(function(){
                                $("#englishfamilyname").keypress(function(event){
                                    var ew = event.which;
                                    if(ew == 32)
                                        return true;
                                    if(48 <= ew && ew <= 57)
                                        return false;
                                    if(65 <= ew && ew <= 90)
                                        return true;
                                    if(97 <= ew && ew <= 122)
                                        return true;
                                    
                                    else    
                                    
                                    if($("#englishfamilyname").hasClass('is-invalid'))
                                        return false;
                                    else
                                    $("#englishfamilyname").addClass('is-invalid');
                                    $("#family").append('<span class="invalid-feedback" role="alert"><strong>لطفا فقط انگلیسی تایپ کنید</strong></span>');        
                                    return false;

                                });
                            });
                                                    
                           </script>
                           
                                @if ($errors->has('englishfamilyname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('englishfamilyname') }}</strong>
                                    </span>
                                @endif
                        </div>
                   
                    </div>




                    <!-- کد ملی -->
                    <div class="form-group row">
                            <div class="col-md-6 " id="identitycodecol">
                            <label for="identitycode">  کد ملی : </label>
                                <input id="identitycode"  min="10000000" max="9999999999" class="form-control{{ $errors->has('identitycode') ? ' is-invalid' : '' }}" name="identitycode" value="{{ old('identitycode') }}"  tabindex="6"  >
                               
                                <script>
                           $(function(){
                                $("#identitycode").keypress(function(event){
                                    var ew = event.which; 
                                    if(ew == 32)
                                        return true;
                                    if(48 <= ew && ew <= 57)
                                        return true;
                                    if(96 <= ew && ew <= 105)
                                        return true;  
                                    
                                    if($("#identitycode").hasClass('is-invalid'))
                                    return false;     
                                    else    
                                    $("#identitycode").addClass('is-invalid');
                                    $("#identitycodecol").append('<span class="invalid-feedback" role="alert"><strong>لطفا فقط عدد تایپ کنید</strong></span>');        
                                    return false;

                                });
                            });
                                                    
                           </script>
                               
                                @if ($errors->has('identitycode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('identitycode') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6" id="phonecol">
                            <label for="phone">  شماره تلفن : </label>
                            <input id="phone" style="direction:ltr"  type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}"  tabindex="5"  >   
                            
                            <script>
                           $(function(){
                                $("#phone").keypress(function(event){
                                    var ew = event.which; 
                                    if(48 <= ew && ew <= 57)
                                        return true;
                                    if(96 <= ew && ew <= 105)
                                        return true;
                                    
                                    else    
                                    if($("#phone").hasClass('is-invalid'))
                                        return false;
                                    else
                                    $("#phone").addClass('is-invalid');
                                    $("#phonecol").append('<span class="invalid-feedback" role="alert"><strong>لطفا فقط عدد تایپ کنید</strong></span>');        
                                    return false;

                                });
                            });
                                                    
                           </script>
                            @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                    <!-- کد ملی -->


                    <!-- جنسیت -->
                    <div class="form-group row">         
                            <div class="col-md-6">
                                <label for="exampleFormControlSelect1">  جنسیت : </label>
                                <select class="form-control" id="exampleFormControlSelect1" name="gender" dir="rtl"  tabindex="8">
                                <option>مرد</option>
                                <option>زن</option>
                                </select>
                             </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">  تاریخ تولد : </label>
                                <input name="birthdate"  class="datepicker form-control{{ $errors->has('birthdate') ? ' is-invalid' : '' }}" tabindex="7" />
                                @if ($errors->has('birthdate'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                @endif
                             </div>
                        </div>
                    <!-- جنسیت -->

                        <!-- مقطع تحصیلی -->
                        <div class="form-group row">   
                            <div class="col-md-6">
                            <label for="grade">  مقطع تحصیلی : </label>
                                <select class="form-control" name="grade" id="grade" dir="rtl"  tabindex="10">
                                <option>لیسانس</option>
                                <option>فوق لیسانس</option>
                                <option>دکترا</option>
                                <option>فوق دکترا</option>
                                </select>
                             </div>
                            <div class="col-md-6">
                            <label for="university">  نام دانشگاه/شرکت/موسسه : </label>
                            <input type="text" class="form-control{{ $errors->has('university') ? ' is-invalid' : '' }}" name="university" id="university" aria-describedby="emailHelp" value="{{ old('university') }}"  tabindex="9"  >
                            <small id="emailHelp" class="form-text text-muted">لطفا نام دانشگاه/شرکت/موسسه   خود را به طور کامل وارد کنید</small>
                            @if ($errors->has('university'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('university') }}</strong>
                                    </span>
                                @endif
                             </div>
                        </div>
                        <!-- مقطع تحصیلی -->

                    <!-- شماره تلفن -->
                   
                    <!-- شماره تلفن -->


                        <div class="form-group row">

                        <div class="col-md-12">
                            <label for="address">  محل سکونت : </label>
                            <textarea class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" dir="rtl" rows="3" id="address"  tabindex="11" ></textarea>
                            @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                        </div>
                        </div>      

                        
                      
                        <hr style="margin-top:50px;border: 0;height: 0;border-top: 1px solid rgba(0, 0, 0, 0.1);border-bottom: 1px solid rgba(255, 255, 255, 0.3);">

                        <div class="form-group row">
                        <div class="col-md-12">
                                <label for="email">  ایمیل : </label>
                                <input style="direction:ltr" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  tabindex="12" >
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">

                        <div class="col-md-6">
                                 <label for="password-confirm">   گذرواژه : </label>
                                 <input id="password" style="direction:ltr" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"   tabindex="12"> 
                                 @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="col-md-6">
                                <label for="password" >  تایید گذرواژه : </label>
                                <input style="direction:ltr" id="password-confirm" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"  name="password_confirmation"  tabindex="13" >
                                @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>

                          


                            
                        </div>

                       
                  

                        <div class="form-group row mb-3 mt-5">
                            <div class="col-md-6 offset-md-3">
                                <div style="margin:auto;text-align:center">
                                <button type="submit" class="btn btn-primary" style="padding:8px 70px 8px 80px">
                                    عضویت
                                </button><br>
                                </div>
                            </div>
                        </div>
                        <script>
                        document.getElementsByTagName('div')[0].focus();

                        </script>
                    </form>

                    </div>
                </div>
                <div class="col-md-5" id="colregsiter">
                     <img src="./../assets/images/1514.png" class="imageregister" alt="">
                </div>
               
                </div>
                </div>
            </div>
        </div>

    </div>
</div>
</main>
    </div>
</body>
</html>
