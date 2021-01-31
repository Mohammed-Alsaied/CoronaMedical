@extends('doctors.layout.dashboard')
@section('title','بيانات المستخدم')
@section('content')

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">بيانات المستخدم</h4>
                                </div>
                                <div class="content">

                                    <form method="POST" action="{{ Route('update.doctor',$editdoctor->id) }}">
                                            @csrf
                                            @if (Session()->has('success'))

                                                    <div class="alert alert-success text-right  id="message">
                                                        <i class="fas fa-check-square fa-1x"></i>
                                                    {{ Session()->get('success') }}
                                                    </div>

                                            @endif
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>اسم المستخدم</label>
                                                    <input type="text" class="form-control" name="username"  placeholder="اسم المستخدم" value="{{$editdoctor->username}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>عدد الساعات المتبرع بها</label>
                                                    <input type="text" class="form-control" name="donatehours" placeholder=" عدد الساعات المتبرع بها" value="{{$editdoctor->number_of_donated_hour}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">البريد الإلكتروني </label>
                                                    <input type="email" class="form-control" name="email" placeholder="البريد الإلكتروني" value="{{$editdoctor->email}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>كلمة المرور</label>
                                                    <span class="btn-show-pass">
                                                        <i class="pe-7s-look" id="eye"></i>
                                                    </span>
                                                    <input class="form-control" id="password"  name="password" value="{{$editdoctor->password}}" type="password" placeholder="كلمة المرور}}">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">تحديث البيانات </button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-right">
                    </nav>
                    <p class="copyright pull-left">
                    </p>
                </div>
            </footer>

@endsection

{{-- <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>اسم المستخدم</label>
            <input type="text" class="form-control" name="username"  placeholder="اسم المستخدم" value="@if(Session()->has('userName')) {{Session()->get('userName')}}@endif">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>اسم المستشفى التى تعمل بها</label>
            <input type="text" class="form-control" name="hospital" placeholder="اسم المستشفى التى تعمل بها" value="@if(Session()->has('hospita_name')) {{Session()->get('hospita_name')}}@endif">
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>رقم التلبفون</label>
            <input type="text" class="form-control" placeholder="رقم التلبفون" value="@if(Session()->has('phone_number')) {{Session()->get('phone_number')}}@endif">

        </div>
    </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>عدد الساعات المتبرع بها</label>
                <input type="text" class="form-control" placeholder=" عدد الساعات المتبرع بها" value="@if(Session()->has('number_of_donated_hour')) {{Session()->get('number_of_donated_hour')}}@endif">
            </div>
        </div>
</div>
<div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">البريد الإلكتروني </label>
                <input type="email" class="form-control" name="email" placeholder="البريد الإلكتروني" value="@if(Session()->has('email')) {{Session()->get('email')}}@endif">
            </div>
        </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>كلمة المرور </label>
            <input type="text" class="form-control" placeholder="كلمة المرور " value="@if(Session()->has('password')) {{Session()->get('password')}}@endif">
        </div>
    </div>
</div>

<button type="submit" class="btn btn-info btn-fill pull-right">تحديث البيانات </button>
<div class="clearfix"></div>--}}
