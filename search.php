<?php
include "Praktek13-1.php";
$id=$_POST['caritau'];

 $sql = "SELECT * FROM mobil WHERE `id_Mobil`='$id'";
   $exe = mysql_query($sql);
   echo "<table>\n";
   while($line = mysql_fetch_array($exe, MYSQL_NUM)){
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
     echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
   }
   echo "</table>\n";


?>