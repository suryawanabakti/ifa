<?php
include "../../koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM guru WHERE id = $id";

$query = mysqli_query($koneksi, $sql);


if ($query) {
    echo "<script> alert('Berhasil hapus guru');window.location = '/admin/guru'; </script>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
