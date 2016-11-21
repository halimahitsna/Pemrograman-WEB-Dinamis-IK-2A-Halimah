<?php
include "Praktek13-1.php";

if(isset($_POST['insert']))
{
$id=$_POST['id_mobil'];
$mrk=$_POST['merk'];
$mdl=$_POST['model'];
$pin=$_POST['pintu'];
$tip=$_POST['tipe'];
$thn=$_POST['th_pro'];
$neg=$_POST['neg_pem'];
$jns=$_POST['jns_pro'];
$query1=mysql_query("INSERT INTO mobil(id_mobil,Merk,Model,Pintu,Tipe,Tahun_Produksi,Negara_Pembuat,Jenis_Produksi) VALUES ('$id','$mrk','$mdl','$pin','$tip','$thn','$neg','$jns')");
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
<head><title>tambah data</title></head>
<body>
  <form method='POST' action=''>
   
  <br>
  Form Tambah Data <br>
  <table>

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
      <td></td><td></td><td><input type='submit' name='insert' value='Tambah Data'></td>
    </tr>
  </table>
</form>
</body>
</html>