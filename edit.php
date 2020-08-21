<?php

include('connection.php');

$id = $_GET['id'];

$query = mysqli_query($connect, "SELECT * FROM karyawan WHERE id='$id'");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="update.php" method="post">

        <input type="hidden" name="id" value="<?= $result[0]['id']; ?>">

        <label>Nama :</label><br>
        <input type="text" name="nama" value="<?= $result[0]['nama']; ?>">
        <br>
        <label>Alamat :</label><br>
        <textarea name="alamat" cols="30" rows="10"><?= $result[0]['alamat']; ?></textarea>
        <br>
        <label>Umur :</label><br>
        <input type="text" name="umur" value="<?= $result[0]['umur']; ?>">
        <br>
        <label>Jenis Kelamin :</label><br>
        <select name="jenis_kelamin">
            <option value="Pria" <?= ($result[0]['jenis_kelamin'] == 'Pria') ? 'selected' : ''; ?>>Pria</option>
            <option value="Wanita" <?= ($result[0]['jenis_kelamin'] == 'Wanita') ? 'selected' : ''; ?>>Wanita</option>
        </select>
        <br><br>
        <button type="submit">Perbaharui</button>
    </form>
</body>

</html>