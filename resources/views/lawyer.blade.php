<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Zakon Law</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">

    <!-- Favicon -->
    <link href="img/zakon-ico.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/cubeportfolio.min.css">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <!-- <img src="img/zakon-ico.ico" alt="Carousel Image" id="zakon-ico" width="50px" height="50px"> -->
                            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                <a class="btn_back" href="/index">BACK</a>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>PENGACARA</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Daftar Pengacara</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <section id="lawyer" class="home-section bg-gray paddingbot-60" data-ride="lawyer">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div id="filters-container" class="cbp-l-filters-alignLeft">
                            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">Semua (<div class="cbp-filter-counter"></div>)</div>
                            <div data-filter=".Ekonomi" class="cbp-filter-item">Ekonomi (<div class="cbp-filter-counter"></div>)</div>
                            <div data-filter=".Keluarga" class="cbp-filter-item">Keluarga (<div class="cbp-filter-counter"></div>)</div>
                            <div data-filter=".Pidana" class="cbp-filter-item">Pidana (<div class="cbp-filter-counter"></div>)</div>
                            <div data-filter=".Negara" class="cbp-filter-item">Tata Negara (<div class="cbp-filter-counter"></div>)</div>
                        </div>


                        <div id="grid-container" class="cbp-l-grid-team">
                            <ul>
                                @foreach ($lawyer as $lawyers)

                                <li class="cbp-item {{ $lawyers->jenis_hukum }}">
                                    <a href="{{ route('detailLawyer', $lawyers->id) }}" class="cbp-caption">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="{{ $lawyers->picture }}" alt="" width="100%">
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ route('detailLawyer', $lawyers->id) }}" class="cbp-l-grid-team-name">{{ $lawyers->nama_lawyer }}</a>
                                    <div class="cbp-l-grid-team-position">{{ $lawyers->jenis_hukum }}</div>
                                </li>

                                @endforeach
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
    </div>

    </section>

    <!-- Newsletter Start -->
    <div class="newsletter">
        <div class="container">
            <div class="section-header">
                <h2>Ikuti Website Kami dan <br>Dapatkan info Terbaru</h2>
            </div>
            <div class="form">
                <input class="form-control" placeholder="Email here">
                <button class="btn">Submit</button>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->

    <!-- Footer Start -->
    <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-about">
                            <h2>About Us</h2>
                            <p>
                                Zakon Law merupakan lembaga yang memudahkan masyarakat dalam mencari pengacara-pengacara yang sesuai dengan kasus yang dialami.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="footer-link">
                                    <h2>Menu</h2>
                                    <a href="indeks">Beranda</a>
                                    <a href="#about">Tentang</a>
                                    <a href="#kontak">Kontak</a>
                                    <a href="#janji">Buat Perjanjian</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="footer-contact">
                                    <h2>Get In Touch</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>Jln Soekarno Hatta, Malang</p>
                                    <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                    <p><i class="fa fa-envelope"></i>zakonlaw@gmail.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container footer-menu">
                <div class="f-menu">
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="">ZakonLaw</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a href="">RizqiIlham</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>

    <script src="new/smoothscroll.js"></script>
    <script src="new/aos.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/jquery.cubeportfolio.min.js"></script>
    <script src="js/jquery.cubeportfolio.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>