<?php
class siswa{
	public $nama;
	public $usia;
	public $alamat;

	function set_biodata($x,$y,$z){
		$this -> nama = $x;
		$this -> usia = $y;
		$this -> alamat = $z;
	}

	function get_biodata(){
		echo $this -> nama;
		echo "<br>";
		echo $this -> usia;
		echo "<br>";
		echo $this -> alamat;
	}
}

$siswa = new mahasiswa();
$siswa -> set_biodata("Fulan","17 Tahun","Lampung");
$siswa -> get_biodata();
