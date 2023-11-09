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

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" />

    <!-- Google Fonts (Poppins) -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

    <!-- Font Awesome CSS -->
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet" />

    <!-- Responsive styles -->
    <link href="../assets/css/responsive.css" rel="stylesheet" />
    <style>
        .card img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="/save" method="post">
                        <input type="hidden" name="id_product" value="<?= $detail['id'] ?>">
                        <input type="hidden" name="nama" value="<?= $detail['nama'] ?>">
                        <input type="hidden" name="harga" value="<?= $detail['harga'] ?>">



                        <div class="form-group">
                            <div class="text-center">
                                <img src="../assets/images/<?= $detail['imageurl'] ?>" alt="<?= $detail['nama'] ?>">
                            </div>
                            <br>
                            <p>
                                <?= $detail['nama'] ?>
                            </p>
                            <p>Harga: Rp
                                <?= number_format($detail['harga'], 0, ',', '.') ?>
                            </p>
                            <p>Merek:
                                <?= $detail['merek'] ?>
                            </p>

                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah:</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" required min="1">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Pengiriman:</label>
                            <textarea class="form-control" id="alamat" name="alamat" required
                                style="resize: none;"></textarea>
                        </div>


                </div>
                <button type="submit" class="btn btn-primary">Pesan</button>
                </form>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
</div>
</body>

</html>