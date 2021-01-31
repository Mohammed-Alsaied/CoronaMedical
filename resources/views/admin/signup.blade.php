<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تسجيل مستخدم جديد</title>

    <!--============================== Favicon=================================================================-->

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicon/site.webmanifest')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-sign-up/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-sign-up/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-sign-up/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-sign-up/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-sign-up/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-sign-up/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-sign-up/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-sign-up/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-sign-up/css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin-sign-up/css/main.css')}}">
    <!--===============================================================================================-->
    </head>
    <body>


        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form class="container" action="{{Route('admin.store')}}" method="POST">
                            @if (Session()->has('success'))
                            <div class="alert alert-warning" >
                                {{ Session()->get('success') }}

                            </div>
                         @endif
                        @csrf
                        <span class="login100-form-title p-b-26">
                            !مرحبا
                        </span>
                        <span class="login100-form-title p-b-48">
                            <i class="zmdi zmdi-font" title="Admin"></i>
                        </span>
                        <div class="form-group">
                            <input class="input100" type="text" value="{{ old('fristname') }}" name="fristname" placeholder="الإسم الأول" style="text-align: right">
                            @error('fristname')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input class="input100" type="text" value="{{ old('lastname') }}" name="lastname" placeholder="الإسم الأخير" style="text-align: right">
                            @error('lastname')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <input class="input100" type="text" value="{{ old('username') }}" name="username" placeholder="اسم المستخدم" style="text-align: right">
                            @error('username')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input class="input100" type="text" value="{{ old('email') }}" name="email" placeholder="البريد الإلكتروني" style="text-align: right">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group  validate-input">
                            <span class="btn-show-pass" id="showpassword">
                                <i class="zmdi zmdi-eye"></i>
                            </span>
                            <input class="input100" id="password" value="{{ old('password') }}" type="password" placeholder="كلمة المرور" name="password" style="text-align:right">
                            @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group validate-input">
                            <span class="btn-show-pass">
                                <i class="zmdi zmdi-eye"></i>
                            </span>

                            <input class="input100 "  value="{{ old('confirmpass') }}" type="password" placeholder="تأكيد كلمة المرور" name="confirmpass" style="text-align: right">
                            @error('confirmpass')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button type="submit" class="login100-form-btn" id="create">
                                    تسجيل
                                </button>
                            </div>
                        </div>

                        <div class="text-center p-t-115">
                            <span class="txt1">
                               لديك حساب بالفعل؟
                            </span>

                            <a class="txt2"  href="{{Route('aalogin')}}">
                                دخول
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
        <script src="{{asset('admin-sign-up/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('admin-sign-up/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('admin-sign-up/vendor/bootstrap/js/popper.js')}}"></script>
        <script src="{{asset('admin-sign-up/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('admin-sign-up/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('admin-sign-up/vendor/daterangepicker/moment.min.js')}}"></script>
        <script src="{{asset('admin-sign-up/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('admin-sign-up/vendor/countdowntime/countdowntime.js')}}"></script>
    <!--========================================xx  =======================================================-->
        <script src="{{asset('admin-sign-up/js/main.js')}}"></script>

    </body>
    </html>
</body>
</html>
