<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($host,"DELETE FROM user WHERE id='$id'")or die(mysql_error($host));

header("location:index.php?pesan=hapus");
?>