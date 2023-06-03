<?php
include "../../koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM siswa WHERE id = $id";

$query = mysqli_query($koneksi, $sql);


if ($query) {
    echo "<script> alert('Berhasil hapus siswa');window.location = '/admin/siswa'; </script>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
