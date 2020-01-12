<?php
$no_surat=$_GET['no_surat'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM surat_keluar WHERE no_surat ='$no_surat'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Surat Keluar</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_surat" class="col-sm-3 control-label">No Surat</label>
                            <div class="col-sm-9 col-xs-9">
							<input type="text" name="no_surat" value="<?=$data['no_surat']?>"class="form-control" id="inputEmail3" placeholder="Nomor Surat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_pengirim" class="col-sm-3 control-label">Nama Pengirim</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pengirim" value="<?=$data['nama_pengirim']?>"class="form-control" id="inputEmail3" placeholder="Nama Pengirim">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tgl_keluar" class="col-sm-3 control-label">Tanggal Keluar</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_keluar" value="<?=$data['tgl_keluar']?>"class="form-control" id="inputEmail3" placeholder="Tanggal Keluar">
                            </div>
                        </div>
					
					<div class="form-group">
                            <label for="instansi" class="col-sm-3 control-label">Instansi</label>
                            <div class="col-sm-9">
                                <input type="text" name="instansi" value="<?=$data['instansi']?>"class="form-control" id="inputEmail3" placeholder="Instansi">
                            </div>
                        </div>
							
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=keluar&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Surat Keluar
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $no_surat=$_POST['no_surat'];
    $nama_pengirim=$_POST['nama_pengirim'];
	$tgl_keluar=$_POST['tgl_keluar'];
	$instansi=$_POST['instansi'];
   
  
    //buat sql
    $sql="UPDATE surat_keluar SET nama_pengirim='$nama_pengirim',tgl_keluar='$tgl_keluar',instansi='$instansi'
	 WHERE no_surat ='$no_surat'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=keluar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



