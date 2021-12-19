<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Zakon Law</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">

    <!-- Favicon -->
    <link href="../img/zakon-ico.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/cubeportfolio.min.css">
    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
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
                        <a class="btn_back" href="/lawyer">BACK</a>
                    </div>
                </nav>
                <div class="cbp-l-member-name">Hotman Saris</div>
                <div class="cbp-l-member-position">Ekonomi</div>
            </div>
        </div>
        <!-- Nav Bar End -->

        <!-- Page Header Start -->
        <div class="page-header2">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cbp-l-member-img">
                            <img src="../img/lawyer/lawyer1.png" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <section id="detailLawyer" class="home-section bg-gray paddingbot-60" data-ride="detailLawyer">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div id="filters-container" class="cbp-l-filters-alignLeft">
                            <div data-filter=".biodata" class="cbp-filter-item-active cbp-filter-item">Biodata</div>
                            <div data-filter=".daftarKasus" class="cbp-filter-item">Daftar Kasus</div>
                        </div>


                        <div id="grid-container" class="cbp-l-grid-team">
                            <ul>
                                <li class="cbp-item biodata">
                                    <!-- FAQs Start -->
                                    <div class="faqs">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div id="accordion">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                                                    <span>1</span>Biodata Pribadi
                                                                </a>
                                                            </div>
                                                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <table>
                                                                        <tr>
                                                                            <td>Nama</td>
                                                                            <td>:</td>
                                                                            <td> {{ $lawyer->nama_lawyer }}</td>
                                                                        <!-- </tr>
                                                                        <tr>
                                                                            <td>Jenis kelamin</td>
                                                                            <td>:</td>
                                                                            <td>Laki-laki</td>
                                                                        </tr> -->
                                                                        <tr>
                                                                            <td>Tempat/ Tgl Lahir</td>
                                                                            <td>:&nbsp;&nbsp;</td>
                                                                            <td> {{ $lawyer->place_birth }}, {{ $lawyer->date_birth }}</td>
                                                                            <!-- <td>Nganjuk/ 19 November 1989</td> -->
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Kewarnegaraan</td>
                                                                            <td>:</td>
                                                                            <td>Indonesia</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Alamat</td>
                                                                            <td>:</td>
                                                                            <td>{{ $lawyer->address }}</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                                                    <span>2</span> Pendidikan
                                                                </a>
                                                            </div>
                                                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <table>
                                                                        <tr>
                                                                            <td>2009 - 2013</td>
                                                                            <td>:</td>
                                                                            <td>S1 Jurusan Hukum Universitas Brawijaya</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2014 - 2016</td>
                                                                            <td>:</td>
                                                                            <td>S2 Jurusan Hukum Universitas Gajah Mada</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                                                    <span>3</span> Kontak
                                                                </a>
                                                            </div>
                                                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <table>
                                                                        <tr>
                                                                            <td>No. Telp</td>
                                                                            <td>:</td>
                                                                            <td>085730945122</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Fax</td>
                                                                            <td>:</td>
                                                                            <td>021-768-564</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Instagram</td>
                                                                            <td>:</td>
                                                                            <td>@hotmanSaris</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Twitter</td>
                                                                            <td>:</td>
                                                                            <td>@hotmanSaris</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Website</td>
                                                                            <td>:</td>
                                                                            <td>www.hotmanSaris.co.id</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- FAQs End -->
                                </li>

                                <li class="cbp-item daftarKasus">
                                    <!-- FAQs Start -->
                                    <div class="faqs">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div id="accordion2">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                                                    <span>1</span>2018
                                                                </a>
                                                            </div>
                                                            <div id="collapseOne" class="collapse show" data-parent="#accordion2">
                                                                <div class="card-body">
                                                                    <table>
                                                                        <tr>
                                                                            <td>Kasus Artis x</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Kasus suap Kepala Desa Mojo</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Kasus kejahatan polisi gadungan</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                                                    <span>2</span> 2019
                                                                </a>
                                                            </div>
                                                            <div id="collapseTwo" class="collapse" data-parent="#accordion2">
                                                                <div class="card-body">
                                                                    <table>
                                                                        <tr>
                                                                            <td>Kasus dukun cabul</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Kasus korupsi Bupati X</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Kasus korupsi Gubernur</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                                                    <span>3</span> 2021
                                                                </a>
                                                            </div>
                                                            <div id="collapseThree" class="collapse" data-parent="#accordion2">
                                                                <div class="card-body">
                                                                    <table>
                                                                        <tr>
                                                                            <td>Kasus korupsi Menteri</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Kasus tanah Abang</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Kasus proyek</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- FAQs End -->
                                </li>

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
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu lectus a leo tristique dictum nec non quam. Suspendisse convallis, tortor eu placerat rhoncus, lorem quam iaculis felis, sed eleifend lacus neque id eros. Integer convallis volutpat neque
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Menu</h2>
                                <a href="">Beranda</a>
                                <a href="">Tentang</a>
                                <a href="">Kontak</a>
                                <a href="">Buat Perjanjian</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h2>Get In Touch</h2>
                                <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                                <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                <p><i class="fa fa-envelope"></i>info@example.com</p>
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
                    <p>&copy; <a href="">LawCorporate</a>, All Right Reserved.</p>
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
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/isotope/isotope.pkgd.min.js"></script>

    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.scrollTo.js"></script>
    <script src="/js/jquery.appear.js"></script>
    <script src="/js/stellar.js"></script>
    <script src="/js/jquery.cubeportfolio.min.js"></script>
    <script src="/js/jquery.cubeportfolio.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/nivo-lightbox.min.js"></script>
    <script src="/js/custom.js"></script>
    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
</body>

</html>