@extends('admin.layout.dashboard')
@section('title',' الأطباء')
@section('content')

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">الأطباء</h4><br>
                                    <p class="category"></p>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    @if (isset($doctors) && $doctors->count() > 0)
                                    <table class="table table-hover table-striped" id="doctor">
                                        @if (Session()->has('deleted'))
                                            <div class="alert alert-warning alert-dismissible fade show text-right" role="alert" id="text">
                                                {{ Session()->get('deleted') }}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close" id="close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                        <thead>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">الإسم الكامل</th>
                                            <th class="text-center">التخصص</th>
                                            <th class="text-center">اسم المستشفي</th>
                                            <th class="text-center">اسم المستخدم</th>
                                            <th class="text-center">البريد الالكتروني</th>
                                            <th class="text-center">كلمة المرور</th>
                                            <th class="text-center">رقم التلبفون</th>
                                            <th class="text-center">ساعات التبرع</th>
                                            <th class="text-center">سنوات الخبره</th>
                                            <th class="text-center">وقت الإنشاء</th>
                                            <th class="text-center">وقت التعديل</th>
                                            <th class="text-center">العمليات</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($doctors as $doctor)
                                                    <tr>
                                                        <td class="text-center"><small>{{ $doctor->id}}</small></td>
                                                        <td class="text-center"><small>{{ $doctor->fullname}}</small></td>
                                                        <td class="text-center"><small>{{ $doctor->specialization}}</small></td>
                                                        <td class="text-center"><small>{{ $doctor->hospita_name}}</small></td>
                                                        <td class="text-center"><small>{{ $doctor->username}}</small></td>
                                                        <td class="text-center"><small>{{ $doctor->email}}</small></td>
                                                        <td class="text-center"><small>{{ $doctor->password}}</small></td>
                                                        <td class="text-center">
                                                            <small>
                                                                <a href="tel:{{ $doctor->phone_number}}" title="إضفط للإتصال">{{ $doctor->phone_number}}</a>
                                                             </small>
                                                        </td>
                                                        <td class="text-center"><small>{{ $doctor->number_of_donated_hour}}</small></td>
                                                        <td class="text-center"><small>{{ $doctor->years_of_Experience}}</small></td>
                                                        <td class="text-center"><small>{{ $doctor->created_at}}</small></td>
                                                        <td class="text-center"><small>{{ $doctor->updated_at}}</small></td>
                                                        <td class="text-center"><small><a href="{{Route('delete.doctors',$doctor->id)}}" class="btn btn-danger btn-sm">حذف</a></small></td>
                                                    </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @else

                                      <div class="alert alert-info>
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
