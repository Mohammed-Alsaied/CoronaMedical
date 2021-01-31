<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{Route('home')}}" class="simple-text">
                    Medical - ميديكال
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="">
                        <i class="fa fa-search"></i>
                    </a>
                </li><br>
                <li class="active">
                    <a href="{{Route('ddashboard')}}">
                        <i class="pe-7s-graph"></i>
                        <p>لوحة التحكم</p>
                    </a>
                </li>
                <li>
                    <a href="{{Route('dduser')}}">
                        <i class="pe-7s-user"></i>
                        <p>المستخدم</p>
                    </a>
                </li>
                <li>
                    <a href="{{Route('ddtable')}}">
                        <i class="pe-7s-note2"></i>
                        <p> بيانات المرضى</p>
                    </a>
                </li>
                <li>
                    <a href="{{Route('ddtable')}}">
                        <i class="pe-7s-note2"></i>
                        <p>  بيانات المرضى المضافه</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{Route('ddashboard')}}">  لوحة التحكم  </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">

                    </ul>

                    <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="#">
                                    خروج
                                </a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
