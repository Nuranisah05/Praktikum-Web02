@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>E-Haikyuu!</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('sepatu/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('sepatu/css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <!-- Topbar Start -->
        <div class="container-fluid">
            <div class="row align-items-center py-3 px-xl-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <a href="" class="text-decoration-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span
                                class="text-primary font-weight-bold border px-3 mr-1">E</span>Haikyuu!</h1>
                    </a>
                </div>
                <div class="col-lg-6 col-6 text-left">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari Produk">
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-primary">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-6 text-right">
                    <a href="" class="btn border">
                        <i class="fas fa-heart text-primary"></i>
                        <span class="badge">0</span>
                    </a>
                    <a href="" class="btn border">
                        <i class="fas fa-shopping-cart text-primary"></i>
                        <span class="badge">0</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar Start -->
        <div class="container-fluid mb-1">
            <div class="row border-top px-xl-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0"
                        id="navbar-vertical">
                        <div class="navbar-nav w-100 overflow-hidden" style="height: 210px">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link" data-toggle="dropdown">Kategori<i
                                        class="fa fa-angle-down float-right mt-1"></i></a>
                                <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                    <a href="{{ url('sport') }}" class="dropdown-item">Sport</a>
                                    <a href="{{ url('work') }}" class="dropdown-item">Work</a>
                                    <a href="{{ url('casual') }}" class="dropdown-item">Casual</a>
                                    <a href="{{ url('heels') }}" class="dropdown-item">Heels</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-9">
                    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                        <a href="" class="text-decoration-none d-block d-lg-none">
                            <h1 class="m-0 display-5 font-weight-semi-bold"><span
                                    class="text-primary font-weight-bold border px-3 mr-1">E</span>Haikyuu!</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                                <a href="{{ url('about') }}" class="nav-item nav-link active">About</a>
                                <a href="{{ url('product') }}" class="nav-item nav-link">Product</a>
                                <a href="{{ url('dashboard') }}" class="nav-item nav-link">Admin</a>
                                <a href="{{ url('contact') }}" class="nav-item nav-link">Contact</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Page Header Start -->
        <div class="container-fluid bg-secondary mb-5">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
                <h1 class="font-weight-semi-bold text-uppercase mb-3">Tentang Kami</h1>
                <div class="d-inline-flex">
                    <p class="m-0"><a href="{{ url('/') }}">Home</a></p>
                    <p class="m-0 px-2">-</p>
                    <p class="m-0"><a href="{{ url('product') }}">Product</a></p>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Shop Start -->
        <div class="row px-xl-5">
            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Tentang</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Informasi</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Reviews (0)</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Tentang Kami</h4>
                        <p>E-Haikyuu! merupakan yang terdepan dalam belanja sepatu online, menyediakan brand lokal dan
                            internasional yang terus bertambah untuk para konsumer di seluruh Indonesia. Kami memiliki
                            produk yang dapat memenuhi kebutuhan fashion Anda. Temukan inspirasi fashion sepatu pilihan
                            kami, mulai dari sepatu casual hingga ke sepatu kerja. Tampil menawan dengan mengenakan sepatu
                            untuk pergi ke kantor, pergi ke pesta, atau pergi ke tempat lainnya. Para pelanggan E-Haikyuu!
                            juga dapat berbelanja berdasarkan tren terbaru yang sedang mendominasi di dunia fashion, apakah
                            itu gaya monokrom, athleisure, atau tren terbaru di musim ini.</p>
                        <p>E-Haikyuu! adalah toko sepatu online dimana brand fashion favorit Anda berada. Dengan berbelanja
                            sepatu di toko online E-Haikyuu! Anda dapat menemukan produk sepatu eksklusif terbaik dari
                            ribuan sepatu brand terkenal, serta produk-produk yang dijamin original. Kami sebagai pusat
                            belanja sepatu online terbesar di Indonesia dapat menjawab kebutuhan sepatu pria dan sepatu
                            wanita dengan menawarkan brand-brand terbaru dan terkemuka, baik lokal maupun internasional.</p>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <h4 class="mb-3">Informasi Tambahan</h4>
                        <p>
                            Anda pastinya tahu bahwa penampilan belum sempurna tanpa kehadiran sepatu. Mencari sepatu
                            terbaru dengan kualitas terbaik tidaklah susah. Anda bisa menemukan dengan mudah sepatu wedges
                            yang dapat dicocokan dengan dress ataupun
                            gaun yang elegan, atau sepasang sneakers untuk melengkapi gaya kasual Anda. E-Haikyuu! merupakan
                            satu-satunya tempat belanja online sepatu dimana Anda dapat menemukan sepatu dalam berbagai
                            macam jenis
                            untuk ke pesta atau ke kantor. Dengan navigasi pencarian sederhana, daftar koleksi, dan harga
                            yang menarik kami memberikan kemudahan untuk Anda berbelanja online untuk menemukan barang yang
                            Anda butuhkan.
                            Jadikanlah momen belanja sepatu online Anda menjadi aktifitas yang menyenangkan dengan
                            E-Haikyuu!. Nantikan promo terbesar dan terbanyak yang akan diberikan oleh E-Haikyuu! saat
                            Harbolnas mendatang. Temukan ribuan brand lokal dan internasional untuk melengkapi kebutuhan
                            sepatu Anda.
                            Apapun alasan Anda, nikmati gratis 30 hari pengembalian dengan mudah di seluruh Indonesia.
                            E-Haikyuu! memberikan jaminan produk 100% asli & berkualitas serta pengalaman belanja fashion
                            online terbaik.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-4">1 review untuk "Forum 84 Low Classic"</h4>
                                <div class="media mb-4">
                                    <img src="sepatu/img/leo.jpg" alt="Image" class="img-fluid mr-3 mt-1"
                                        style="width: 45px;">
                                    <div class="media-body">
                                        <h6>Leo Tsukinaga<small> - <i>28 Jan 2023</i></small></h6>
                                        <div class="text-primary mb-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p>Keren banget sis sepatu nya! Saya beli dua, satunya buat pacar saya namanya
                                            Rintan hehe :D Bakalan sering-sering beli disini deh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="mb-4">Sampaikan review</h4>
                                <small>Alamat email Anda tidak akan dipublikasikan. Bidang yang wajib diisi ditandai
                                    *</small>
                                <div class="d-flex my-3">
                                    <p class="mb-0 mr-2">Rating Anda * :</p>
                                    <div class="text-primary">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label for="message">Review Anda*</label>
                                        <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Nama *</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="submit" value="Submit" class="btn btn-primary px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
            <div class="row px-xl-5 pt-5">
                <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                    <a href="" class="text-decoration-none">
                        <h1 class="mb-4 display-5 font-weight-semi-bold"><span
                                class="text-primary font-weight-bold border border-white px-3 mr-1">E</span>Haikyuu!</h1>
                    </a>
                    <p>Haikyuu adalah toko sepatu online yang menyajikan banyak jenis sepatu
                        dari sports, work, casual dan heels.</p>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        {{-- <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i
                                    class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our
                                Shop</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop
                                Detail</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping
                                Cart</a>
                            <a class="text-dark mb-2" href="checkout.html"><i
                                    class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact
                                </a>
                        </div>
                    </div> --}}
                        <div class="col-md-4 mb-5">
                            <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-dark mb-2" href="{{ url('/') }}"><i
                                        class="fa fa-angle-right mr-2"></i>Home</a>
                                <a class="text-dark mb-2" href="{{ url('about') }}"><i
                                        class="fa fa-angle-right mr-2"></i>About</a>
                                <a class="text-dark mb-2" href="{{ url('product') }}"><i
                                        class="fa fa-angle-right mr-2"></i>Product</a>
                                <a class="text-dark mb-2" href="c{{ url('dashboard') }}"><i
                                        class="fa fa-angle-right mr-2"></i>Admin</a>
                                <a class="text-dark" href="{{ url('contact') }}"><i
                                        class="fa fa-angle-right mr-2"></i>Contact
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-8">
                            <h5 class="font-weight-bold text-dark mb-4">Hubungi</h5>
                            <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Margonda, Depok</p>
                            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>haikyuu@exsamp.com</p>
                            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row border-top border-light mx-xl-5 py-4">
                <div class="col-md-6 px-xl-0">
                    <p class="mb-md-0 text-center text-md-left text-dark">2022-2023
                        &copy; <a class="text-dark font-weight-semi-bold" href="#">E-Haikyuu!</a>. All Rights
                        Reserved. Designed
                        by
                        <a class="text-dark font-weight-semi-bold" href="https://nurulfikri.ac.id">Mahasiswa STT-NF
                        </a><br>
                    </p>
                </div>
                <div class="col-md-6 px-xl-0 text-center text-md-right">
                    <img class="img-fluid" src="sepatu/img/payments.png" alt="">
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

    </html>
@endsection
