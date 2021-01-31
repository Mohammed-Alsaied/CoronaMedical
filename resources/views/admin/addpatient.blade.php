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
                                            <th>ID</th>
                                            <th>الإسم</th>
                                            <th>رقم التلبفون</th>
                                            <th>السن</th>
                                            <th>الطول</th>
                                            <th>الوزن</th>
                                            <th>الأعراض</th>
                                            <th>المرفقات</th>
                                            <th class="text-center">العمليات</th>

                                        </thead>
                                        <tbody>
                                            @foreach ($addminaddpatients as $addminaddpatient)
                                                    <tr>
                                                        <td>{{ $addminaddpatient->id}}</td>
                                                        <td>{{ $addminaddpatient->fullname}}</td>
                                                        <td>
                                                            <a href="tel:{{ $addminaddpatient->phone_number}}" title="إضفط للإتصال ">{{ $addminaddpatient->phone_number}}</a>
                                                        </td>
                                                        <td>{{ $addminaddpatient->age}}</td>
                                                        <td>{{ $addminaddpatient->Length}}</td>
                                                        <td>{{ $addminaddpatient->weight}}</td>
                                                        <td>{{ $addminaddpatient->symptoms}}</td>
                                                        <td>
                                                            @if ($addminaddpatient->uploaded ==NULL)
                                                                <span>لا يوجد مرفقات</span>
                                                                @else
                                                                <a href="/uploaded/images/{{ $addminaddpatient->uploaded}}" target="blank" title="اضفط للمشاهده">{{ $addminaddpatient->uploaded}}</a>
                                                            @endif
                                                        </td>
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
