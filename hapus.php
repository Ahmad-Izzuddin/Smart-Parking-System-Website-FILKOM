<?php include "connect.php";
$id =$_GET['id'];
$hapus =mysqli_query($Connect,"delete from daftarnama where Id='$id'");
if($hapus){
    echo "
    <script>
    alert('Terhapus');
    location.replace('datapiket.php');
    </script>
    ";
}
else{
    echo "
    <script>
    alert('Gagal Terhapus');
    location.replace('datapiket.php');
    </script>
    ";
}
?>