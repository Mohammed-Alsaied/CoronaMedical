@extends('doctors.layout.dashboard')
@section('title','لوحه التحكم')
@section('content')

  <!-- Ionicons -->

  <!-- overlayScrollbars -->

  <!-- Google Font: Source Sans Pro -->
  <!-- Bootstrap 4 RTL -->
  <!-- Custom style for RTL -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>{{ App\Models\Patient::where('IsActive',false)->count() }}</h3>

                      <h4>مريض</h4>
                    </div>
                    <div class="icon">
                      <i class="ion ion-ios-body"></i>
                    </div>
                    <a href="{{Route('pateints')}}" class="small-box-footer">معلومات اكثر <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>{{ App\Models\Addpatient::where('doctor_id',Session()->get('id'))->where('IsActive',false)->count()}}</h3>

                      <h4>مريض تم إضافتهم</h4>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{Route('add.patient',Session()->get('id'))}}" class="small-box-footer">معلومات اكثر <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3>{{ App\Models\Contactedpatient::where('doctor_id',Session()->get('id'))->where('IsActive',false)->count()}}</h3>

                      <h4>مريض تم التواصل معهم</h4>
                    </div>
                    <div class="icon">
                      <i class="ion ion-ios-telephone"></i>
                    </div>
                    <a href="{{Route('contacted.patient',Session()->get('id'))}}" class="small-box-footer">معلومات اكثر<i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3>{{ App\Models\Healedpatient::where('doctor_id',Session()->get('id'))->where('IsActive',false)->count()}}</h3>

                      <h4>مريض تم شفائهم</h4>
                    </div>
                    <div class="icon">
                      <i class="ion ion-heart"></i>
                    </div>
                    <a href="{{Route('healed.patient',Session()->get('id'))}}" class="small-box-footer">معلومات اكثر <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
              </div>


        </div>
    </div>
@endsection


