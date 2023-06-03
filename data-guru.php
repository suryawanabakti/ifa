<?php include_once "partials/header.php" ?>
<?php
$dataGuru = mysqli_query($koneksi, "SELECT * FROM guru");
?>
<div class="container mt-1" style="width: 70%;">
</div>

<div class="container mb-5 mt-1">
    <div class="row">
        <?php while ($guru = mysqli_fetch_array($dataGuru)) : ?>
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                    <img class="card-img-top" src="../assets/img/elements/2.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title"><?= $guru['nama_lengkap'] ?></h5>
                        <p class="card-text">
                            <span class="fw-bold">Alamat</span> : <?= $guru['alamat'] ?> <br>
                            <span class="fw-bold">Tempat Lahir</span> : <?= $guru['alamat'] ?> : <?= $guru['tempat_lahir'] ?> <br>
                            <span class="fw-bold"> Tanggal Lahir</span> : <?= $guru['tanggal_lahir'] ?> <br>
                            <span class="fw-bold">Agama :</span> <?= $guru['agama'] ?> <br>
                        </p>
                    </div>
                </div>
            </div>
        <?php endwhile;  ?>
    </div>
</div>

<?php include "partials/footer.php" ?>