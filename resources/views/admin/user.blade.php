@extends('admin.layout.dashboard')
@section('title',' المستخدم')
@section('content')



<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                            <h4 class="title"> المستخدم</h4>
                    </div>
                    <div class="content">
                            <form action="{{ Route('update.admin',$editadmins->id) }}" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>اسم المستخدم</label>
                                            <input type="text" class="form-control" name="username"  placeholder="اسم المستخدم" value="{{$editadmins->username}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">البريد الإلكتروني </label>
                                            <input type="email" class="form-control" name="email" placeholder="البريد الإلكتروني" value="{{$editadmins->email}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>كلمة المرور </label>
                                            <span class="btn-show-pass">
                                                <i class="pe-7s-look" id="eye"></i>
                                            </span>
                                            <input class="form-control" id="password" value="{{$editadmins->password}}" type="password" placeholder="كلمة المرور" name="password">
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
</div>

@endsection
