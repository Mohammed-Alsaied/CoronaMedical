
 @extends('layout.master')
 @section('title','Corona Medical -  كورونا ميديكال')
 @section('content')


 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center">
     <div class="container" id="home">
         <h1 dir="auto" class:"text-small">مرحبا بكم في كورونا ميديكال - Corona Medical</h1>
         <h2 dir="auto">بنينا هذا الموقع لرعايتكم والإطمئنان على صحتكم</h2>
         <a dir="auto" href="#about" class="btn-get-started scrollto">إبدا</a>
     </div>
 </section><!-- End Hero -->

 <main id="main">

     <!-- ======= Why Us Section ======= -->


     <!-- End Why Us Section -->
<br><br><br><br><br><br><br><br>
     <!-- ======= About Section ======= -->
     <section id="about" class="about">
         <div class="container-fluid">

             <div class="row">
                 <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-right align-items-stretch">
                 </div>

                 <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                     <h3 class="text-right">عن الموقع</h3>
                     <p dir="auto">فكره الموقع هو وسيط بين أطباء متبرعين بوقت معين من يومهم ومرضى فيروس كورونا (Covid - 19) الغير قادرين على مواكبه اعباء  مصاريف العلاج من الفيروس والذهاب الى الطبيب او انهكهم الفيروس من التعب ولا يستطيعون الذهاب إالي الطبيب وأيضا المرضى التي ظهرت عليها اعراض البرد وشاكين انها فيروس كورورنا فيقوم أطباء الخير بالمتابعه معهم ومد يد العون لهم مجانا لمساعدتهم من الشفاء من هذا المرض. </p>

                     <div class="icon-box">
                         <div class="icon"><i class="bx bx-globe"></i></div>
                         <h4 dir="auto" class="title text-right"><span> كورونا ميديكال - Corona Medical</span></h4>
                         <p dir="auto" class="description">موقع إلكتروني وسيط بين أطباء ومرضى.</p>
                     </div>

                     <div class="icon-box">
                         <div dir="auto" class="icon"><i class="bx bxs-donate-heart"></i></div>
                         <h4 dir="auto" class="title text-right"><span="#">أطباء الخير</span></h4>
                         <p  dir="auto"class="description">طبيب يمد يد العون للمريض.</p>
                     </div>

                     <div class="icon-box">
                         <div dir="auto" class="icon"><i class="bx bx-plus-medical"></i></div>
                         <h4 dir="auto" class="title text-right"><span="#">مريض</span></h4>
                         <p dir="auto" class="description">مرضى تمد لهم يد العون حتي تمام الشفاء.</p>
                     </div>

                 </div>
             </div>

         </div>
     </section>
     <!-- End About Section -->

     <!-- ======= Counts Section ======= -->
     <section id="counts" class="counts">
        <div class="container">

          <div class="row">

            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="icofont-doctor-alt"></i>
                <span data-toggle="counter-up">{{App\Models\Doctor::count() }}</span>
                <p>طبيب</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
              <div class="count-box">
                <i class="icofont-patient-bed"></i>
                <span data-toggle="counter-up">{{App\Models\Patient::count() }}</span>
                <p>مريض</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="icofont-prescription"></i>
                <span data-toggle="counter-up">{{App\Models\Contactedpatient::count() }}</span>
                <p>مريض تم التواصل معهم</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="icofont-heart"></i>
                <span data-toggle="counter-up">{{App\Models\Healedpatient::count() }}</span>
                <p>مريض تم شفائهم</p>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Counts Section -->

     <!-- End Counts Section -->



     <!-- ======= Gallery Section ======= -->
     <section id="gallery" class="gallery">
         <div class="container">

             <div class="section-title">
                 <h2 dir="auto">الأطباء</h2>
                 <p dir="auto"> شكرا لجميع الطاقم الطبي في مصر والعالم أجمع علي تعاونهم ومساهمتهم في الجائحه العالميه فيروس كورونا (Covid - 19).</p>
             </div>
         </div>

         <div class="container-fluid">
             <div class="row no-gutters">

                 <div class="col-lg-3 col-md-4">
                     <div class="gallery-item">
                         <a href="{{asset('assets/img/gallery/gallery-1.jpg')}}" class="venobox" data-gall="gallery-item">
                             <img src="{{asset('assets/img/gallery/gallery-1.jpg')}}" alt="" class="img-fluid">
                         </a>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-4">
                     <div class="gallery-item">
                         <a href="{{asset('assets/img/gallery/gallery-2.jpg')}}" class="venobox" data-gall="gallery-item">
                             <img src="{{asset('assets/img/gallery/gallery-2.jpg')}}" alt="" class="img-fluid">
                         </a>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-4">
                     <div class="gallery-item">
                         <a href="{{asset('assets/img/gallery/gallery-3.jpg')}}" class="venobox" data-gall="gallery-item">
                             <img src="{{asset('assets/img/gallery/gallery-3.jpg')}}" alt="" class="img-fluid">
                         </a>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-4">
                     <div class="gallery-item">
                         <a href="{{asset('assets/img/gallery/gallery-4.jpg')}}" class="venobox" data-gall="gallery-item">
                             <img src="{{asset('assets/img/gallery/gallery-4.jpg')}}" alt="" class="img-fluid">
                         </a>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-4">
                     <div class="gallery-item">
                         <a href="{{asset('assets/img/gallery/gallery-5.jpg')}}" class="venobox" data-gall="gallery-item">
                             <img src="{{asset('assets/img/gallery/gallery-5.jpg')}}" alt="" class="img-fluid">
                         </a>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-4">
                     <div class="gallery-item">
                         <a href="{{asset('assets/img/gallery/gallery-6.jpg')}}" class="venobox" data-gall="gallery-item">
                             <img src="{{asset('assets/img/gallery/gallery-6.jpg')}}" alt="" class="img-fluid">
                         </a>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-4">
                     <div class="gallery-item">
                         <a href="{{asset('assets/img/gallery/gallery-7.jpg')}}" class="venobox" data-gall="gallery-item">
                             <img src="{{asset('assets/img/gallery/gallery-7.jpg')}}" alt="" class="img-fluid">
                         </a>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-4">
                     <div class="gallery-item">
                         <a href="{{asset('assets/img/gallery/gallery-8.jpg')}}" class="venobox" data-gall="gallery-item">
                             <img src="{{asset('assets/img/gallery/gallery-8.jpg')}}" alt="" class="img-fluid">
                         </a>
                     </div>
                 </div>

             </div>

         </div>
     </section><!-- End Gallery Section -->

     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact">
         <div class="container">

             <div class="section-title">
                 <h2>تواصل معنا</h2>
             </div>
         </div>

         <div>
             <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1982380.7904643465!2d29.21555303520004!3d30.16813298314141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbg!4v1611778620819!5m2!1sen!2sbg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
         </div>

        <div class="container">
            <div class="row mt-5">

                 <div class="col-lg-4">
                     <div class="info">
                         <div class="address" id="add">
                             <i class="icofont-google-map"></i>
                             <h4 class="text-right">الموقع:</h4>
                             <p class="text-right">مصر</p>
                         </div>

                         <div class="email" id="em">
                             <i class="icofont-envelope"></i>
                             <h4 class="text-right">البريد الإلكتروني:</h4>
                             <p class="text-right">info@getcoronamedical.com</p>
                         </div>
                     </div>

                 </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="{{Route('store.contact')}}" method="POST"  class="php-email-form">
                             @if (Session()->has('success'))
                                <div class="alert alert-warning alert-dismissible fade show text-right" role="alert" id="text">
                                    {{ Session()->get('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" id="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @csrf

                            <div class="form-row" >
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="الإسم" data-rule="minlen:4" data-msg="هذا الحقل مطلوب">
                                    <div class="validate"></div>

                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" data-rule="minlen:4" placeholder="البريد اللإلكتروني " data-msg="هذا الحقل مطلوب">
                                    <div class="validate"></div>

                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="email" data-rule="minlen:4" placeholder="الموضوع" data-msg="هذا الحقل مطلوب">
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="minlen:4" placeholder="الرسالة" data-msg="هذا الحقل مطلوب"></textarea>
                                <div class="validate"></div>
                            </div>

                            <div class="text-center">
                                <button type="submit" id="send" class="contact-form">إرسال</button>
                            </div>

                    </form>

                </div>

            </div>

        </div>
     </section>
     <!-- End Contact Section -->

 </main><!-- End #main -->

 <!-- ======= Footer ======= -->

 <!-- End Footer -->


  @stop
