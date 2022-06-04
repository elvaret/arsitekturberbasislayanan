<!DOCTYPE html>
<html>

<head>
   <title>Testing PHP-XML</title>
</head>

<body>
   <table border="1">
      <thead>
         <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Fakultas</th>
            <th>Prodi</th>
            <th>Gender</th>
            <th>Alamat</th>
         </tr>
      </thead>
      <tbody>
         <?php
         $req = "http://localhost:8080/learnxml/data.xml";
         $temp = file_get_contents($req);
         $xml = simplexml_load_string($temp);

         foreach ($xml as $data) {
         ?>
            <tr>
               <td><?= $data->nim ?></td>
               <td><?= $data->nama ?></td>
               <td><?= $data->fakultas ?></td>
               <td><?= $data->prodi ?></td>
               <td><?= $data->gender ?></td>
               <td><?= $data->alamat ?></td>
            </tr>
            <?php
         }
            ?>
      </tbody>
   </table>
</body>

</html>