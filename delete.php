<?php
include "Praktek13-1.php";

if(isset($_POST['hapus']))
{
$id=$_POST['id_hapus'];
$mrk=$_POST['merk'];
$mdl=$_POST['model'];
$pin=$_POST['pintu'];
$tip=$_POST['tipe'];
$thn=$_POST['th_pro'];
$neg=$_POST['neg_pem'];
$jns=$_POST['jns_pro'];
$query1=mysql_query("DELETE FROM mobil WHERE id_mobil = '$id'");
//echo "insert into addd values('','$name','$age')";
if($query1)
{
  echo "Query berhasil dieksekusi";
header("location:soal2.php");
}else{
  echo "Query gagal dieksekusi";
}
}


?>
<html>
<body>
<form method="POST" action="">
	Masukkan id_mobil yang akan dihapus : <br>
	id_mobil : <input type="text" name="id_hapus"><br><br>
	<input type="submit" name="hapus" value="Hapus Data"> 
</body>
</html>