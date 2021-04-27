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
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>GENDER</th>
            <th>JURUSAN</th>
        </tr>
        <?php
        include 'db.php';
        $mahasiswa = mysqli_query($koneksi, "select * from mahasiswa");
        $no = 1;
        foreach ($mahasiswa as $row) {
            $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki laki';
            echo "<tr>
                <td>$no</td>
                <td>" . $row['nim'] . "</td>
                <td>" . $row['nama'] . "</td>
                <td>" . $jenis_kelamin . "</td>
                <td>" . $row['jurusan'] . "</td>
                </tr>";
            $no++;
        }
        ?>
    </table>
</body>

</html>