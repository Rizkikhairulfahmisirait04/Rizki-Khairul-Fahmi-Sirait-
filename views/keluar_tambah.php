<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Surat Keluar</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_surat" class="col-sm-3 control-label">Nomor Surat</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="no_surat" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Surat" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama_pengirim" class="col-sm-3 control-label">Nama Pengirim</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="nama_pengirim" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pengirim" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tgl_keluar" class="col-sm-3 control-label">Tanggal Keluar</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_keluar" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Keluar" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="instansi" class="col-sm-3 control-label">Instansi</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="instansi" class="form-control" id="inputPassword3" placeholder="Inputkan Instansi Perusahaan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan </button>
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
    $sql="INSERT INTO surat_keluar VALUES ('$no_surat','$nama_pengirim','$tgl_keluar','$instansi')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Surat Error");
    if ($query){
        echo "<script>window.location.assign('?page=keluar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
