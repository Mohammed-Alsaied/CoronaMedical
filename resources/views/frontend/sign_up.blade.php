
    @extends('layout.master')
    @section('title','تسجيل البيانات')
    @section('content')
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Sign UP</title>
    <!-- Main CSS-->
    <link href="{{asset('assets/css1/main1.css')}}" rel="stylesheet" media="all">
</head>

<body>
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <h1>مرحبا بك في صفحه التسجيل </h1>
        <h2>نتمي ان تكون سعيد بتجربتك في الموقع</h2>
        <input class="btn-get-started scrollto doctor" type="radio" name="name"> تسجيل ك طبيب
        <input class="btn-get-started scrollto patient" type="radio" name="name"> تسجيل ك مريض
    </div>

</section> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



<!-- Doctor Form  -->
<form class="container text-right" id="doctor" validate action="{{Route('store.doctros')}}" method="POST">
    @if(Session()->has('success'))
    <div class="alert alert-warning alert-dismissible fade show text-right" role="alert" id="text">
        {{ Session()->get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" id="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    @csrf
       <div class="form-row">
            <div class="col-md-12">
                <label for="validationTooltip02">الإسم الكامل</label>
                <input type="text" placeholder="الإسم الكامل" value="{{ old('fullname') }}"  name="fullname" class="form-control" id="validationTooltip02">
                @error('fullname')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>

    <div class="row">

        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <label for="validationTooltip01">التخصص</label>
                <input type="text" placeholder="التخصص" value="{{ old('specialization') }}" name="specialization" class="form-control" id="validationTooltip01">
                @error('specialization')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <label for="validationTooltip02">اسم المستشفى التى تعمل بها</label>
                <input type="text" placeholder="اسم المستشفي" value="{{ old('hospital') }}" name="hospital" class="form-control" id="validationTooltip02">
                @error('hospital')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <label for="validationTooltip01">إسم المستخدم</label>
                <input type="text" placeholder="إسم المستخدم" value="{{ old('username') }}" name="username" class="form-control" id="validationTooltip01">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <label for="validationTooltip02">البريد الإلكتروني</label>
                <input type="email" placeholder="البريد الإلكتروني" value="{{ old('email') }}" name="email" class="form-control" id="validationTooltip02">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <label for="validationTooltip01">كلمة المرور</label>
                <input type="password" placeholder="كلمة المرور" value="{{ old('password') }}" name="password" class="form-control" id="validationTooltip01">
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <label for="validationTooltip02">تأكيد كلمة المرور</label>
                <input type="password" placeholder="تأكيد كلمة المرور" value="{{ old('confirmpassword') }}" name="confirmpassword" class="form-control" minlength="8" id="validationTooltip02">
                @error('confirmpassword')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <label for="validationTooltip01">رقم التلبفون</label>
                <input type="text" placeholder="رقم التلبفون" value="{{ old('phonenumber') }}" name="phonenumber" class="form-control" id="validationTooltip01">
                @error('phonenumber')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <label for="validationTooltip04">الجنس</label>
                <select class="custom-select" name="gender" id="validationTooltip04">
                    <option selected disabled value="">الجنس</option>
                    <option value="1">ذكر</option>
                    <option value="2">أنثى</option>
                </select>
                @error('gender')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label for="validationTooltip01">عدد الساعات المتبرع بها</label>
                    <input type="text" placeholder="عدد الساعات المتبرع بها" value="{{ old('donatedhour') }}" name="donatedhour" class="form-control" id="validationTooltip01">
                    @error('donatedhour')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="validationTooltip01">سنوات الخبرة</label>
                        <input type="text" placeholder="سنوات الخبرة" value="{{ old('expyears') }}" name="expyears" class="form-control" id="validationTooltip01">
                        @error('expyears')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <button class="btn btn-primary" id="drcreate" type="submit">تسجيل</button>
                </div>
            </div>
        </div>
</form>
<br><br><br>
<!-- Patient Form  -->
<form class="needs-validation container scrollto" action="{{Route('store.patient')}}" method="POST" id="patient" validate enctype="multipart/form-data">
    @if(Session()->has('pasuccess'))
    <div class="alert alert-warning alert-dismissible fade show text-right" role="alert" id="text">
        {{ Session()->get('pasuccess') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" id="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    @csrf
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationTooltip02">الإسم الكامل</label>
            <input type="text" placeholder="الإسم الكامل" value="{{ old('pafullname') }}" name="pafullname" class="form-control" id="validationTooltip02">
            @error('pafullname')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="form-row">

        <div class="col-md-12 mb-3">
            <label for="validationTooltip02">البريد الإلكتروني</label>
            <input type="email" placeholder="البريد الإلكتروني" value="{{ old('paemail') }}" name="paemail" class="form-control" id="validationTooltip02">
            @error('paemail')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">

        <div class="col-md-12 mb-3">
            <label for="validationTooltip02">السن</label>
            <input type="text" placeholder="السن" name="age" value="{{ old('age') }}" class="form-control" id="validationTooltip02">
            @error('age')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationTooltip01">الطول(سم)</label>
            <input type="text" placeholder="الطول" name="length" value="{{ old('length') }}" class="form-control" id="validationTooltip01">
            @error('length')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="form-row">

        <div class="col-md-12 mb-3">
            <label for="validationTooltip02">الوزن(كجم)</label>
            <input type="text" laceholder="الوزن" name="weight" value="{{ old('weight') }}" class="form-control" id="validationTooltip02" style="text-align: right">
            @error('weight')
            <span class="text-danger">{{$message}}</span>
             @enderror
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationTooltip01">رقم التلبفون</label>
            <input type="text" placeholder="رقم التلبفون" value="{{ old('paphonenumber') }}" name="paphonenumber" class="form-control" id="validationTooltip01">
            @error('phonenumber')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationTooltip04">الجنس</label>
            <select class="text-right form-control" name="gender" id="validationTooltip04"  style="text-align: right">
                <option class="" selected disabled value="" style="text-align: right" >الجنس</option>
                <option class="" value="1" style="text-align: right">ذكر</option>
                <option class="" value="2" style="text-align: right">أنثى</option>
            </select>
            @error('gender')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-12 mb-3" id="ill">
            <label>الأعراض التي ظهرت عليك مثال (كحه عاديه-ضيق تنفس)</label><br>
            <textarea name="symptoms" class="form-control" value="{{ old('symptoms') }}" cols="2" rows="2" style="text-align: right"></textarea>
            @error('symptoms')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12">
            <label>المرفقات (صور اشعه - تحاليل)</label><br>
            <input class="form-control" type="file" value="{{ old('uploaded') }}" placeholder="" name="uploaded">
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <button class="btn btn-primary" id="pacreate" type="submit">تسجيل</button>
            </div>
        </div>
    </div>
</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<br><br><br>



<!-- Jquery JS-->
<script src="{{asset('assets/vendor1/jquery/jquery.min.js')}}"></script>
<!-- Main JS-->
<script src="{{asset('assets/js1/global.js')}}"></script>
</body>

</html>
<!-- end document-->
@endsection
