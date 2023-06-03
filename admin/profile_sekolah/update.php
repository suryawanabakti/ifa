<?php

include "../../koneksi.php";

$namaSekolah = $_POST['nama_sekolah'];
$alamat = $_POST['alamat'];
$deskripsi = $_POST['deskripsi'];

$sql = "UPDATE profile_sekolah SET nama_sekolah='$namaSekolah' , alamat='$alamat' , deskripsi='$deskripsi' WHERE id=1";

$query = mysqli_query($koneksi, $sql);

if ($query) {
    echo "<script> alert('Berhasil update profile sekolah');window.location = '/admin/profile_sekolah'; </script>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
