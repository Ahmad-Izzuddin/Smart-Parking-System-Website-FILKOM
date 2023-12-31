<?php
include "connect.php";
if(isset($_POST['ButSimpan'])){
    $No_Kartu=$_POST['No_Kartu'];
    $Nama= $_POST['Nama'];
    $Nim= $_POST['Nim'];
    $simpan = mysqli_query($Connect,"insert into daftarnama(No_Kartu,Nama,Nim)
    values ('$No_Kartu','$Nama','$Nim')");
    if($simpan){
        echo"
        <script>
        alert('Nama Tersimpan');
        location.replace('datapiket.php');
        </script>
        ";
    }
    else{
        echo"
        <script>
        alert('Gagal Tersimpan');
        location.replace('datapiket.php');
        </script>
        ";
    }

}
mysqli_query($Connect,'delete from rfid');
?>




<!DOCTYPE html>
<html>
    <head>
        <?php include "header.php";?>
        <title>Tambah Data Mahasiswa</title>
        <script type="text/javascript">
            $(document).ready(function(){
                setInterval(function(){
                    $("#norfid").load('nokartu.php')
                },1000);
            });
        </script>
    </head>
    <body>
        <?php include "menu.php";?>
        <div class="container-fluid">
            <h3>Tambah Data Mahasiswa</h3>
            <form method="POST">
                <div id="norfid"></div>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="Nama" id="Nama" placeholder
                    ="Nama" class="form-control">
                    <label>Nim</label>
                    <input type="text" name="Nim" id="Nim" placeholder
                    ="Nim" class="form-control">
                </div>
                <button class="btn btn-primary" name="ButSimpan" id="ButSimpan">Simpan</button>
            </form>
        </div>
        <?php include "footer.php";?>
    </body>
</html>