<?php
//membuat query untuk hapus data
$sql="DELETE FROM surat_keluar WHERE no_surat ='".$_GET['no_surat']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=keluar&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=keluar&actions=tampil');</scripr>";
}

