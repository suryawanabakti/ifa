<?php include_once "partials/header.php" ?>

<div class="container mt-1" style="width: 70%;">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/slide-3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>SMAN 18 Makassar</h5>
                    <p>
                        Sekolah Mengengah Atas Negri 18 Makassar
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/slide-4.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container mb-5 mt-1">
    <div class="row" style="text-align: justify;">
        <div class="col-md-12">
            <?= $profileSekolah['deskripsi'] ?>
        </div>
        <div class="col-md-12 mt-2">
            <small> <?= $profileSekolah['alamat'] ?></small>
        </div>
    </div>


    <div class="row mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center fw-bold">Total Guru</h5>
                    <div class="card-text text-center">
                        <img src="/image/guru.jpg" alt="" width="400px">
                        <h3 class="mt-3"><?= $countGuru['jumlah'] ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center fw-bold">Total Siswa</h5>
                    <div class="card-text text-center">
                        <img src="/image/siswa.jpg" alt="" width="400px">
                        <h3 class="mt-3"><?= $countSiswa['jumlah'] ?></h3>
                    </div>
                </div>
            </div>
        </div>


        <h1 class="fw-bolder text-center mt-5 text-warning">PROGRAM DAN UNGGULAN</h1>


    </div>

</div>

<?php include "partials/footer.php" ?>