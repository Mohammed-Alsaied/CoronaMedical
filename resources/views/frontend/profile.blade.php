  @include('frontend.includes.prheader')
<link rel="stylesheet" href="{{asset('profile/css/style.css')}}">
    <!-- Begin Navbar -->
    <div class="A container-fluid info">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <h1>Web Developer</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <li>
                            <a class="nav-link" href="#p">Portfolio</a>
                        </li>
                        <li class="nav-item" class="nav-item active">
                            <a class="nav-link" href="#a">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#c">Contact</a>
                        </li>

                </ul>
            </div>
        </nav>

    </div>
    <!-- End Navbar -->

    <div class="master-header container-fluid">
        <div class="card  container-fluid" style="width: 500px;" id="card">
            <div class="row mx-0">
                <img src="{{asset('profile/images/1.png')}}" class="card-img-top" alt="My photo" id="img">
            </div>
            <div class="card-body info">
                <p class="card-text">Mohamed Alsaied</p>
                <p class="card-text">Civil Engineer | Full-Stack Web Developer</p>
                <a href="https://www.facebook.com/mohamed.said.7906/" target="blanck"><i class="fab fa-facebook-square fa-3x" style="color:  #3b5998;"></i></a>
                <a href="https://twitter.com/Mohamed54819137" target="blanck"><i class="fab fa-twitter-square fa-3x" style="color: #1da1f2"></i></a>
                <a href="https://www.instagram.com/alsaied650/" target="blanck"> <i class="fab fa-instagram fa-3x" style="color:#E1306C;"></i></a>
                <a href="https://www.linkedin.com/in/mohamed-alsaied-a9b18b1b4" target="blanck"> <i class="fab fa-linkedin fa-3x" style="color: #0e76a8;"></i></a>
            </div>
        </div>
    </div>

    <div class="content">


        <div class="about" id="a">
            <h1>About</h1>
            <p>
                My Name is Mohamed Alsaied - 22 year's - I Grauated From KMA Civil Engineering Department - Senior 2020 - I Looking forward to learn Web Developer - SEO - Digital Marketing - Softwaer Engineer And Find Job In Big Company - In Future I will Strive to Create
                My Own Project.
            </p>
        </div>

        <div class="contact" id="c">
            <h1>Contact</h1>
            <div class="form form-group" class="text-center">
                <form>
                    <input type="text" name="Your Name" class="form-control" placeholder="Enter Your Name" required autocomplete="off">

                    <input type="email" name="Your Email" class="form-control" placeholder="Enter Your Email" required autocomplete="off">

                    <textarea name="Your Message" class="form-control" placeholder="Enter Your Message"></textarea>
                    <button type="submit" class="btn btn-warning">Send</button>

                </form>
            </div>
        </div>
    </div>
    @include('frontend.includes.prfooter')
    <script src="js/custom.js"></script>
