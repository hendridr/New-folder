<!DOCTYPE HTML>
<html>

<head>
    <title>Tambah Pesan</title>
</head>

<body>
    <form action="simpanPesan.php" method="post">
        <!--diasumsikan idPengirim = id user login, didapatkan 
dari session dan idPesan auto increment dan tanggal adalah tanggal 
saat ini sehingga tidak perlu input-->
        <input type="text" name="idPesan">
        <input type="text" name="idPenerima">
        <input type="text" name="idPengirim">
        <input type="text" name="judul">
        <textarea name="TextPesan"></textarea>
        <input type='date' name='date'>
        <input type="submit" name="submit" value="simpan">
    </form>
</body>

</html>
