<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tambah Data</h1>
    <form action="<?= base_url('profile/action_tambah_data') ?>" method="post">
        <table>
            <tr>
                <td>Nama Depan</td>
                <td>:</td>
                <td><input type="text" name="namadepan"></td>
            </tr>
            <tr>
                <td>Nama Belakang</td>
                <td>:</td>
            <tr><input type="text" name="namabelakang"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <tb><input type="text" name="temlahir">
                    <tb>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <tb><input type="text" name="tgllahir"></tb>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jk" value='L'>Laki-laki
                    <input type="radio" name="jk" value='P'>Perempuan
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alm"></td>
            </tr>
            <tr>
                <td>Jengjang Pendidikan</td>
                <td>:</td>
                <td> <select class="from-control" name="jp">
                        <option value="TK">TK</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMK">SMK</option>
                    </select>
                    <br>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="text-center">
                    <button type="submit" class="btn btn-primary"> Simpan </button>
                    <a href="" class=" btn btn-warning">Kembali</a>
                </td>
            </tr>
        </table>