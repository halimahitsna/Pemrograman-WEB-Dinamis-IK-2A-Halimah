<html>
<head>
<title>Koneksi ke MySQL</title>
</head>
<body>
<?php
//connecting, selecting database
$link= mysql_connect('localhost','root','') or die('could not connect : '.mysql_error());
//echo "Connected seccesfully";
mysql_select_db('ShowRoomMobil') or die('Could not select database');
?>
</body>
</html>