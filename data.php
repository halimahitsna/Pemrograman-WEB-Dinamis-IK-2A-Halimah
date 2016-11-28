<!DOCTYPE html>
<?php
mysql_connect("localhost","root",""); 
mysql_select_db("user1"); 

$query = mysql_query("SELECT `id_prop`, `prop` FROM `prop`"); 
?>

<html>
<head>
<script> 
var drz, kata, x; 
function cekuser(){ 
    kata = document.getElementById("username").value; 
    if(kata.length>2){ 
        document.getElementById("teks").innerHTML = "checking..."; 
        drz = buatajax(); 
        var url="cekusername.php"; 
        url=url+"?q="+kata; 
        url=url+"&sid="+Math.random(); 
        drz.onreadystatechange=stateChanged; 
        drz.open("GET",url,true); 
        drz.send(null); 
    }else{ 
        fokus(); 
         } 
} 

function ceknama(){ 
    nama = document.getElementById("namalengkap").value; 
    if(nama.length>2){ 
        document.getElementById("teks2").innerHTML = "checking..."; 
        drz = buatajax(); 
        var url="ceknama.php"; 
        url=url+"?w="+nama; 
        url=url+"&sid="+Math.random(); 
        drz.onreadystatechange=stateChanged2; 
        drz.open("GET",url,true); 
        drz.send(null); 
    }else{ 
        fokus2(); 
         } 
} 

function cekusia(){ 
    umur = document.getElementById("usia").value; 
    if(umur.length>0){ 
        document.getElementById("teks3").innerHTML = "checking..."; 
        drz = buatajax(); 
        var url="cekusia.php"; 
        url=url+"?r="+umur; 
        url=url+"&sid="+Math.random(); 
        drz.onreadystatechange=stateChanged3; 
        drz.open("GET",url,true); 
        drz.send(null); 
    }else{ 
        fokus3(); 
         } 
} 

function cek_kec(){ 
    kec = document.getElementById("prop").value; 
    if(kec.length>0){ 
        document.getElementById("teks4").innerHTML = "checking..."; 
        drz = buatajax(); 
        var url="cek_kab.php"; 
        url=url+"?s="+kec; 
        url=url+"&sid="+Math.random(); 
        drz.onreadystatechange=stateChanged4; 
        drz.open("GET",url,true); 
        drz.send(null); 
    }else{ 
        fokus4(); 
         } 
} 



function buatajax(){ 
    if (window.XMLHttpRequest){ 
        return new XMLHttpRequest(); 
    } 
    if (window.ActiveXObject){ 
        return new ActiveXObject("Microsoft.XMLHTTP"); 
    } 
    return null; 
} 
 

function stateChanged(){ 
var data; 
    if (drz.readyState==4){ 
        data=drz.responseText; 
        document.getElementById("teks").innerHTML = data; 
    } 
} 

function stateChanged4(){ 
var data; 
    if (drz.readyState==4){ 
        data=drz.responseText; 
        document.getElementById("teks4").innerHTML = data; 
    } 
} 
function stateChanged2(){ 
var data; 
    if (drz.readyState==4){ 
        data=drz.responseText; 
        document.getElementById("teks2").innerHTML = data; 
    } 
} 

function stateChanged3(){ 
var data; 
    if (drz.readyState==4){ 
        data=drz.responseText; 
        document.getElementById("teks3").innerHTML = data; 
    } 
} 

function fokus(){ 
    document.getElementById("username").focus(); 
} 

function fokus2(){ 
    document.getElementById("namalengkap").focus(); 
}

function fokus3(){ 
    document.getElementById("usia").focus(); 
}  


function fokus4(){ 
    document.getElementById("prop").focus(); 
}  

</script> 
</head>
<body>
<form> 
<center><h3>Form Data</h3>
    <table>
        <tr><td>Username</td>
            <td>:</td>
            <td><input type=text name=username id=username onblur=cekuser()></td>
            <td><span id=teks style="color:red;font-size:8pt"></span></td>
        </tr>
        <tr><td>Nama Lengkap</td>
            <td>:</td>
            <td><input type=text name=namalengkap id=namalengkap onblur=ceknama()></td>
            <td><span id=teks2 style="color:red;font-size:8pt"></span></td>
        </tr>
        <tr><td>Usia</td>
            <td>:</td>
            <td><input type=text name=usia id=usia onblur=cekusia()></td>
            <td><span id=teks3 style="color:red;font-size:8pt"></span></td>
        </tr>
        <tr><td>Provinsi</td>
            <td>:</td>
            <td>
<?php 
    if(mysql_num_rows($query)>0){
    echo "<select name='prop' id='prop' onchange=cek_kec()>";
    echo "<option value='0'>Pilih<br>";
    while($row=mysql_fetch_array($query))
    {
        echo "<option value='$row[0]'>$row[1]<br>";
    }
    echo "</select>";
    }
?> Kabupaten<td>
<span id=teks4 style="color:red;font-size:8pt"></span> <br> 
</form> 
</body>
</html>