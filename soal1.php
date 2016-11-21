<?php
//connecting, selecting database
$link= mysql_connect('localhost','root','') or die('could not connect : '.mysql_error());
echo "Connected Succesfully<br>";
mysql_select_db('ShowRoomMobil') or die('Could not select database');

//Forming SQL Query
$query='SELECT * FROM mobil';
$result=mysql_query($query) or die('Query failed : '.mysql_error());

//printing result in html
echo "<br>TAMPILAN MYSQL_BOTH<br><br>";
echo "<table border='1px'>
		<tr align='center' bgcolor='f5f4567'>
		<td>id mobil</td>
		<td>Merk</td>
		<td>Model</td>
		<td>Tipe</td><td>Pintu</td>
		<td>Tahun Produksi</td>
		<td>Negara Pembuat</td>
		<td>Jenis Produksi</td></tr>";
while ($line=mysql_fetch_array($result, MYSQL_BOTH)) {
	# code...
	echo "\t<tr>";
	foreach ($line as $col_value) {
		# code...
		echo "\t\t<td align='center'>$col_value</td>";	
	}
	echo "\t</tr>";
}
echo "</table>";

//free resulttest
mysql_free_result($result);

//closing connection
mysql_close($link);
?>

