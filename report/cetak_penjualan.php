<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Penjualan Obat</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                          <h2>Sistem Informasi Penjualan Aoptek XYZ </h2>
        <h4> Jl. Imam Bonjol, Kisaran, Kec. Kota Kisaran Barat
                Kabupaten Asahan, Sumatera Utara 21211,</h4>
                        <hr>
                        <h3>DATA PENJUALAN OBAT</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                            <thead>
								<tr>
                                <th width="5%">No.</th>
                                <th width="20%">Nama Obat</th>
                                <th width="20%">Jumlah Terjual</th>
                                <th width="10%">Tanggal</th>                           
                            </tr>
							</thead>
						<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_penjualan";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['nm_obat'] ?></td>
                                    <td><?= $data['jmlh_terjual'] ?></td>
                                    <td><?= $data['tanggal'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Wahyu Aldi<strong></u><br>
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>