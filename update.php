<?php
include "Praktek13-1.php";

if(isset($_POST['edit']))
{
//$cek=$_POST['id_edit'];
$id=$_POST['id_mobil'];
$mrk=$_POST['merk'];
$mdl=$_POST['model'];
$pin=$_POST['pintu'];
$tip=$_POST['tipe'];
$thn=$_POST['th_pro'];
$neg=$_POST['neg_pem'];
$jns=$_POST['jns_pro'];
$query1=mysql_query("UPDATE mobil SET id_mobil='$id'],
					Merk='$mrk',Model='$mdl',Pintu='$pin',Tipe='$tip',
					Tahun_Produksi='$thn',Negara_Pembuat='$neg',Jenis_Produksi='$jns' WHERE id_mobil='$id'");
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
<head><title>update data</title></head>
<body>
  <form method='POST' action=''>
   
  <br>
 <?php
  
  echo "<table>

    <tr>
      <td>id mobil</td><td>:</td><td><input type='text' name='id_mobil'></td></tr>
    <tr>
      <td>Merk</td><td>:</td><td><input type='text' name='merk'></td></tr>
    <tr>  
      <td>Model</td><td>:</td><td><input type='text' name='model'></td></tr>
    <tr>
      <td>Pintu</td><td>:</td><td><input type='text' name='pintu'></td></tr>
    <tr>
      <td>Tipe</td><td>:</td><td><input type='text' name='tipe'></td></tr>
    <tr>
      <td>Tahun Produksi</td><td>:</td><td><input type='text' name='th_pro'></td></tr>
    <tr>
      <td>Negara Pembuat</td><td>:</td><td><input type='text' name='neg_pem'></td></tr>
    <tr>
      <td>Jenis Produksi</td><td>:</td><td><input type='text' name='jns_pro'></td></tr>
    <tr>
      <td></td><td></td><td><input type='submit' name='edit' value='Edit Data'></td>
    </tr>
  </table>";
		
  ?>
  
</form>
</body>
</html>