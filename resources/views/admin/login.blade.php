<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تسجيل الدخول</title>

    <!--===============================================================================================-->
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


        <div class="limiter" id="">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form class="login100-form validate-form" action="{{ Route('admin.login') }}" method="POST">
                        @csrf
                        <span class="login100-form-title p-b-26">
                           !مرحبا
                        </span>
                         <span class="login100-form-title p-b-48">
                            <i class="zmdi zmdi-font" title="Admin"></i>
                        </span>
                         @if(Session()->has('failed'))
                            <div class="alert alert-warning alert-dismissible fade show text-right" role="alert" id="text">
                                {{ Session()->get('failed') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close" id="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                         @endif
                        <div class="wrap-input100">
                            <input class="text-righ input100" type="text" name="email" style="text-align: right" >
                            <span class="focus-input100" data-placeholder=" اسم المستخدم او البريد الإلكتروني "></span>
                        </div>

                        <div class="wrap-input100 validate-input">
                            <span class="btn-show-pass" id="showpassword">
                                <i class="zmdi zmdi-eye"></i>
                            </span>
                            <input class="input100" id="password" type="password" name="password" style="text-align: right">
                            <span class="focus-input100" data-placeholder="كلمة المرور"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button type="submit" class="login100-form-btn" id="logintext">
                                    دخول
                                </button>
                            </div>
                        </div>

                        <div class="text-center p-t-115">
                            <span class="txt1">
                                ليس لديك حساب ؟
                            </span>

                            <a class="txt2" href="{{Route('aasignup')}}">
                                تسجيل
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
