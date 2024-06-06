<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stokbarang.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
table, th, td {
  border: 1px solid black;
}
</style>
</head><style>
    /* Popup container */
    .popup {
        display: none;
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
        z-index: 9999;
    }

    /* Popup content */
    .popup-content {
        background-color: #fefefe;
        margin: 100px auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 400px;
    }

    /* Close button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
</head>
<body>

<!-- Button to open the popup -->


<button onclick="openPopup()">Add New</button>


<!-- The popup -->
<div id="addItemPopup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <h2>Add Barang</h2>
        <form action="" method="post">
            <label for="namabarang">Nama Barang</label><br>
            <input type="text" id="namabarang" name="namabarang"><br><br>
            <label for="kodebarang">Kode Barang</label><br>
            <input type="text" id="kodebarang" name="kodebarang"><br><br>
            <label for="stokbarang">Stok Barang:</label><br>
            <input type="number" id="stokbarang" name="stokbarang" ><br><br>
            <button type="submit">Add</button>
            <a href="stokbarang.php">Cancel</a>
            </div>
        </form>
    </div>
</div>

<script>
    // Function to open the popup
    function openPopup() {
        document.getElementById("addItemPopup").style.display = "block";
    }

    // Function to close the popup
    function closePopup() {
        document.getElementById("addItemPopup").style.display = "none";
    }
</script>
<div class="container">
    <?php
    include "connection.php";
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="nambahdata.php" class="add-button">Add New</a>

    <table>
      <thead>
        <tr>
          <th scope="col">Id Struk</th>
          <th scope="col">| Nama Menu</th>
          <th scope="col">| Jumlah</th>
          <th scope="col">| Harga</th>
          <th scope="col">| Tanggal Pemesanan</th>
          <th scope="col">| Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `kasir`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["IdStruk"] ?></td>
            <td><?php echo $row["NamaMenu"] ?></td>
            <td><?php echo $row["Jumlah"] ?></td>
            <td><?php echo $row["Harga"] ?></td>
            <td><?php echo $row["TglPesan"] ?></td>
            <td>
              <a href="edit.php?IdStruk=<?php echo $row["IdStruk"] ?>">Edit</a>
              <a href="delete.php?IdStruk=<?php echo $row["IdStruk"] ?>">Delete</a>
            </td>
          </tr>
        <?php
    <div class="container">
        <div class="table-container">
            <center>
            <h3 class="mb-4">Stok Barang</h3>
            <center>
                    <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
              <th scope="col">Id Struk</th>
              <th scope="col">| Nama Barang</th>
              <th scope="col">| Kode Barang</th>
              <th scope="col">| Stok Barang</th>
              <th scope="col">| Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $sql = "SELECT * FROM `stok`";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
          <td><?php echo $row["IdStruk"] ?></td>
          <td><?php echo $row["namabarang"] ?></td>
          <td><?php echo $row["kodebarang"] ?></td>
          <td><?php echo $row["jumlahbarang"] ?></td>
          <a href="edit.php?IdStruk=<?php echo $row["IdStruk"] ?>">Edit</a>
              <a href="delete.php?IdStruk=<?php echo $row["IdStruk"] ?>">Delete</a>
            </td>
          </tr>
        <?php
        </tbody>
        </table>
      </div>
    </body>
    
    <script>
        function preventBack() {window.history.forward();}
           setTimeout(preventBack(), 0);
           window.onunload = function() {null};
        </script>
    
    
    </html>