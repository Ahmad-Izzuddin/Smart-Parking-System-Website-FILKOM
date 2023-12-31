<?php
include "connect.php";
$No_Kartu = $_GET['No_Kartu'];
mysqli_query($Connect,"delete from rfid");

$simpan=mysqli_query($Connect,"insert into rfid(No_Kartu) values ('$No_Kartu')");
if($simpan){
    echo "Berhasil yeee";
}
else{
    echo "Babi";
}
?>
