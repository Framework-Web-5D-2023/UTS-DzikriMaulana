<!DOCTYPE html>
<html lang="en">

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
    <?= $this->include('header') ?>
    <section class="furniture_section layout_padding">
        <div class="container">
            <div class="row">

                <?php
                foreach ($data as $item) {
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
                }
                ?>

            </div>
        </div>
    </section>

    <!-- jQery -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="assets/js/custom.js"></script>
</body>

</html>