<?php
    include "connect.php";
    $mode = mysqli_query($Connect,"select * from Max");
    $data_mode = mysqli_fetch_array($mode);
    $mode_absen= $data_mode['Maxparking'];
    if($mode_absen >=18 ){
        echo "max";
    }
    else{
        $mode_absen=$mode_absen+1;
        $simpan= mysqli_query($Connect, "update Max set Maxparking='$mode_absen'");
        echo "ok";
    }
?>