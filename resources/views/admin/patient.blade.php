@extends('admin.layout.dashboard')
@section('title','المرضى')
@section('content')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">المرضى</h4><br>
                                    <p class="category"></p>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    @if (isset($patients) && $patients->count() > 0)
                                    <table class="table table-hover table-striped" id="patient">
                                        @if(Session()->has('deleted'))
                                        <div class="alert alert-warning" >
                                            {{ Session()->get('deleted') }}
                                        </div>
                                     @endif

                                        <thead>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">الإسم الكامل</th>
                                            <th class="text-center">اسم المستخدم</th>
                                            <th class="text-center">البريد الالكتروني</th>
                                            <th class="text-center">كلمة المرور</th>
                                            <th class="text-center">السن</th>
                                            <th class="text-center">الطول</th>
                                            <th class="text-center">الوزن</th>
                                            <th class="text-center">رقم التلبفون</th>
                                            <th class="text-center">الأعراض</th>
                                            <th class="text-center">المرفقات</th>
                                            <th class="text-center">وقت الإنشاء</th>
                                            <th class="text-center">وقت التعديل</th>
                                            <th class="text-center">العمليات</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($patients as $patient)
                                                    <tr>
                                                        <td class="text-center">{{ $patient->id}}</td>
                                                        <td class="text-center">{{ $patient->fullname}}</td>
                                                        <td class="text-center">{{ $patient->username}}</td>
                                                        <td class="text-center">{{ $patient->email}}</td>
                                                        <td class="text-center">{{ $patient->password}}</td>
                                                        <td class="text-center">{{ $patient->age}}</td>
                                                        <td class="text-center">{{ $patient->length}}</td>
                                                        <td class="text-center">{{ $patient->weight}}</td>
                                                        <td class="text-center">
                                                            <a href="tel:{{ $patient->phone_number}}" title="إضفط للإتصال ">{{ $patient->phone_number}}</a>
                                                        </td>
                                                        <td class="text-center">{{ $patient->symptoms}}</td>
                                                        <td class="text-center">
                                                            @if ($patient->uploaded ==NULL)
                                                                <span>لا يوجد مرفقات</span>
                                                                @else
                                                                <a href="/uploaded/images/{{ $patient->uploaded}}" target="blank" title="اضفط للمشاهده">{{ $patient->uploaded}}</a>
                                                            @endif
                                                        </td>
                                                        <td class="text-center">{{ $patient->created_at}}</td>
                                                        <td class="text-center">{{ $patient->updated_at}}</td>
                                                        <td class="text-center"><a href="{{Route('delete.patient',$patient->id)}}" class="btn btn-warning btn-sm">حذف</a></td>
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
