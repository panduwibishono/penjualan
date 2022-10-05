<!DOCTYPE html>
<head>
</head>
<body>
    <h1>From Tambah Barang</h1>
    <form action="proses-tambah.php" method="POST">
        <form>
            <fieldset>
            <p>
                <label for="nama">nama barang :</label>
                <input type="text" name="nama" >
            </p>

            <p>
                <label for="stok">stok barang :</label>
                <input type="number" name="stok" >
            </p>

            <p>
                <label for="harga">harga barang :</label>
                <input type="text" name="harga" >
            </p>

            <p>
                <input type="submit" value="tambah barang" name="tambah" />
            </p>
        </fieldset>
        </form>
</body>
</html>