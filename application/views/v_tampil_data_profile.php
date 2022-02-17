<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="<?= base_url('profile/tambah_data') ?>"> ~ Tambah Data ~ </a>
    <table border="1">
        <thead>
            <tr>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th> Alamat</th>
                <th>Jengjang Pendidikan</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($profile as $p) { ?>
                <tr>
                    <td><?= $p->nama_depan ?></td>
                    <td><?= $p->nama_belakang ?></td>
                    <td><?= $p->tempat_lahir ?></td>
                    <td><?= $p->tanggal_lahir ?></td>
                    <td><?= $p->jenis_kelamin ?></td>
                    <td><?= $P->alamt ?></td>
                    <td><?= $p->jenjang_Pendidikan ?></td>
                    <td><a href="<?= base_url('profile/edit_data_profile/' . $p->id) ?>">edit</a></td>
                    <td><a href="<?= base_url('profile/delete_data_profile/' . $p->id) ?>">delete</a></td>
                </tr>
            <?php $no++;
            } ?>
        </tbody>
    </table>
</body>

</html>