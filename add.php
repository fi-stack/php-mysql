<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insert.php" method="post">
        <label>Nama :</label><br>
        <input type="text" name="nama">
        <br>
        <label>Alamat :</label><br>
        <textarea name="alamat" cols="30" rows="10"></textarea>
        <br>
        <label>Umur :</label><br>
        <input type="text" name="umur">
        <br>
        <label>Jenis Kelamin :</label><br>
        <select name="jenis_kelamin">
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>
        <br><br>
        <button type="submit">Tambah</button>
    </form>
</body>

</html>