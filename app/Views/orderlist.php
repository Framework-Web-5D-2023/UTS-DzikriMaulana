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
    <!-- ... (kode lainnya) ... -->
    <style>
        .card {
            height: 100%;
            margin-top: 20px;
            margin-bottom: 20px;
        }


        .card-body {
            height: 100%;
            display: flex;
            flex-direction: column;
            margin: 50px;
        }

        .card-title,
        .card-text {
            flex-grow: 1;
        }
    </style>


</head>

<body>
    <div class="hero-area">
        <?= $this->include('header') ?>


        <div class="container mt-5" style="margin-top: 80px;"> <!-- Tambahkan style="margin-top: 80px;" di sini -->
            <br><br>
            <?php if (session()->has('order_created')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Pesanan dibuat</strong> dan akan dikirim dalam 1x24 jam dengan metode pembayaran cod
                </div>
            <?php endif; ?>



            <div class="row">
                <div class="col-md-12">
                    <?php if (empty($data)): ?>
                        <p>Anda belum membuat pesanan, silahkan lihat product dan lakukan pemesanan.</p>
                    <?php else: ?>
                        <h1>Daftar Pesanan Anda</h1>
                        <div class="row">
                            <?php foreach ($data as $order): ?>
                                <div class="col-md-8 mb-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Detail Pesanan</h5>
                                            <table>
                                                <tr>
                                                    <td>ID Produk</td>
                                                    <td>
                                                        :
                                                        <?= $order['id_product'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Barang</td>
                                                    <td>
                                                        :
                                                        <?= $order['nama'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah</td>
                                                    <td>
                                                        :
                                                        <?= $order['jumlah'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat Pengiriman</td>
                                                    <td>
                                                        :
                                                        <?= $order['alamat'] ?>
                                                    </td>
                                                </tr>
                                                <?php if (isset($order['jumlahbayar'])): ?>
                                                    <tr>
                                                        <td>Jumlah Bayar</td>
                                                        <td>: Rp
                                                            <?= number_format($order['jumlahbayar'], 0, ',', '.') ?>
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
    </div>


</body>

</html>