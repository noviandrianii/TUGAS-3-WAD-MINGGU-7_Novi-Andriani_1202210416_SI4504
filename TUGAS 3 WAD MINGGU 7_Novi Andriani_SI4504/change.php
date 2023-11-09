<?php
require 'function.php';

$no = $_GET["no"];

$brg = query("SELECT * FROM daftar_barang_toko_novi WHERE no = $no")[0];

if (isset($_POST["submit"])){
    if (ubah($_POST)> 0){
        echo "
            <script>
            alert('Sukses diubah nih!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('Gagal nih coba lagi!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ubah Data Barang Toko Novi</title>
    </head>
    <body>
        <h1>Ubah Data Barang Toko Novi</h1>
        <form action="" method="post">
            <input type="hidden" name="no" value="<?=$brg['no'];?>">
            <ul>
                <li>
                    <label for="kodebarang">Kode Barang</label>
                    <input type="text" name="kodebarang" id="kodebarang" required value = <?= $brg["kodebarang"];?>>
                </li>
                <li>
                    <label for="namabarang">Nama Barang</label>
                    <input type="text" name="namabarang" id="namabarang" required value = <?= $brg["namabarang"];?>>
                </li>
                <li>
                    <input type="text" name="gambarbarang" id="gambarbarang" required value = <?= $brg["Gambar"];?>>
                    <label for="gambarbarang">Gambar Barang</label>
                </li>
                <li>
                    <label for="hargajual">Harga Barang</label>
                    <input type="text" name="hargajual" id="hargajual" required value = <?= $brg["hargajual"];?>>
                </li>
                <li>
                    <label for="stokbarang">Stok Barang</label>
                    <input type="text" name="stokbarang" id="stokbarang" required value = <?= $brg["stokbarang"];?>>
                </li>
                <li>
                    <button type="submit" name="submit">Ubah Data</button>
                </li>
            </ul>
        </form>
    </body>
</html>