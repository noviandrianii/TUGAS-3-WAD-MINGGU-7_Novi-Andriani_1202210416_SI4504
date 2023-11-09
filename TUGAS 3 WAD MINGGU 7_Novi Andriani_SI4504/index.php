<?php
require 'function.php';
$barang = query("SELECT * FROM daftar_barang_toko_novi")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Toko Novi</title>
    </head>
    <body>
        <h1>Daftar Barang Toko Novi</h1>

        <a href="add.php">Tambah Data Barang</a>
        <br><br>
        
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No. </th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Kode Barang</th>
                <th>Harga Barang</th>
                <th>Stok Barang</th>
            </tr>
            <?php $i = 1;
            foreach ($barang as $row) : ?> 
            
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="change.php?no=<?= $row['no']; ?>">Ubah</a>
                    <a href="delete.php?no= <?= $row["no"];?>" onclick="return confirm('Yakin dihapus nih?');">Hapus</a>
                </td>
                <td><img src="image/<?= $row['Gambar']; ?>" width="50"></td>
                <td><?= $row["namabarang"]; ?></td>
                <td><?= $row["kodebarang"]; ?></td>
                <td><?= $row["hargajual"]; ?></td>
                <td><?= $row["stokbarang"]; ?></td>
            </tr>
            <?php 
            $i++; 
            endforeach;
            ?>
        </table>
    </body>
</html>