<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Obat</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="kode_obat" class="col-sm-3 control-label">Kode Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_obat" class="form-control" id="inputEmail3" placeholder="Inputkan Kode Obat" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama_obat" class="col-sm-3 control-label">Nama Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_obat" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Obat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga_beli" class="col-sm-3 control-label">Harga Beli</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga_beli" class="form-control" id="inputEmail3" placeholder="Inputkan Harga Beli" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga_jual" class="col-sm-3 control-label">Harga Jual</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga_jual" class="form-control" id="inputEmail3" placeholder="Inputkan Harga Jualr" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="satuan" class="col-sm-3 control-label">Satuan</label>
                            <div class="col-sm-9">
                                <input type="text" name="satuan" class="form-control" id="inputEmail3" placeholder="Inputkan Satuan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kategori" class="col-sm-3 control-label">Kategori</label>
                            <div class="col-sm-9">
                                <input type="text" name="kategori" class="form-control" id="inputEmail3" placeholder="Inputkan Kategori" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="stok" class="col-sm-3 control-label">Stok</label>
                            <div class="col-sm-9">
                                <input type="text" name="stok"class="form-control" id="inputEmail3" placeholder="Inputkan Stok" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=obat&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Obat
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
	$kode_obat=$_POST['kode_obat'];
	$nama_obat=$_POST['nama_obat'];
	$harga_beli=$_POST['harga_beli'];
    $harga_jual=$_POST['harga_jual'];
	$satuan=$_POST['satuan'];
    $kategori=$_POST['kategori'];
    $stok=$_POST['stok'];
    //buat sql
    $sql="INSERT INTO tbl_obat VALUES ('','$kode_obat','$nama_obat','$harga_beli','$harga_jual','$satuan','$kategori','$stok')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=obat&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
