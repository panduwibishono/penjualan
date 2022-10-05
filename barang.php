<?php
include("koneksi.php");?>

<html>
<head>
</head>
<body>
<h1>Data Master Barang </h1>
<h4> <a href=tambah.php> Tambah Barang</a></h4>
<table border="5p[">
    <tr>
        <th>kode barang</th>
        <th>nama barang</th>
        <th>stok barang</th>
        <th>barang barang</th>
        <th>aksi </th>
    </tr>

<?php
    include("koneksi.php");
    $sql='SELECT * FROM barang';
    $query = mysqli_query($db, $sql);

    while($barang=mysqli_fetch_array($query)){
    echo "<tr>";
        echo "<td>".$barang['id']."</td>";
        echo "<td>".$barang['nama']."</td>";
        echo "<td>".$barang['stok']."</td>";
        echo "<td>".$barang['harga']."</td>";
        echo "<td>";
        echo "<a href='edit-barang.php?id=".$barang['id']."'>edit</a> |";
        echo "<a href='hapus-barang.php?id=".$barang['id']."'>hapus</a> ";
        echo "</tr>";
    }

?>
</table>
</body>
</html>
