<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_obat WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Edit Data Obat</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                    <div class="form-group">
                            <label for="kode_obat" class="col-sm-3 control-label">Kode Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_obat" value="<?=$data['kode_obat']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Kode Obat" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama_obat" class="col-sm-3 control-label">Nama Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_obat" value="<?=$data['nama_obat']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Obat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga_beli" class="col-sm-3 control-label">Harga Beli</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga_beli" value="<?=$data['harga_beli']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Harga Beli" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga_jual" class="col-sm-3 control-label">Harga Jual</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga_jual" value="<?=$data['harga_jual']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Harga Jualr" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="satuan" class="col-sm-3 control-label">Satuan</label>
                            <div class="col-sm-9">
                                <input type="text" name="satuan" value="<?=$data['satuan']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Satuan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kategori" class="col-sm-3 control-label">Kategori</label>
                            <div class="col-sm-9">
                                <input type="text" name="kategori" value="<?=$data['kategori']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Kategori" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="stok" class="col-sm-3 control-label">Stok</label>
                            <div class="col-sm-9">
                                <input type="text" name="stok" value="<?=$data['stok']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Stok" required>
                            </div>
                        </div>
                    
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        
                        <!--end tanggal lahir-->           

                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Edit Data Siswa</button>
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
    $sql="UPDATE tbl_obat SET kode_obat='$kode_obat',nama_obat='$nama_obat',harga_beli='$harga_beli',harga_jual='$harga_jual',satuan='$satuan',kategori='$kategori',stok='$stok' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=obat&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



