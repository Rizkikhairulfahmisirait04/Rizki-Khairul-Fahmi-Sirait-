<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Surat</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM surat_keluar WHERE no_surat ='" . $_GET ['no_surat'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                      
                            <td>No Surat</td> <td><?= $data['no_surat'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pengirim</td> <td><?= $data['nama_pengirim'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Keluar</td> <td><?= $data['tgl_keluar'] ?></td>
                        </tr>
                        <tr>
                            <td>Instansi</td> <td><?= $data['instansi'] ?></td>
                        </tr>
						<tr>
 
                            
                         
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=keluar&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Surat Keluar </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

