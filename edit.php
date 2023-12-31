<?php
include "connect.php";

$id=$_GET['id'];
$cari=mysqli_query($Connect,"select * from daftarnama where Id='$id'");
$hasil=mysqli_fetch_array($cari);

if(isset($_POST['ButSimpan'])){
    $No_Kartu=$_POST['No_Kartu'];
    $Nama= $_POST['Nama'];
    $Nim= $_POST['Nim'];
    $simpan = mysqli_query($Connect,"update daftarnama set No_Kartu='$No_Kartu',
    Nama='$Nama',Nim='$Nim' where Id='$id'");
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
?>


<!DOCTYPE html>
<html>
    <head>
        <?php include "header.php";?>
        <title>Edit Data</title>
    </head>
    <body>
        <?php include "menu.php";?>
        <div class="container-fluid">
            <form method="POST">
                <div class="form-group">
                    <label>No Kartu</label>
                    <input type="text" name="No_Kartu" id="No_Kartu" placeholder
                    ="No Kartu RFID" class="form-control" value="<?php echo $hasil['No_Kartu']; ?>">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="Nama" id="Nama" placeholder
                    ="Nama" class="form-control" value="<?php echo $hasil['Nama']; ?>">
                </div>
                <div class="form-group">
                    <label>Nim</label>
                    <input type="text" name="Nim" id="Nim" placeholder
                    ="Nim" class="form-control" value="<?php echo $hasil['Nim']; ?>">
                </div>
                <button class="btn btn-primary" name="ButSimpan" id="ButSimpan">Simpan</button>
            </form>
        </div>
        <?php include "footer.php";?>
    </body>
</html>