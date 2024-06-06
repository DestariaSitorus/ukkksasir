<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pembelian.css">
</head>
<body>

    <div class="container">
        <div class="form-container">
            <h3 class="mb-4">Penjualan Barang</h3>
            <form>
                <div class="form-group">
                    <label for="namapembeli">Nama Barang</label>
                    <input type="text" class="form-control" id="namapembeli" placeholder="Masukkan nama barang">
                </div>
                <div class="form-group">
                    <label for="kodebarang">Kode Barang</label>
                    <input type="text" class="form-control" id="kodebarang" placeholder="Masukkan kode barang">
                </div>
                <div class="form-group">
                    <label for="jumlahbarang">Jumlah Barang</label>
                    <input type="number" class="form-control" id="jumlahbarang" placeholder="Masukkan jumlah barang">
                </div>
                <button type="submit"class="btn btn-primary">Beli</button>
            </form>
        </div>
    </div>
</body>
</html>