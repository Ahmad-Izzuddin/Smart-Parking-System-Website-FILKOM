<?php
    include "connect.php";
    $baca_kartu = mysqli_query($Connect, "select * from rfid");
    $data_kartu =mysqli_fetch_array($baca_kartu);
    $no_kartu= $data_kartu['No_Kartu'];
?>
<?php 
        $cari_nama = mysqli_query($Connect,"select * from daftarnama where No_Kartu='$no_kartu'");
        $jumlah_data= mysqli_num_rows($cari_nama);
        if($jumlah_data==0){
            echo "none";
        }
        else{
            echo "yes";
        }
        mysqli_query($Connect,"delete from rfid");
    ?>