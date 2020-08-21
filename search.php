<?php

include('connection.php');

$keyword = $_GET['keyword'];

$query = mysqli_query($connect, "SELECT * FROM karyawan WHERE nama='$keyword' OR alamat='$keyword' OR umur='$keyword' OR jenis_kelamin='$keyword'");
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
    <a href="add.php">Tambah Data</a>
    <br><br>
    <form action="search.php" method="get">
        <input type="text" name="keyword" placeholder="Keyword..." value="<?= $_GET['keyword']; ?>">
        <button type="submit">Search</button>
    </form>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Pilihan</th>
        </tr>
        <?php foreach ($results as $result) : ?>
            <tr>
                <td><?= $result['nama']; ?></td>
                <td><?= $result['alamat']; ?></td>
                <td><?= $result['umur']; ?></td>
                <td><?= $result['jenis_kelamin']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $result['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?= $result['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>