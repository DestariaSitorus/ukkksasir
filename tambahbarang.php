<?php
include "koneksi.php";

if (isset($_POST["submit"])) {
  $namabarang = $_POST['namabarang'];
  $Jkodebarang = $_POST['kodebarang'];
  $stokbarang = $_POST['stokbarang'];
 

   $sql = "INSERT INTO `stok`(`namabarang`, `kodebarang`, `stokbarang`)
           VALUES ('$namabarang','$kodebarang','$stokbarang')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      echo "<script>
      alert('Data berhasil ditambah');
      window.location.href = 'stokbarang.php';
      </script>";
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

