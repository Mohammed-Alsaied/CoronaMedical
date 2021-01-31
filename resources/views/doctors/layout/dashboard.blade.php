<!-- Head -->
@include('doctors.layout.incudes.head')
<!-- End Head -->
<!-- Sidebar -->
<!-- End Sidebar -->




<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
        <div class="sidebar-wrapper" id="sidebar">
            <div class="logo">
                <a href="{{Route('home')}}" class="simple-text">
                    ميديكال - Medical
                </a>
            </div>
                <ul class="nav" id="nav">
                <li>
                    <a href="{{Route('edit.doctor',Session()->get('id'))}}">
                        <i class="fas fa-user fa-2x"></i>
                        <small>مرحبا ,{{ Session()->get('username') }}</small>
                    </a>
                </li>
                <li class="active">
                    <a href="{{Route('ddashboard')}}">
                        <i class="fas fa-tachometer-alt fa-2x"></i>
                        <span>لوحة التحكم</span>
                    </a>
                </li>
                <li>
                    <a href="{{Route('edit.doctor',Session()->get('id'))}}">
                        <i class="fas fa-user fa-2x"></i>
                        <span>المستخدم</span>
                    </a>
                </li>

                <li>
                    <a href="{{Route('pateints')}}">
                        <i class="fas fa-hospital-user fa-2x"></i>
                        <span>المرضى</span>
                        <span class="badge badge-warning pull-left">{{ App\Models\Patient::where('IsActive',false)->count()}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{Route('add.patient',Session()->get('id'))}}">
                        <i class="fas fa-hand-holding-medical fa-2x"></i>
                        <span>المرضى المضافه</span>
                        <span class="badge badge-warning pull-left">{{ App\Models\Addpatient::where('doctor_id',Session()->get('id'))->where('IsActive',false)->count()}}</span>
                    </a>
                </li>

                <li>
                    <a href="{{ Route('contacted.patient',Session()->get('id')) }}">
                        <i class="fas fa-id-card fa-2x"></i>
                        <span>مرضى تم التواصل معهم</span>
                        <span class="badge badge-warning pull-left">{{ App\Models\Contactedpatient::where('doctor_id',Session()->get('id'))->where('IsActive',false)->count()}}</span>
                    </a>
                </li>

                <li>
                    <a href="{{ Route('healed.patient',Session()->get('id')) }}">
                        <i class="fas fa-heart fa-2x"></i>
                        <span>مرضى تم  شفائهم</span>
                        <span class="badge badge-warning pull-left">{{ App\Models\Healedpatient::where('doctor_id',Session()->get('id'))->where('IsActive',false)->count()}}</span>
                    </a>
                </li>
               <li>
                    <a href="{{ Route('doctor.logout') }}">
                        <i class="fas fa-sign-out-alt fa-2x"></i>
                        <span>خروج</span>
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
                    <a class="navbar-brand" href="{{Route('ddashboard')}}">لوحة التحكم</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">

                    </ul>

                    <ul class="nav navbar-nav navbar-left">

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Content -->
       @yield('content')

      <!-- End Content  -->
    </div>
</div>



<!-- Footer -->
@include('doctors.layout.incudes.footer')
<!-- End Footer -->
