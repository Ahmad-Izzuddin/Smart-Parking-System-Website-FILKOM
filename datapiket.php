<!DOCTYPE html>
<html>
    <head>
        <?php include "header.php"; ?>
        <title>Data Mahasiswa</title>
    </head>
    <body>
        <?php include "menu.php"; ?>
        <div class="container-fluid">
            <h3>Data Mahasiswa</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>No Kartu</th>
                        <th>Nama</th>
                        <th>Nim</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include "connect.php"; 
                    $sql = mysqli_query($Connect,"select * from daftarnama");
                    $no = 0;
                    while($data = mysqli_fetch_array($sql)){
                        $no++;
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['No_Kartu']; ?></td>
                        <td><?php echo $data['Nama']; ?></td>
                        <td><?php echo $data['Nim']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $data['Id']; ?>">
                            Edit</a> | 
                            <a href="hapus.php?id=<?php echo $data['Id']; ?>">
                            Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="tambah.php"><button class="btn btn-primary">Tambah Data Mahasiswa</button></a>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>