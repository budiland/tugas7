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
                <td>ID KONTAK</td>
                <td><input type="text" name="id_kontak" id="id_kontak" onkeyup="isi_otomatis()"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>jkel</td>
                <td>
                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L">Laki Laki
                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P">Perempuan
                </td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email" id="email"> </td>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="alamat" id="alamat"></td>
            </tr>
            <tr>
                <td>KOTA</td>
                <td><input type="text" name="kota" id="kota"></td>
            </tr>
            <tr>
                <td>PESAN</td>
                <td><input type="text" name="pesan" id="pesan"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
            </tr>
        </table>
    </form>
</body>

</html>