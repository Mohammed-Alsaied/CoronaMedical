@extends('admin.layout.dashboard')
@section('title','المرضى الذي تم شفائهم')
@section('content')

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">المرضى الذي تم شفائهم</h4><br>
                                    <p class="category"></p>
                                </div>
                                <div class="content table-responsive table-full-width">
                                @if (isset($healedpatients) && $healedpatients->count() > 0)
                                    <table class="table table-hover table-striped" id="doctor">
                                        @if(Session()->has('deleted'))
                                        <div class="alert alert-warning">
                                            {{ Session()->get('deleted') }}

                                        </div>
                                     @endif
                                        <thead>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">الإسم</th>
                                            <th class="text-center">رقم التلبفون</th>
                                            <th class="text-center">السن</th>
                                            <th class="text-center">الطول(سم)</th>
                                            <th class="text-center">الوزن(كجم)</th
                                            <th class="text-center">الأعراض</th>
                                            <th class="text-center">المرفقات</th>
                                            <th class="text-center">وقت الشفاء</th>
                                            <th class="text-center">العمليات</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($healedpatients as $healedpatient)
                                                    <tr>
                                                        <td class="text-center">{{ $healedpatient->id}}</td>
                                                        <td class="text-center">{{ $healedpatient->fullname}}</td>
                                                        <td class="text-center">
                                                            <a href="tel:{{ $healedpatient->phone_number}}" title="إضفط للإتصال ">{{ $healedpatient->phone_number}}</a>
                                                        </td>
                                                        <td class="text-center">{{ $healedpatient->age}}</td>
                                                        <td class="text-center">{{ $healedpatient->Length}}</td>
                                                        <td class="text-center">{{ $healedpatient->weight}}</td>
                                                        <td class="text-center">{{ $healedpatient->symptoms}}</td>
                                                        <td class="text-center">
                                                            @if ($healedpatient->uploaded ==NULL)
                                                                <span>لا يوجد مرفقات</span>
                                                                @else
                                                                <a href="/uploaded/images/{{ $healedpatient->uploaded}}" target="blank" title="اضفط للمشاهده">{{ $healedpatient->uploaded}}</a>
                                                            @endif
                                                        </td>
                                                        <td class="text-center">{{ $healedpatient->created_at}}</td>
                                                         <td class="text-center"><a href="{{Route('delete.healedpatients',$healedpatient->id)}}" class="btn btn-warning btn-sm">حذف</a></td>
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
