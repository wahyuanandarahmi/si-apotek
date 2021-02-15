<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_penjualan WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Edit Data Penjualan Obat</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                    <div class="form-group">
                            <label for="nm_obat" class="col-sm-3 control-label">Nama Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="nm_obat" value="<?=$data['nm_obat']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Obat" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="jmlh_terjual" class="col-sm-3 control-label">Jumlah Terjual</label>
                            <div class="col-sm-9">
                                <input type="text" name="jmlh_terjual" value="<?=$data['jmlh_terjual']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Jumlah " required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggal" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal" value="<?=$data['tanggal']?>" class="form-control" id="inputEmail3" placeholder="masukkan tanggal" required>
                            </div>
                        </div>
                        <!--end tanggal lahir-->           

                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Edit Data Penjualan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=penjualan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Penjualan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari format'];
	$nm_obat=$_POST['nm_obat'];
	$jmlh_terjual=$_POST['jmlh_terjual'];
    $tanggal=$_POST['tanggal'];
    //buat sql
    $sql="UPDATE tbl_penjualan SET nm_obat='$nm_obat',jmlh_terjual='$jmlh_terjual',tanggal='$tanggal' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=penjualan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



