@extends('admin.layout.dashboard')
@section('title','المرضى الذي تم التواصل معهم')
@section('content')

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">المرضى الذي تم التواصل معهم</h4><br>
                                    <p class="category"></p>
                                </div>
                                <div class="content table-responsive table-full-width">
                                @if (isset($contactedpatients) && $contactedpatients->count() > 0)
                                    <table class="table table-hover table-striped" id="doctor">
                                        @if(Session()->has('deleted'))
                                        <div class="alert alert-warning" >
                                            {{ Session()->get('deleted') }}

                                        </div>
                                     @endif
                                        <thead>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">الإسم</th>
                                            <th class="text-center">رقم التلبفون</th>
                                            <th class="text-center">السن</th>
                                            <th class="text-center">الطول</th>
                                            <th class="text-center">الوزن</th>
                                            <th class="text-center">الأعراض</th>
                                            <th class="text-center">المرفقات</th>
                                            <th class="text-center">العمليات</th>

                                        </thead>
                                        <tbody>
                                            @foreach ($contactedpatients as $contactedpatient)
                                                    <tr>
                                                        <td class="text-center">{{ $contactedpatient->id}}</td>
                                                        <td class="text-center">{{ $contactedpatient->fullname}}</td>
                                                        <td class="text-center">
                                                            <a href="tel:{{ $contactedpatient->phone_number}}" title="إضفط للإتصال ">{{ $contactedpatient->phone_number}}</a>
                                                        </td>
                                                        <td class="text-center">{{ $contactedpatient->age}}</td>
                                                        <td class="text-center">{{ $contactedpatient->Length}}</td>
                                                        <td class="text-center">{{ $contactedpatient->weight}}</td>
                                                        <td class="text-center">{{ $contactedpatient->symptoms}}</td>
                                                        <td class="text-center">
                                                            @if ($contactedpatient->uploaded ==NULL)
                                                                <span>لا يوجد مرفقات</span>
                                                                @else
                                                                <a href="/uploaded/images/{{ $contactedpatient->uploaded}}" target="blank" title="اضفط للمشاهده">{{ $contactedpatient->uploaded}}</a>
                                                            @endif
                                                        </td>
                                                         <td class="text-center"><a href="{{Route('delete.contactedpatients',$contactedpatient->id)}}" class="btn btn-warning btn-sm">حذف</a></td>
                                                    </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @else
                                      <div class="alert alert-info">
                                          <h4>لا يوجد بيانات حتي الآن...</h4>
                                      </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">

                    </nav>
                    <p class="copyright pull-right">
                    </p>
                </div>
            </footer>
        @endsection
