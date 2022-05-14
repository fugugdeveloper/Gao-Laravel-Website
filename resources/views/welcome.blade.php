<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gola Artistoota Oromoo/ Oromo Artists Gallery</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <link href="/frontend/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="frontend/lib/animate/animate.min.css" rel="stylesheet">
    <link href="frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="frontend/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="frontend/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="frontend/css/all.min.css" rel="stylesheet"> --}}

    <!-- Template Stylesheet -->
    <link href="frontend/css/style.css" rel="stylesheet">
    <link href="assets/css/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->



        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h2 class="m-0"><i class="fa fa-search me-2"></i>Gola Artistoota Oromoo</h2>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="/" class="nav-item nav-link active">Home</a>

                        <a href="/bio-list" class="nav-item nav-link">Biography</a>
                        <a href="/gao-videos" class="nav-item nav-link "> GAO Youtube</a>
                        <a href="/gao-gallery" class="nav-item nav-link "> Gallery</a>
                        <a href="/post" class="nav-item nav-link "> Posts</a>
                        <a href="/about" class="nav-item nav-link">About Us</a>
                        <a href="/contact" class="nav-item nav-link">Contact</a>
                        <a href="/login" class="nav-item nav-link"><i class="fa-solid fa-right-to-bracket"></i></a>
                    </div>
                </div>
            </nav>

            <div class="container-fluid py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h3 class="text-white mb-4 animated zoomIn">Gola Artistoota Oromoo
                                Bu'uura kaleeysa kuusa seenaa qabsaa'oota giddu gala artistootati Golli Artistoota
                                Oromoo</h3>
                            <p class="text-white pb-3 animated zoomIn">Oromo Artists Gallery.</p>
                            <a href="/bio-list"
                                class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Biography</a>
                            <a href="/contact"
                                class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact
                                Us</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid" src="/img/logo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->






        <!-- biography Start -->
        <section class="section-sm section-md">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center section-title justify-content-between">
                            <h2 class="mb-0 text-nowrap mr-3">List of Biography</h2>
                            <div class="border-top w-100 border-primary d-none d-sm-block"></div>

                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">

                    @foreach ($bios as $bio)
                        <div class="col-lg-4 col-sm-6 mb-5">
                            <div class="card p-0 border-primary rounded-0 hover-shadow">
                                <img class="card-img-top rounded-0" src="{{ $bio->bioImageUrl }}"
                                    style="height: 250px;" alt="course thumb">
                                <div class="card-body">
                                    <ul class="list-inline mb-2">
                                        <li class="list-inline-item"><i
                                                class="ti-calendar mr-1 text-color"></i>{{ $bio->created_at }}</li>
                                        <li class="list-inline-item"><a class="text-color" href="">Gola Artistoota
                                                Oromoo</a>
                                        </li>
                                    </ul>
                                    <a href="/biography/{{ $bio->bioforArstist }}">
                                        <h4 class="card-title"></h4>
                                    </a>
                                    <p class="card-text mb-4">{!! substr($bio->bioDetails, 0, 100) !!} </p>
                                    <a href="/biography/{{ $bio->bioforArstist }}" class="btn btn-primary btn-sm">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
        </section>
        <!-- biography End -->




        <!-- cta -->
        <section class="section bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h6 class="text-white font-secondary mb-0"> Chaanaali youtube keenya kan asi gaditti argamu kana
                            irratti
                            tuquudhaan saganta keenya hordofu ni dandeeysan</h6>
                        <h2 class="section-title text-white">Gola Artistoota Oromoo Youtube Channel</h2>
                        <a href="https://www.youtube.com/c/GolaArtistootaOromoo/" class="btn btn-secondary">Subscribe
                            Now</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Post Start -->
        <div class="container-fluid py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Latest</h6>
                    <h2 class="mt-2">Recently Launched Posts</h2>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="btn px-3 pe-4 active" data-filter="*">All</li>
                            <li class="btn px-3 pe-4" data-filter=".News">News</li>
                            <li class="btn px-3 pe-4" data-filter=".Documentary">Documentary</li>
                            <li class="btn px-3 pe-4" data-filter=".LatesSongs">Latest Songs</li>
                            <li class="btn px-3 pe-4" data-filter=".OldSongs">Old Songs</li>
                            <li class="btn px-3 pe-4" data-filter=".Events">Events</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container">
                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-md-6 portfolio-item {{ $post->postType }} wow zoomIn"
                            data-wow-delay="0.1s">
                            <div class="position-relative rounded overflow-hidden">
                                <img class="img-fluid w-100" src="{{ $post->postImage }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-light" href="{{ $post->postImage }}"
                                        data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                    <div class="mt-auto">
                                        <small class="text-white"><i
                                                class="fa fa-timeline me-2"></i>{{ $post->postTitle }}</small>
                                        <a class="h5 d-block text-white mt-1 mb-0"
                                            href="post/{{ $post->artistName }}">{{ $post->artistName }}</a>


                                        <center> <a class="h5 d-block text-warning mt-1 mb-0"
                                                href="post/{{ $post->artistName }}">View Detail</a>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Post End -->






        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <h6 class="text-white mb-4"> Gola Artistoota Oromoo</h6>
                        <h6 class="text-white mb-4">Oromo Artists Gallery</h6>
                        <p class="text-white"><i class="fa fa-map-marker-alt me-3 text-white"></i>Haramaya, Fugug,
                            Oromia</p>
                        <p class="text-white"><i class="fa fa-phone-alt me-3 text-white"></i>+251924180914</p>
                        <p class="text-white"><i class="fa fa-envelope me-3 text-white"></i>golaartoromo@gmail.com
                        </p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social text-white" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social text-white" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social text-white"
                                href="https://www.youtube.com/c/GolaArtistootaOromoo"><i
                                    class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social text-white" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social text-white" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-social text-white"
                                href="https://t.me/golaartistootaoromoo"><i class="fab fa-telegram text-white"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Popular Link</h5>
                        <a class="btn btn-link" href="about">About Us</a>
                        <a class="btn btn-link" href="contact">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" data-bs-toggle="modal" data-bs-target="#termModal">Terms &
                            Condition</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">GAO Gallery</h5>
                        <div class="row g-2">
                            <div class="col-4">
                                <img class="img-fluid" src="/artist_image/ali birraa .jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="/artist_image/elemoo ali.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="/artist_image/ayyuub_abubakar.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="/artist_image/qamar yusuuf.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="/artist_image/nuuho_goobana.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="/artist_image/elemoo fi ali birraa.png" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p class="text-white ml-3">Waa'ee Gola Artistoota Oromoo gara email keeysaanitin hordoofu
                            dandeessu!</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                                placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                    class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom"
                                href="https://www.golaartiistootaoromoo.com">www.golaartiistootaoromoo.com</a>, All
                            Right Reserved.


                            Designed By <a class="border-bottom" href="mailto:fandishefugug@gmail.com">Fandishe
                                Fugug</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="/">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/lib/wow/wow.min.js"></script>
    <script src="frontend/lib/easing/easing.min.js"></script>
    <script src="frontend/lib/waypoints/waypoints.min.js"></script>
    <script src="frontend/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="frontend/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="frontend/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="frontend/js/main.js"></script>
    <script src="frontend/js/all.min.js"></script>
</body>

</html>
