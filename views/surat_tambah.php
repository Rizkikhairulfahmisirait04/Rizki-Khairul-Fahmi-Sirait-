<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Surat Masuk</h3>
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
                            <label for="nama_penerima" class="col-sm-3 control-label">Penerima</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="nama_penerima" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Penerima" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama_pengirim" class="col-sm-3 control-label">Nama Pengirim</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="nama_pengirim" class="form-control" id="inputPassword3" placeholder="Inputkan Nama Pengirim" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="instansi" class="col-sm-3 control-label">Instansi</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="instansi" class="form-control" id="inputPassword3" placeholder="Inputkan Instansi Perusahaan" required>
                            </div>
                        </div>


                        <!--Status-->

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" class="form-control">
									<option value="Ada">Ada</option>
									<option value="Tidak ada ">Tidak Ada</option>
								</select>
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
    $sql="INSERT INTO surat_masuk VALUES ('$no_surat','$nama_penerima','$tgl_masuk','$nama_pengirim','$instansi','$status')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Surat Error");
    if ($query){
        echo "<script>window.location.assign('?page=surat&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
