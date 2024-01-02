<!DOCTYPE HTML>
<html>

<head>
    <title>Form Pesan</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>idPesan</th>
                <th>idPenerima</th>
                <th>idPengirim</th>
                <th>judul</th>
            </tr>
        </thead>
        <tbody>
            <?php
 $conn = mysqli_connect("localhost", 
"root","","dbimpal");
 $query = "SELECT * FROM pesan";
 $data = mysqli_query($conn,$query) or 
die("Gagal Query:".$query);
 ?>
            <?php while ($v = 
mysqli_fetch_array($data)):;?>
            <tr>
                <td>
                    <?php echo $v["idPesan"];?>
                </td>
                <td>
                    <?php echo $v["idPenerima"];?>
                </td>
                <td>
                    <?php echo $v["idPengirim"];?>
                </td>
                <td>
                    <?php echo $v["judul"];?>
                </td>
                <td><a href="HapusPesan.php?idPesan=<?php 
echo $v['idPesan'];?>" class="btn btn-dagger">Hapus</a></td>
            </tr>
            <?php endwhile;?>
        </tbody>
    </table>
</body>

</html>
