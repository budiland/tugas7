<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 7</title>
</head>

<body>
    <h2>List Mahasiswa</h2>
    <table border="1">
        <tr>
            <th>ID_KONTAK</th>
            <th>NAMA</th>
            <th>JKEL</th>
            <th>EMAIL</th>
            <th>ALAMAT</th>
            <th>KOTA</th>
            <th>PESAN</th>
        </tr>
        <?php
        include 'db.php';
        $mahasiswa = mysqli_query($koneksi, "select * from kontak");
        $no = 1;
        foreach ($mahasiswa as $row) {
            $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki laki';
            echo "<tr>
                <td>$no</td>
                <td>" . $row['id_kontak'] . "</td>
                <td>" . $row['Nama'] . "</td>
                <td>" . $row['jkel'] . "</td>
                <td>" . $row['Email'] . "</td>
                <td>" . $row['Alamat'] . "</td>
                <td>" . $row['Kota'] . "</td>
                <td>" . $row['Pesan'] . "</td>
                </tr>";
            $no++;
        }
        ?>
    </table>
</body>

</html>