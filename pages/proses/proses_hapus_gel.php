<?php
include ('../../koneksi.php');
$id = $_GET('id');

$_id = mysqli_real_escape_string($koneksi ,$id);

$result =mysqli_query($koneksi, "DELETE FROM tbl_gel WHERE id = '$id");
$cek = mysqli_affected_rows ($koneksi);

if ($cek > 0){
   echo "<script>
   alert ('BERHASIL DI HAPUS');
   </script>";
   header("location:../input_gelombang.php");
}
?>