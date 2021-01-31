@extends('admin.layout.dashboard')
@section('title','لوحة التحكم')
@section('content')
       <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-primary">
                        <div class="inner">
                          <h3>{{App\Models\Doctor::count()}}</h3>
                          <h4>طبيب متطوع</h4>
                        </div>
                        <div class="icon">
                          <i class="ion ion-ios-medkit"></i>
                        </div>
                        <a href="{{Route('adoctor')}}" class="small-box-footer">معلومات اكثر <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-danger">
                        <div class="inner">
                          <h3>{{App\Models\Patient::count()}}</h3>
                          <h4>مريض </h4>
                        </div>
                        <div class="icon">
                          <i class="ion ion-ios-body"></i>
                        </div>
                        <a href="{{Route('apatient')}}" class="small-box-footer">معلومات اكثر <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-info">
                        <div class="inner">
                          <h3>{{App\Models\Addpatient::count()}}</h3>
                          <h4>مريض تم إضافتهم</h4>
                        </div>
                        <div class="icon">
                          <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ Route('admin.addpatients') }}" class="small-box-footer">معلومات اكثر<i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-warning">
                        <div class="inner">
                          <h3>{{ App\Models\Contactedpatient::count()}}</h3>
                          <h4>مريض تم التواصل معهم</h4>
                        </div>
                        <div class="icon">
                          <i class="ion ion-ios-telephone"></i>
                        </div>
                        <a href="{{ Route('admin.contactedpatients') }}" class="small-box-footer">معلومات اكثر <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                          <div class="inner">
                            <h3>{{ App\Models\Healedpatient::count()}}</h3>
                            <h4>مريض تم  شفائهم</h4>
                          </div>
                          <div class="icon">
                            <i class="ion ion-heart"></i>
                          </div>
                          <a href="{{ Route('admin.healedpatients') }}" class="small-box-footer">معلومات اكثر <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                    <!-- ./col -->
                  </div>
            </div>
        </div>

    <!-- End Content  -->
    @endsection

{{--  <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <!-- Card Number of patient -->
                            <div class="header">
                                <h4 class="title text-center">الأطباء المتطوعين</h4>
                            </div>
                            <div class="content text-center">
                                <h1><a href="{{Route('adoctor')}}">{{ App\Models\Doctor::count() }}</a></h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <!-- Card Number of patient Contacted -->
                            <div class="header">
                                <h4 class="title text-center">المرضى المسجلين</h4>
                            </div>
                            <div class="content text-center">
                                <h1><a href="{{Route('apatient')}}">{{ App\Models\Patient::count() }}</a></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card ">
                            <!-- Card Number of patient Was healed -->
                            <div class="header">
                                <h4 class="title text-center">مرضى تم التواصل معهم</h4>
                            </div>
                            <div class="content text-center">
                                <h1><a href="#">3</a></h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card ">
                            <!-- Card Number of patient Was healed -->
                            <div class="header">
                                <h4 class="title text-center">مرضى تم شفائهم</h4>
                            </div>
                            <div class="content text-center">
                                <h1><a href="#">2</a></h1>
                            </div>
                        </div>
                    </div>
                </div>--}}
