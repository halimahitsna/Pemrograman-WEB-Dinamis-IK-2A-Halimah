<?php
mysql_connect("localhost","root",""); //{user dan password disesuaikan}
mysql_select_db("data_kampus");
$n1 = $_POST['nim'];
$n2 = $_POST['nama'];
$n3 = $_POST['kelas'];
$n4 = $_POST['jur'];
$n5 = $_POST['prodi'];

$sql= "INSERT INTO `mhs`(`nim`, `nama_mhs`, `kls`, `jur`, `prodi`) VALUES ('$n1','$n2','$n3','$n4','$n5')";
$query=mysql_query($sql);

header("location: http://localhost/template/index.php?page=content");
?>