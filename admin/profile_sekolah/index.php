<?php include_once "../partials/header.php" ?>
<?php
$profileSekolah = mysqli_query($koneksi, "SELECT * FROM profile_sekolah LIMIT 1");
$profileSekolah = mysqli_fetch_array($profileSekolah);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card my-5">
                <form class="card-body p-lg-5" style="background-color: #ebf2fa;" action="update.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Sekolah</label>
                        <input type="text" class="form-control" name="nama_sekolah" id="name" value="<?= $profileSekolah['nama_sekolah'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Alamat Sekolah</label>
                        <input type="text" class="form-control" name="alamat" id="name" value="<?= $profileSekolah['alamat'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Deskripsi Sekolah</label>
                        <input type="text" class="form-control" name="deskripsi" id="name" value="<?= $profileSekolah['deskripsi'] ?>">
                    </div>

                    <button class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>


</div>
<?php include "../partials/footer.php" ?>