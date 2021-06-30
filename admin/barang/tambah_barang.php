<?php include '../template/base_admin.php'; ?>
<?php include 'session_barang.php'; ?>


<div class="col">
    <div class="container">
        <div class="card mt-4 row">
            <div class="card-body">
                <form action="tambah_barang_proses.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="namabar" aria-describedby="emailHelp" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Gambar:</label>
                        <input type="file" name="gambarbar" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInpunama1">Deskripsi:</label>
                        <input type="text" class="form-control" id="exampleInputnama1" name="deskbar" aria-describedby="emailHelp" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputalamat1">Harga:</label>
                        <input type="text" class="form-control" id="exampleInputalamat1" name="hargabar" aria-describedby="emailHelp" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputalamat1">tanggal:</label>
                        <input type="text" class="form-control datepicker" id="exampleInputalamat1" name="tanggalbar" aria-describedby="emailHelp" value="" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah data</button>
                </form>

            </div>
        </div>
    </div>
</div>

