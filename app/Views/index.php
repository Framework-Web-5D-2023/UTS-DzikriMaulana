<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="assets/images/fevicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Dzikrizop</title>


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

    <!-- font awesome style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="assets/css/responsive.css" rel="stylesheet" />

</head>

<body>

    <div class="hero_area">
        <!-- header -->
        <?= $this->include('header') ?>

        <!-- slider section -->
        <section class="slider_section long_section">
            <div id="customCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="detail-box">
                                        <h1>
                                            Furniture elegan untuk rumah Anda
                                        </h1>
                                        <p>
                                            Rumah Anda adalah tempat yang paling Anda cintai. Tempat di mana Anda
                                            menghabiskan waktu bersama keluarga dan teman-teman. Tempat di mana Anda
                                            bersantai dan melepas penat.
                                        </p>
                                        <div class="btn-box">
                                            <a href="/product" class="btn1">
                                                Mulai Belanja
                                            </a>
                                            <a href="/about" class="btn2">
                                                Tentang Kami
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="img-box">
                                        <img src="assets/images/slider-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="detail-box">
                                        <h1>
                                            Dzikrizop: Furniture yang nyaman dan elegan
                                        </h1>
                                        <p>
                                            Kami menawarkan furniture berkualitas dengan harga terjangkau. Dari sofa,
                                            meja,
                                            kursi, lemari, hingga tempat tidur, kami punya semuanya untuk Anda.
                                        </p>
                                        <div class="btn-box">
                                            <a href="/product" class="btn1">
                                                Mulai Belanja
                                            </a>
                                            <a href="/about" class="btn2">
                                                Tentang Kami
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="img-box">
                                        <img src="assets/images/slider-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="detail-box">
                                        <h1>
                                            Furniture untuk semua orang, dari semua gaya
                                        </h1>
                                        <p>
                                            Apa pun gaya rumah Anda, kami punya furniture yang cocok untuk Anda. Dari
                                            modern,
                                            klasik, minimalis, hingga vintage, kami memiliki pilihan yang beragam dan
                                            menarik.
                                        </p>
                                        <div class="btn-box">
                                            <a href="/product" class="btn1">
                                                Mulai Belanja
                                            </a>
                                            <a href="/about" class="btn2">
                                                Tentang Kami
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="img-box">
                                        <img src="assets/images/slider-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#customCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#customCarousel" data-slide-to="1"></li>
                    <li data-target="#customCarousel" data-slide-to="2"></li>
                </ol>
            </div>
        </section>

        <!-- end slider section -->
    </div>

    <!-- furniture section -->

    <section class="furniture_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Produk Unggulan Kami
                </h2>
            </div>
            <div class="row">

                <?php
                $i = 0;
                foreach ($data as $item) {
                    if ($i < 3) {
                        echo '<div class="col-md-6 col-lg-4">
            <div class="box">
                <div class="img-box">
                    <img src="assets/images/' . $item["imageurl"] . '" alt="' . $item["nama"] . '">
                </div>
                <div class="detail-box">
                    <h5>' . $item["nama"] . '</h5>
                    <div class="price_box">
                        <h6 class="price_heading">
                            <span>Rp</span> ' . number_format($item["harga"], 0, ',', '.') . '
                        </h6>
                        <a href="/order/' . $item['id'] . '">BUY NOW</a>
                    </div>
                </div>
            </div>
        </div>';
                        $i++; // Tambahkan 1 ke variabel penanda jumlah item yang sudah ditampilkan
                    }
                }
                ?>




            </div>
        </div>
    </section>

    <div class="btn-box text-center">
        <a href="/product" class="btn1"
            style="color: white; background-color: #88d4cc; border: 2px solid #88d4cc; padding: 5px 10px;">
            Lebih banyak? ...
        </a>
    </div>

    </div>

    <br><br>



    <!-- end furniture section -->


    <!-- jQery -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="assets/js/custom.js"></script>

</body>

</html>