@extends('admin.layout.dashboard')
@section('title','المستخدمين')
@section('content')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">المستخدمين</h4><br>
                                    <p class="category"></p>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    @if (isset($admins) && $admins->count() > 0)
                                    <table class="table table-hover table-striped" id="patient">
                                        @if (Session()->has('deleted'))
                                            <div class="alert alert-info">
                                                {{Session()->get('deleted')}}
                                            </div>

                                        @endif

                                        <thead>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">الإسم الأول</th>
                                            <th class="text-center">الإسم الأخير</th>
                                            <th class="text-center">اسم المستخدم</th>
                                            <th class="text-center">البريد الالكتروني</th>
                                            <th class="text-center">كلمة المرور</th>
                                            <th class="text-center">وقت الإنشاء</th>
                                            <th class="text-center">وقت التعديل</th>
                                            <th class="text-center">العمليات</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($admins as $admin)
                                                    <tr>
                                                        <td class="text-center">{{ $admin->id}}</td>
                                                        <td class="text-center">{{ $admin->fristname}}</td>
                                                        <td class="text-center">{{ $admin->lastname}}</td>
                                                        <td class="text-center">{{ $admin->username}}</td>
                                                        <td class="text-center">{{ $admin->email}}</td>
                                                        <td class="text-center">{{ $admin->password}}</td>
                                                        <td class="text-center">{{ $admin->created_at}}</td>
                                                        <td class="text-center">{{ $admin->updated_at}}</td>
                                                        <td class="text-center">
                                                             <a href="{{ Route('edit.adminusers',$admin->id) }}" class="btn btn-warning btn-sm">تعديل</a>
                                                            <a href="{{ Route('delete.users',$admin->id) }}" class="btn btn-warning btn-sm">حذف</a>

                                                        </td>
                                                    </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @else
                                      <div class="alert alert-danger">
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
