<html>
<head><title>Form Operasi Database</title>
</head>
<body>
  <center><h2>Pilih Menu Operasi Pada Database</h2>
<table>
<?php
include "Praktek13-1.php";

$query='SELECT * FROM mobil order by id_mobil';
$result=mysql_query($query) or die('Query failed : '.mysql_error());
$no=1;

//printing result in html
echo "<form method='POST' action=''>
<br>Cari Data <input type='text' name='id_cari'> <input type='submit' name='cari' value='Cari'>
<br><br></form>";
    echo "<table border='1px'>  
    <tr align='center' bgcolor='f5f4567'>
    <td>id mobil</td>
    <td>Merk</td>
    <td>Model</td>
    <td>Tipe</td><td>Pintu</td>
    <td>Tahun Produksi</td>
    <td>Negara Pembuat</td>
    <td>Jenis Produksi</td></tr>";
while ($line=mysql_fetch_array($result, MYSQL_ASSOC)) {
 /* # code...
  echo "\t<tr>";
  foreach ($line as $col_value) {
    # code...
    echo "\t\t<td align='center'>$col_value</td>";  
  }
  echo "<td><a href='update.php?$col_value[id_mobil]'><input type='submit' name='update' value='Update'>
            <a href='delete.php'><input type='submit' name='delete' value='Delete'>
        </td>";
  echo "\t</tr>";
}*/
echo "<tr>
        <td>".$line['id_mobil']."</td>
        <td>".$line['Merk']."</td>
        <td>".$line['Model']."</td>
        <td>".$line['Tipe']."</td>
        <td>".$line['Pintu']."</td>
        <td>".$line['Tahun_Produksi']."</td>
        <td>".$line['Negara_Pembuat']."</td>
        <td>".$line['Jenis_Produksi']."</td><tr>";
$no++;
}
echo "</table>";
echo "<br> <p align='center'>
    <a href='tambah.php'><input type='submit' name='tambah' value='Tambah Data'>
    <a href='update.php'><input type='submit' name='edit' value='Edit Data'>
    <a href='delete.php'><input type='submit' name='delete' value='Hapus Data'>
    
    </p>
    <br><br>";

//free resulttest
mysql_free_result($result);


?>

</table>
<?php
if(isset($_POST['cari'])){
$id=$_POST['id_cari'];

 $sql = "SELECT * FROM mobil WHERE `id_Mobil`='$id'";
   $exe = mysql_query($sql);
   echo "Hasil Pencarian : <br><br>";
   echo "<table>";
   while($line = mysql_fetch_array($exe, MYSQL_NUM)){
    echo "<tr>";
    foreach ($line as $col_value) {
     echo "<td>$col_value</td>\n";
    }
    echo "</tr>";
   }
   echo "</table>";
}
?>
</center>
</body>
</html>

