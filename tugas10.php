<?php

  require "functions.php";

  $produk = query("SELECT * FROM produk");

  ?>


  <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman Admin</title>

  </head>

  <body>

    <h1>Daftar Produk</h1>


    <a href="tambah.php">Tambah Produk</a>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No</th>
        <th>Aksi</th>
        <th>nama_produk</th>
        <th>keterangan</th>
        <th>harga</th>
        <th>jumlah</th>
     </tr>

    <?php $i = 1; ?>
   <?php foreach($produk as $row ) : ?>
     <tr>
       <td><?= $i;  ?></td>
       <td>
         <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
          <a href="hapus.php?id=<?= $row["id"]; ?>" onclick ='return confirm("Yakin Dihapus?")'>Hapus</a>
       </td>
       <td><?= $row["nama_produk"] ; ?></td>
       <td><?= $row["keterangan"];  ?></td>
       <td><?= $row["harga"];  ?></td>
       <td><?= $row["jumlah"];  ?></td>
     </tr>
   <?php $i++; ?>
 <?php endforeach; ?>






    </table>


  </body>
</html>
