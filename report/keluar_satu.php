<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM surat_keluar WHERE no_surat='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Arsip Surat Masuk Dan Surat Keluar Kantor Balai Desa Tanjung Alam </h2>
                        <h4>Dusun III, Tanjung Alam <br>Kabupaten Asahan, Sumatera Utara, 21272</h4>
                        <hr>
                        <h3>DATA ARSIP</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
							<thead>
								<tr>
									<th width="18%">Nomor Surat</th><th>Nama Pengirim</th><th width="15%"><center>Tanggal Keluar</center></th><th><center>Instansi</center></th>
								</tr>
								</thead>
									<td><?= $data['no_surat'] ?></td>
                                    <td><?= $data['nama_pengirim'] ?></td>
                                   	<td><?= $data['tgl_keluar'] ?></td>
									<td><?= $data['instansi'] ?></td>
                            </tbody>
                            <tfoot> 
                                <tfoot>
                              <tr>
                                <td colspan="8" class="text-right">
                                        Tanjung Alam,  &nbsp <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kepala Desa<strong></u><br>
                                        NIP.123456789012345
									             </td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>