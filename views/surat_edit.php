<?php
$no_surat=$_GET['no_surat'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM surat_masuk WHERE no_surat ='$no_surat'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Surat Masuk</h3>
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
                            <label for="nama_penerima" class="col-sm-3 control-label">Nama Penerima</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_penerima" value="<?=$data['nama_penerima']?>"class="form-control" id="inputEmail3" placeholder="Nama Penerima">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_masuk" value="<?=$data['tgl_masuk']?>"class="form-control" id="inputEmail3" placeholder="Tanggal Masuk">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama_pengirim" class="col-sm-3 control-label">Nama Pengirim</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pengirim" value="<?=$data['nama_pengirim']?>"class="form-control" id="inputEmail3" placeholder="Nama Pengirim">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="instansi" class="col-sm-3 control-label">Instansi</label>
                            <div class="col-sm-9">
                                <input type="text" name="instansi" value="<?=$data['instansi']?>"class="form-control" id="inputEmail3" placeholder="Instansi">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-9">
                                <input type="text" name="status" value="<?=$data['status']?>"class="form-control" id="inputEmail3" placeholder="Status" >
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
                    <a href="?page=surat&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Surat Masuk
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
    $nama_penerima=$_POST['nama_penerima'];
	$tgl_masuk=$_POST['tgl_masuk'];
    $nama_pengirim=$_POST['nama_pengirim'];
	$instansi=$_POST['instansi'];
    $status=$_POST['status'];
  
    //buat sql
    $sql="UPDATE surat_masuk SET nama_penerima='$nama_penerima',tgl_masuk='$tgl_masuk',nama_pengirim='$nama_pengirim',instansi='$instansi',
	status='$status' WHERE no_surat ='$no_surat'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=surat&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



