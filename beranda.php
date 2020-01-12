<div class="container">
    <div class="row">
        <div class ="col-xs-12">

            <div class="alert alert-warning">
                <strong>Selamat Datang di Sistem Informasi Surat Masuk & Surat Keluar Kantor Balai Desa Tanjung Alam</strong>
            </div>
        </div>
    </div>
    <div class="row">
        <!--colomn kedua-->
        <div class="col-sm-9 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
				<center><p align="center"><img src="img/logo.png"></img></p>
					Sistem Informasi Arsip Surat Masuk dan Surat Keluar Kantor Balai Desa Tanjung Alam ini adalah sebuah media bagi pegawai 
					kantor balai desa untuk menginputkan berkas surat masuk dan surat keluar secara online. Sistem ini sangat membantu pegawai kantor 
					balai desa dalam melakukan pekerjaan dan memeriksa surat masuk dan surat keluar secara lebih jelas dan terperinci.
					<br>Untuk mengetahui laporan surat masuk dan surat keluar yang dibutuhkan silahkan lihat dan masuk ke menu "Reports" pada menubar.
					<br></br>
					<br>
			<b><font size="4">"Silahkan login terlebih dahulu"</center></font></b>
            
                </div>
            </div>
        </div>
        <!--akhir colomn kedua-->
        <div class="col-sm-3 col-xs-12">
            <!--Jika terjadi login error tampilkan pesan ini-->
            <?php if(isset($_GET['error']) ) {?>
            <div class="alert alert-danger">Maaf! Login Gagal, Coba Lagi..</div>
            <?php }?>

            <?php if (isset($_SESSION['username'])) { ?>
            <div class="alert alert-info">
                <strong>Selamat Datang <?=$_SESSION['nama']?></strong>
            </div>
            <?php
           } else { ?>

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Masuk Ke Sistem</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="proses_login.php" method="post">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" name="user" class="form-control input-sm"
                                   placeholder="Username" required="" autocomplete="off"/>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="password" name="pwd" class="form-control input-sm"
                                   placeholder="Password" required="" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" name="login" value="login"
                                        class="btn btn-success btn-block"><span class="fa fa-unlock-alt"></span>
                                    Login Sistem
                                </button>
                            </div>
                    </form>
                </div>
            </div>

        </div>
            <?php } ?>
    </div>
</div>
