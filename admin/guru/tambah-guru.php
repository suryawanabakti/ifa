<?php

include "../../koneksi.php";

$nama = $_POST['nama_lengkap'];
$nip = $_POST['nip'];
$alamat = $_POST['alamat'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$agama = $_POST['agama'];
$telepon = $_POST['telepon'];
$pendidikan = $_POST['pendidikan'];

// $name = $_FILES['file']['name'];

// $target_dir = "upload/";
// $target_file = $target_dir . basename($_FILES["file"]["name"]);

// // Select file type
// $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// // Valid file extensions
// $extensions_arr = array("jpg", "jpeg", "png", "gif");

// Check extension
$sql = "INSERT INTO guru (nip, nama_lengkap,alamat,tempat_lahir,tanggal_lahir,agama, telepon, pendidikan) values('$nip','$nama','$alamat','$tempat_lahir','$tanggal_lahir','$agama', '$telepon' , '$pendidikan')";

$query = mysqli_query($koneksi, $sql);
// if (in_array($imageFileType, $extensions_arr)) {
//     if (move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $name)) {
//         // Insert record

//     }
// }






if ($query) {
    echo "<script> alert('Berhasil tambah guru');window.location = '/admin/guru'; </script>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
