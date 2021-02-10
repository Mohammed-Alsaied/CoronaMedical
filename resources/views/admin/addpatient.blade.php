@extends('admin.layout.dashboard')
@section('title','المرضى المضافة')
@section('content')

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">المرضى المضافة</h4><br>
                                    <p class="category"></p>
                                </div>



                                <div class="content table-responsive table-full-width">
                                @if (isset($addminaddpatients) && $addminaddpatients->count() > 0)
                                    <table class="table table-hover table-striped" id="doctor">
                                        @if(Session()->has('deleted'))
                                        <div class="alert alert-warning" r>
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
                                            <th class="text-center">وقت الإنشاء</th>
                                            <th class="text-center">وقت التعديل</th>
                                            <th class="text-center">العمليات</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($addminaddpatients as $addminaddpatient)
                                                    <tr>
                                                        <td class="text-center">{{ $addminaddpatient->id}}</td>
                                                        <td class="text-center">{{ $addminaddpatient->fullname}}</td>
                                                        <td class="text-center">
                                                            <a href="tel:{{ $addminaddpatient->phone_number}}" title="إضفط للإتصال ">{{ $addminaddpatient->phone_number}}</a>
                                                        </td>
                                                        <td class="text-center">{{ $addminaddpatient->age}}</td>
                                                        <td class="text-center">{{ $addminaddpatient->Length}}</td>
                                                        <td class="text-center">{{ $addminaddpatient->weight}}</td>
                                                        <td class="text-center">{{ $addminaddpatient->symptoms}}</td>
                                                        <td class="text-center">
                                                            @if ($addminaddpatient->uploaded ==NULL)
                                                                <span>لا يوجد مرفقات</span>
                                                                @else
                                                                <a href="/uploaded/images/{{ $addminaddpatient->uploaded}}" target="blank" title="اضفط للمشاهده">{{ $addminaddpatient->uploaded}}</a>
                                                            @endif
                                                        </td>
                                                        <td class="text-center">{{ $addminaddpatient->created_at}}</td>
                                                        <td class="text-center">{{ $addminaddpatient->updated_at}}</td>
                                                        <td class="text-center"><a href="{{Route('delete.adminaddpatient',$addminaddpatient->id)}}" class="btn btn-warning btn-sm">حذف</a></td>
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
