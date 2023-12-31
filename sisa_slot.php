<!DOCTYPE html>
<?php
    include "connect.php";
    $mode = mysqli_query($Connect,"select * from Max");
    $data_mode = mysqli_fetch_array($mode);
    $mode_absen= $data_mode['Maxparking'];
    $Sisa=18-$mode_absen;
?>
<html>
<head>
  <title>Halaman Utama</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    h1 {
      margin: 0;
      font-size: 24px;
    }
    .nav-links {
      margin-top: 20px;
    }
    .nav-links a {
      color: #fff;
      text-decoration: none;
      margin-right: 20px;
    }
    .nav-links a:hover {
      text-decoration: underline;
    }
    .content {
      text-align: center;
      margin-top: 50px;
    }
    img {
      width: 100%;
      height: auto;
    }
  </style>
</head>
<body>
  <header>
    <h1>Sisa Slot</h1>
    <div class="nav-links">
      <a href="Haldepan.php">Halaman Utama</a>
      <a href="live_report.php">Live Report</a>
    </div>
  </header>

  <div class="content">
  <h1>Sisa Slot: <?php echo $Sisa; ?></h1>
  </div>

</body>
</html>
