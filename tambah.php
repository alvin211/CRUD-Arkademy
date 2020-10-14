<?php

    require "functions.php";


         if( isset($_POST["submit"]) ) {

          if( tampil($_POST)){
            echo "
               <script>
                 alert('Data Berhasil Ditambahkan');
                 document.location.href = 'tugas10.php';
               </script>

            ";
          }else{
            echo "
            <script>
              alert('Data Tidak Berhasil Ditambahkan');
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
      <title>Tambah Mahasiswa</title>

    </head>

    <body>

      <h1>Tambah Data Produk</h1>

      <form action="" method="post">
        <ul>
          <li>
           <label for="nama_produk">nama Produk :</label>
           <input type="text" name="nama_produk" id="nama_produk">
          </li>

          <li>
           <label for="keterangan">Keterangan :</label>
           <input type="text" name="keterangan" id="keterangan">
          </li>

          <li>
           <label for="harga">Harga :</label>
           <input type="text" name="harga" id="harga">
          </li>

          <li>
           <label for="jumlah">Jumlah :</label>
           <input type="text" name="jumlah" id="jumlah">
          </li>


          <button type="submit" name="submit">Kirim Data!</button>

        </ul>

      </form>

    </body>
  </html>
