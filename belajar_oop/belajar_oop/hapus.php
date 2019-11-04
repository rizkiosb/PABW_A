<?php
require 'class.php';
$id = $_GET["id"];
if ($siswa->hapus($id)) {
    echo "<script>alert('data berhasil dihapus');</script>";
    echo "<script>location='tampilsiswa.php';</script>";
} else {
    echo "<script>alert('data gagal dihapus');</script>";
    echo "<script>location='tampilsiswa.php';</script>";
}
