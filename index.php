<?php
    require "koneksi.php";
    $queryProduk = mysqli_query($con, "SELECT id, nama, harga, foto, detail FROM produk LIMIT 6");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online | Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require "navbar.php"; ?>

    <!-- banner -->
    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-center text-white">
            <h1>Toko Online</h1>
            <h3>Mau Cari Apa?</h3>
            <div class="col-md-8 offset-md-2">
                <form method="get" action="produk.php">
                    <div class="input-group input-group-lg my-4">
                        <input type="text" class="form-control" placeholder="Nama Barang" 
                        aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
                        <button type="submit" class="btn warna3 text-white">Telusuri</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- highlighted kategori -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Kategori Terlaris</h3>

            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-produk d-flex justify-content-center 
                    align-items-center">
                        <h4 class="text-white">
                            <a href="produk.php/kategori=parfum" class="no-decoration">Produk</a>
                        </h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-produk d-flex justify-content-center 
                    align-items-center">
                        <h4 class="text-white">
                            <a href="produk.php/kategori=parfum" class="no-decoration">Produk</a>
                        </h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-produk d-flex justify-content-center 
                    align-items-center">
                        <h4 class="text-white">
                            <a href="produk.php/kategori=parfum" class="no-decoration">Produk</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tentang kami -->
    <div class="container-fluid warna4 py-5">
        <div class="container text-center">
            <h3>Tentang Kami</h3>
            <p class="fs-5 mt-3">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus harum 
                quod nemo voluptatum? Eius dicta placeat voluptate? At suscipit architecto earum
                ea veniam ratione libero cumque laboriosam qui expedita vel necessitatibus nesciunt 
                aut, eos quasi facilis accusamus ullam commodi corrupti quos blanditiis numquam nemo 
                modi! Vitae voluptates maiores tenetur culpa aspernatur, in porro sunt magnam ipsum 
                laborum earum reiciendis. Illo quis numquam nesciunt iusto. Est quisquam facere quas,
                neque rem, natus sapiente iusto sit amet dignissimos maxime omnis, ipsa eveniet?
            </p>
        </div>
    </div>

    <!-- produk -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Produk</h3>

            <div class="row mt-5">
            <?php while($data = mysqli_fetch_array($queryProduk)){ ?>
                <div class="col-sm-6 col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="image-box">
                            <img src="image/<?php echo $data['foto']; ?>" class="card-img-top" alt="">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $data['nama']; ?></h4>
                            <p class="card-text text-truncate"><?php echo $data['detail']; ?>
                            </p>
                            <p class="card-text text-harga">Rp <?php echo $data['harga']; ?></p>
                            <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>" class="btn warna2 
                            text-white">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <a href="produk.php" class="btn btn-outline-light warna2 mt-3">See More</a>
        </div>
    </div>

    <!-- footer -->
    <?php require "footer.php"; ?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>