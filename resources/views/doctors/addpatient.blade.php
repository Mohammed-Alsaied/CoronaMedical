@extends('doctors.layout.dashboard')

@section('title','المرضى المضافه')
@section('content')


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">المرضى المضافه</h4><br>

                                </div>
                                <div class="content table-responsive table-full-width">
                                 @if (isset($ills) && $ills->count() > 0)

                                    <table class="table table-hover table-striped" id="doctor">
                                        @if(Session()->has('deleted'))
                                            <div class="alert alert-warning">
                                                {{ Session()->get('deleted') }}
                                            </div>
                                         @endif
                                        <thead>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">الإسم الكامل</th>
                                            <th class="text-center">رقم التلبفون</th>
                                            <th class="text-center">السن</th>
                                            <th class="text-center">الطول(سم)</th>
                                            <th class="text-center">الوزن(كجم)</th
                                            <th class="text-center">الأعراض</th>
                                            <th class="text-center">المرفقات</th>
                                            <th class="text-center">العمليات</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($ills as $ill)

                                                    <tr>
                                                        <td class="text-center">{{ $ill->patient_id}}</td>
                                                        <td class="text-center">{{ $ill->fullname}}</td>
                                                        <td class="text-center"><a href="tel:{{ $ill->phone_number}}">{{ $ill->phone_number}}</a></td>
                                                        <td class="text-center">{{ $ill->age}}</td>
                                                        <td class="text-center">{{ $ill->Length}}</td>
                                                        <td class="text-center">{{ $ill->weight}}</td>
                                                        <td class="text-center">{{ $ill->symptoms}}</td>
                                                        <td class="text-center">
                                                            @if ($ill->uploaded ==NULL)
                                                                <span>لايوجد مرفقات</span>
                                                            @else
                                                                <a href="/uploaded/images/{{ $ill->uploaded}}" target="blank">{{ $ill->uploaded}}</a>
                                                            @endif
                                                        </td>
                                                        <td class="text-center"><a href="{{Route('contacted.patients',$ill->id)}}" class="btn btn-primary btn-sm">تم التواصل</a></td>
                                                        {{--  <td><a href="{{Route('delete.patients',$ill->id)}}" class="btn btn-danger btn-sm">حذف</a></td> --}}
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
