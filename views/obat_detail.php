<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Obat</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_obat WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td>Kode Obat</td> <td><?= $data['kode_obat'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Obat</td> <td><?= $data['nama_obat'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga Beli</td> <td><?= $data['harga_beli'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga Jual</td> <td><?= $data['harga_jual'] ?></td>
                        </tr>
                        <tr>
                            <td>Satuan</td> <td><?= $data['satuan'] ?></td>
                        </tr>
                        <tr>
                            <td>Kategori</td> <td><?= $data['kategori'] ?></td>
                        </tr>
                        <tr>
                            <td>Stok</td> <td><?= $data['stok'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=obat&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Obat </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

