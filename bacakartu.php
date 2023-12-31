<?php
    include "connect.php";
    $sql =mysqli_query($Connect,"select * from status");
    $data = mysqli_fetch_array($sql);
    $mode_absensi = $data['Mode'];
    $mode="";
    if($mode_absensi==1){
        $mode= "Masuk";
    }
    else{
        $mode= "Pulang";
    }
    $baca_kartu = mysqli_query($Connect, "select * from rfid");
    $data_kartu =mysqli_fetch_array($baca_kartu);
    $no_kartu= $data_kartu['No_Kartu'];
?>


<div class="container-fluid" style="text-align:center;">
    <?php if($no_kartu==""){ ?>
    <h3>Absen : <?php echo $mode; ?></h3>
    <h3>Tempel kartu</h3>
    <?php }
    else {
        $cari_nama = mysqli_query($Connect,"select * from daftarnama where No_Kartu='$no_kartu'");
        $jumlah_data= mysqli_num_rows($cari_nama);
        if($jumlah_data==0){
            echo "<h1>Data Tak Ditemukan</h1>";
        }
        else{
            $data_orang=mysqli_fetch_array($cari_nama);
            $nama = $data_orang['Nama'];

            date_default_timezone_set('Asia/Jakarta');
            $tanggal =date('Y-m-d');
            $jam = date('H:i:s');

            $cari_Absen = mysqli_query($Connect, "select * from data_absen where No_Kartu='$no_kartu' and Tanggal='$tanggal'");
            $jumlah_absen = mysqli_num_rows($cari_Absen);
            if($jumlah_absen==0){
                echo "<h1>Selamat Datang <br> $nama </h1>";
                mysqli_query($Connect,"insert into data_absen(No_Kartu,Tanggal,Jam_Masuk) values ('$no_kartu','$tanggal','$jam')");
                $token = "5719583930:AAF828CpvY20JeT6U4XOROQBHItM-g9u23w"; // token bot
 
                $data = [
                'text' =>"$nama datang jam $jam ",
                'chat_id' => '-945814976'  //contoh bot, group id -442697126
                ];
 
                file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );

            }
            else{
                echo "<h1>Selamat Jalan <br> $nama </h1>";
                mysqli_query($Connect,"update data_absen set Jam_Keluar='$jam' where No_Kartu='$no_kartu' and Tanggal='$tanggal'");
                $token = "5719583930:AAF828CpvY20JeT6U4XOROQBHItM-g9u23w"; // token bot
 
                $data = [
                'text' =>"$nama pergi jam $jam ",
                'chat_id' => '-945814976'  //contoh bot, group id -442697126
                ];
 
                file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
            }
        }
        mysqli_query($Connect,"delete from rfid");
    }?>
</div>