<?php
 session_start();
 $idPesan = $_POST['idPesan'];
 $idPenerima = $_POST['idPenerima'];
 $idPengirim = $_POST['idPengirim'];
 $judul = $_POST['judul'];
 $TextPesan = $_POST['TextPesan'];
 $date = date ('Y-m-d H:i:s');
 $conn = mysqli_connect("localhost","root","","dbimpal");
 $query = "INSERT INTO pesan 
VALUES('$idPesan','$idPenerima','$idPengirim','$judul','$TextPesan','$date')";
$result = mysqli_query($conn, $query);
if ($result) {
echo "Pesan berhasil ditambahkan";

} else {
echo "Pesan gagal ditambahkan: " . 
mysqli_error($conn);
 
}
?>
