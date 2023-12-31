<?php
include "connect.php";
$sql = mysqli_query($Connect,"select * from rfid");
$data = mysqli_fetch_array($sql);
$No_Kartu = $data['No_Kartu'];

?>
<div class="form-group">
    <label>No Kartu</label>
    <input type="text" name="No_Kartu" id="No_Kartu" placeholder
    ="Tempelkan Kartu RFID" class="form-control" value="<?php echo $No_Kartu; ?>">
</div>