<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme No: 01 | PureWeb Theme Series</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset("/")}}website/favicon.png" type="image/x-icon">
    <!-- fontawesome cdn start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- fontawesome cdn end -->

    <!-- css styles start -->
    <link rel="stylesheet" href="{{asset("/")}}website/css/global.css">
    <link rel="stylesheet" href="{{asset("/")}}website/css/style.css">
    <link rel="stylesheet" href="{{asset("/")}}website/css/responsive.css">
    <!-- css styles end -->
    <!-- aos css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!-- header section start -->
    @foreach ($homes as $home)
    <header class="box-shadow-1">
        <div class="container flex justify-between align-center">
            <!-- logo start -->
            <div class="logo" data-aos="fade-down" data-aos-duration="2000">
                <a href="./" class="clr-1 t-t-cap" title="Portfolio Theme">{{$home->full_name}}<span class="clr-2">.</span></a>
            </div>
            <!-- logo end -->

            <div class="nav-bar flex align-center">
                <nav class="nav-body">
                    <button class="flex align-center justify-center nav-btn-close nav-btn clr-1 bg-trans"><i
                            class="fas fa-times"></i></button>
                    <ul class="flex nav-list">
                        <li data-aos="fade-up-right" data-aos-duration="2000">
                            <a class="clr-2 t-t-cap hv-c-clr-1 bold" href="#home">home</a>
                        </li>
                        <li data-aos="fade-down" data-aos-duration="2000">
                            <a class="clr-2 t-t-cap hv-c-clr-1 bold" href="#about">about</a>
                        </li>
                        <li data-aos="fade-up-left" data-aos-duration="2000">
                            <a class="clr-2 t-t-cap hv-c-clr-1 bold" href="#service">service</a>
                        </li>
                        <li data-aos="fade-down" data-aos-duration="2000">
                            <a class="clr-2 t-t-cap hv-c-clr-1 bold" href="#portfolio">portfolio</a>
                        </li>
                        <li data-aos="fade-left" data-aos-duration="2000">
                            <a class="clr-2 t-t-cap hv-c-clr-1 bold" href="#contact">contact me</a>
                        </li>
                    </ul>
                </nav>
                <button class="flex align-center justify-center nav-btn-open nav-btn clr-1 bg-trans"><i
                        class="fas fa-bars"></i></button>
            </div>
        </div>
    </header>
    <!-- header section end -->




    <!-- home section start -->
    <section id="home" class="section">
        
        
        <div class="container">
            <div class="home-wrapper flex justify-between align-center">
                <div class="home-col flex fld-col">
                    <span class="fns-20 clr-2 bold" data-aos="fade-up-left" data-aos-duration="2000">Hello,</span>
                    <h1 class="clr-1 bold-x" data-aos="fade-up" data-aos-duration="2000">I'm {{$home->full_name}}</h1>
                    <p class="fns-25 clr-1" data-aos="fade-up-right" data-aos-duration="2000">{{$home->short_description}}</p>
                    <a href="#contact" data-aos="fade-up-left" data-aos-duration="2000"
                        class="btn-1 fns-25 bold hv-c-clr-1 clr-2">Hire Me</a>
                </div>
                <div class="home-col flex justify-center">
                    <div class="home-img" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="3000">
                        <p>PureWeb</p>
                        <img data-aos="flip-right" data-aos-duration="3000" data-aos-delay="2000" src="{{asset($home->image)}}" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
            
        @endforeach
    </section>
    <!-- home section end -->



    <!-- about section start -->
    <section id="about" class="section">
        <div class="container">
            <!-- section header start -->
            <div class="section-header flex fld-col align-center">
                <h2 class="fns-35 clr-1 t-t-cap" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="200">about
                    me</h2>
                <div class="line" data-aos="fade-left" data-aos-duration="2000" data-aos-offset="200"></div>
                <div class="line" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="200"></div>
            </div>
            <!-- section header end -->


            <!-- about content start -->
            <div class="about-content flex justify-center align-center">
                <div class="about-col flex justify-center">
                    <div class="about-img" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="150">
                        @foreach ($abouts as $about)
                        <p>PureWeb</p>
                        <img data-aos="flip-left" data-aos-duration="2000" data-aos-delay="1000" data-aos-offset="150"
                            src="{{asset($about->image)}}" alt="About Image">
                        @endforeach
                    </div>
                </div>
                <div class="about-col flex fld-col">
                    <h3 class="fns-25 bold clr-1" data-aos="flip-left" data-aos-duration="2000" data-aos-offset="150">
                        Hello I'm {{$home->full_name}} {{$home->short_description}}</h3>
                        @foreach ($abouts as $about)
                        
                    <p class="fns-20 clr-2" data-aos="flip-up" data-aos-duration="2000" data-aos-offset="150">{{$about->long_description}}</p>
                            
                        @endforeach
                    <div class="about-details-box flex fld-col">
                        <div class="about-details-field flex fns-20 clr-2">
                            <span data-aos="fade-right" data-aos-duration="2000" data-aos-offset="150">Name:-</span>
                            <span data-aos="fade-left" data-aos-duration="2000" data-aos-offset="150">{{$home->full_name}}</span>
                        </div>
                        @foreach ($abouts as $about)
                        <div class="about-details-field flex fns-20 clr-2">
                            <span data-aos="fade-left" data-aos-duration="2000" data-aos-offset="150">Mail:-</span>
                            <span data-aos="fade-right" data-aos-duration="2000"
                                data-aos-offset="150">{{$about->email}}</span>
                        </div>
                        <div class="about-details-field flex fns-20 clr-2">
                            <span data-aos="fade-right" data-aos-duration="2000" data-aos-offset="150">Number:-</span>
                            <span data-aos="fade-left" data-aos-duration="2000" data-aos-offset="150">{{$about->number}}</span>
                        </div>
                        <div class="about-details-field flex fns-20 clr-2">
                            <span data-aos="fade-left" data-aos-duration="2000" data-aos-offset="150">Date of
                                Birth:-</span>
                            <span data-aos="fade-right" data-aos-duration="2000" data-aos-offset="150">{{$about->date_of_birth}}</span>
                        </div>
                        <div class="about-details-field flex fns-20 clr-2">
                            <span data-aos="fade-right" data-aos-duration="2000"
                                data-aos-offset="150">Nationality:-</span>
                            <span data-aos="fade-left" data-aos-duration="2000" data-aos-offset="150">{{$about->nationality}}</span>
                        </div>
                        <div class="about-details-field flex fns-20 clr-2">
                            <span data-aos="fade-left" data-aos-duration="2000" data-aos-offset="150">Address:-</span>
                            <span data-aos="fade-right" data-aos-duration="2000" data-aos-offset="150">{{$about->address}}</span>
                        </div>
                    </div>
                    @endforeach
                    <div class="about-btn-box flex">
                        <a data-aos="fade-down-right" data-aos-duration="2000" data-aos-offset="150" href="#contact"
                            class="btn-1 fns-25 bold clr-2">Hire Me</a>
                        <a data-aos="fade-up-left" data-aos-duration="2000" data-aos-offset="150" href="#contact"
                            class="btn-2 fns-25 bold clr-2">Download CV</a>
                    </div>
                </div>
            </div>
            <!-- about content end -->
        </div>
    </section>
    <!-- about section end -->



    <!-- service section start -->
    <section id="service" class="section">
        <div class="container">
            <!-- section header start -->
            <div class="section-header flex fld-col align-center">
                <h2 class="fns-35 clr-1 t-t-cap" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="200">
                    services</h2>
                <div class="line" data-aos="fade-left" data-aos-duration="2000" data-aos-offset="200"></div>
                <div class="line" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="200"></div>
            </div>
            <!-- section header end -->
            @foreach ($services as $service)
            
            <!-- service card-box start -->
            <div class="service-card-container col-3-container flex wrap justify-center">
                <div class="service-card col-3"
                    data-aos="zoom-in" data-aos-duration="2000" data-aos-offset="200">
                    <div class="service-card-inner box-shadow-3 hv-box-shadow-2 flex fld-col align-center">
                        <i class="fas fa-bullhorn fns-35 clr-2 flex align-center justify-center"></i>
                        <h3 class="fns-30 clr-1">{{$service->title}}</h3>
                        <p class="fns-18 clr-2">{{$service->description}}</p>
                    </div>
                </div>
                
            </div>
            <!-- service card-box end -->
                
            @endforeach
        </div>
    </section>
    <!-- service section end -->



    <!-- portfolio section start -->
    <section id="portfolio" class="section">
        <!-- container start -->
        <div class="container">
            <!-- section header start -->
            <div class="section-header flex fld-col align-center">
                <h2 class="fns-35 clr-1 t-t-cap" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="200">
                    portfolio</h2>
                <div class="line" data-aos="fade-left" data-aos-duration="2000" data-aos-offset="200"></div>
                <div class="line" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="200"></div>
            </div>
            <!-- section header end -->


            <!-- portfolio card-box start -->
            <div class="portfolio-card-container col-3-container flex wrap justify-center">
                @foreach ($protfolios as $protfolio)
                <div class="portfolio-card col-3 box-shadow-3 hv-box-shadow-2 flex fld-col align-center"
                    data-aos="zoom-in-left" data-aos-duration="2000" data-aos-offset="200">
                    <div class="img">
                        <img src="{{asset($protfolio->image)}}" alt="Projects">
                    </div>
					
						<h3>{{$protfolio->protfolio_title}}<h3>
						<p>{{$protfolio->short_description}}<p>
                </div>
                <div class="display">
                    <img src="" alt="Projects">
                </div>
                <div class="display-close-btn fns-35 clr-2 flex align-center justify-center">
                    <i class="fas fa-times"></i>
                </div>
                
                    
                @endforeach
            </div>
            <!-- portfolio card-box end -->
        </div>
        <!-- container end -->
    </section>
    <!-- portfolio section end -->

    <!-- contact section start -->
    <section id="contact" class="section">
        <!-- container start -->
        <div class="container">
            <!-- section header start -->
            <div class="section-header flex fld-col align-center">
                <h2 class="fns-35 clr-1 t-t-cap" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="200">
                    contact</h2>
                <div class="line" data-aos="fade-left" data-aos-duration="2000" data-aos-offset="200"></div>
                <div class="line" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="200"></div>
            </div>
            <!-- section header end -->


            <!-- contact form start -->
            <div class="contact-form">
                <form action="{{route("contact.form")}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="field" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="150">
                        <input type="text" name="name" required>
                        <label class="fns-18 clr-1">Name</label>
                    </div>
                    <div class="field" data-aos="fade-left" data-aos-duration="2000" data-aos-offset="150">
                        <input type="email" name="email" required>
                        <label class="fns-18 clr-1">Email</label>
                    </div>
                    <div class="field" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="150">
                        <input type="text" name="subject" required>
                        <label class="fns-18 clr-1">Subject</label>
                    </div>
                    <div class="field" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="150">
                        <textarea name="message" required></textarea>
                        <label class="fns-18 clr-1">Messages</label>
                    </div>
                    <button type="submit" class="btn-1 fns-25 bold clr-2" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="120">Hire Me</button>
                </form>
            </div>
            <!-- contact form end -->
        </div>
        <!-- container end -->
    </section>
    <!-- contact section end -->
    <footer>
        <div class="container">
            <div class="footer">
                <a href="//www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-linkedin" target="_blank"></i></a>
                <a href=""><i class="fab fa-instagram-square" target="_blank"></i></a>
                <a href=""><i class="fab fa-github-square" target="_blank"></i></a>
            </div>
        </div>
    </footer>



    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- jquery-scrollwatch-cdn -->
    <script src="{{asset("/")}}website/js/scrollwatch.js"></script>
    <!-- custom jquery -->
    <script src="{{asset("/")}}website/js/app.js"></script>
    <!-- aos libray -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>