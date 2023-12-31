<?php
    include "connect.php";
    $mode = mysqli_query($Connect,"select * from status");
    $data_mode = mysqli_fetch_array($mode);
    $mode_absen= $data_mode['Mode'];
    $mode_absen=$mode_absen+1;
    if($mode_absen > 2 ){
        $mode_absen=1;
    }
    $simpan= mysqli_query($Connect, "update status set Mode='$mode_absen'");
    if($simpan){
        echo "Mantap";
    }
    else{
        echo "B4b1";
    }
?>