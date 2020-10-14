<?php

    require "functions.php";


    $id = $_GET["id"];


    $mhs = query("SELECT * FROM produk WHERE id = $id")[0];

         if( isset($_POST["submit"]) ) {


          // Cek Berhasil Diubah aTau Tidak
          if( ubah($_POST)){
            echo "
               <script>
                 alert('Data Berhasil Diubah');
                 document.location.href = 'tugas10.php';
               </script>

            ";
          }else{
            echo "
            <script>
              alert('Data Gagal Diubah');
              document.location.href = 'tugas10.php';
            </script>
            ";
          }

        }


 ?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Ubah/Update Produk</title>

    </head>

    <body>

      <h1>Ubah Data Produk</h1>

      <form action="" method="post">
         <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
          <li>
           <label for="nama_produk">Nama Produk :</label>
           <input type="text" name="nama_produk" id="nama_produk" value="<?= $mhs["nama_produk"]; ?>">
          </li>

          <li>
           <label for="keterangan">Keterangan :</label>
           <input type="text" name="keterangan" id="keterangan" value="<?= $mhs["keterangan"]; ?>">
          </li>

          <li>
           <label for="harga">Harga :</label>
           <input type="text" name="harga" id="harga" value="<?= $mhs["harga"]; ?>">
          </li>

          <li>
           <label for="jumlah">Jumlah :</label>
           <input type="text" name="jumlah" id="jumlah" value="<?= $mhs["jumlah"]; ?>">
          </li>



          <button type="submit" name="submit">Ubah Data</button>

        </ul>

      </form>

    </body>
  </html>
