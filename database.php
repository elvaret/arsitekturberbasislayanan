<?php
//koneksi ke database//
$conn = mysqli_connect("localhost", "root", "365Pass", "mahasiswa");
//ambil data dari database/query data_mahasiswa//
$sql = "SELECT * FROM data_mahasiswa";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<head>
   <title>Testing PHP-Database</title>
</head>

<body>
   <table border="1">
      <tr>
         <th>NIM</th>
         <th>Nama</th>
         <th>Fakultas</th>
         <th>Prodi</th>
         <th>Gender</th>
         <th>Alamat</th>
      </tr>

      <?php
      foreach ($result as $data) {
      ?>
         <tr>
            <td><?= $data["NIM"] ?></td>
            <td><?= $data["Nama"] ?></td>
            <td><?= $data["Fakultas"] ?></td>
            <td><?= $data["Prodi"] ?></td>
            <td><?= $data["Gender"] ?></td>
            <td><?= $data["Alamat"] ?></td>
         </tr>
      <?php
      }
      ?>
   </table>
</body>

</html>