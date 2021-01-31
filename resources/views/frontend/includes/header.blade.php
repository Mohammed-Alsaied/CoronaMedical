<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto" ><a id="tit" href="{{Route('home')}}">ميديكال- Medical</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block" id="a">
            <ul>
                <li><a href="{{Route('sign-up')}}" class="" id="sign">تسجيل </a></li>
                <li><a href="{{Route('sign-in')}}" class="" id="sign">تسحيل الدخول</a></li>
                <li class=""><a href="{{Route('home')}}">الصفحه الرئيسية</a></li>
                <li><a href="#about">عن الموقع</a></li>
                <li><a href="#contact">تواصل معنا</a></li>

            </ul>
        </nav>
        <!-- .nav-menu -->
        <a href="{{Route('sign-in')}}" class="appointment-btn scrollto" id="sign1">تسحيل الدخول</a>
        <a href="{{Route('sign-up')}}" class="appointment-btn scrollto" id="sign1">تسجيل </a>


    </div>
</header>
