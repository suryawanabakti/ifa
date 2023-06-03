<?php

include "../../koneksi.php";

$nama = $_POST['nama_lengkap'];
$nisn = $_POST['nisn'];
$alamat = $_POST['alamat'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$agama = $_POST['agama'];
$kelas = $_POST['kelas'];

$sql = "INSERT INTO siswa (nisn, nama_lengkap,alamat,tempat_lahir,tanggal_lahir,agama, kelas) values('$nisn','$nama','$alamat','$tempat_lahir','$tanggal_lahir','$agama','$kelas')";

$query = mysqli_query($koneksi, $sql);

if ($query) {
    echo "<script> alert('Berhasil tambah siswa');window.location = '/admin/siswa'; </script>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
