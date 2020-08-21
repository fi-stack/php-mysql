<?php

include('connection.php');

$query = mysqli_query($connect, "SELECT * FROM karyawan");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
        </tr>
        <?php foreach ($results as $result) : ?>
            <tr>
                <td><?= $result['nama']; ?></td>
                <td><?= $result['alamat']; ?></td>
                <td><?= $result['umur']; ?></td>
                <td><?= $result['jenis_kelamin']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>