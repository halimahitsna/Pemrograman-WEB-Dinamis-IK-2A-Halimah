<?php
include "Praktek13-1.php";
//$link= mysql_connect('localhost','root','') or die('could not connect : '.mysql_error());
//echo "Connected seccesfully";
//mysql_select_db('ShowRoomMobil') or die('Could not select database');
$id=$_POST['id_mobil'];
$mrk=$_POST['merk'];
$mdl=$_POST['model'];
$pin=$_POST['pintu'];
$tip=$_POST['tipe'];
$thn=$_POST['th_pro'];
$neg=$_POST['neg_pem'];
$jns=$_POST['jns_pro'];
$ubah=$_POST['id_ubah'];


$sql = "UPDATE mobil SET id_mobil='$id',Merk='$mrk',Model='$mdl',Pintu='$pin',Tipe='$tip',Tahun_Produksi='$thn',
Negara_Pembuat='$neg',Jenis_Produksi='$jns' WHERE id_mobil='$id_ubah'";
 $exe=mysql_query($sql);
?>