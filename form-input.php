<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>

<body>
    <form action="simpan.php" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" id="nim" onkeyup="isi_otomatis()"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L">Laki Laki
                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P">Perempuan
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><select name="jurusan" id="jurusan">
                        <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA </option>
                        <option value="TEKNIK MESIN">TEKNIK MESIN </option>
                        <option value="TEKNIK KIMIA">TEKNIK KIMIA </option>
                    </select>
                </td>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="alamat" id="alamat"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
            </tr>
        </table>
    </form>
</body>

</html>