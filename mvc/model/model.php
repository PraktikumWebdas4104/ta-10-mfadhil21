<?php
	class model{
		var $host = "localhost";
		var $uname = "root";
		var $pass = "";
		var $db = "dta10";
		//inisialisasi awal untuk class biasa disebut instansiasi
		function __construct(){
			$this->conn = mysqli_connect($this->host,$this->uname,$this->pass,$this->db);
			//buatlah koneksi seperti modul 9 kemarin
			
		}
		
		function execute($query){
			return $this->conn->query($query);
		}
		
		function selectAll(){
			//query select*from
			$query = "SELECT * FROM mahasiswa"; 

			return $this->execute($query);
		}
		
		function selectMhs($nim){
			//query select mahasiswa berdasarkan nim
			$query = "SELECT * FROM mahasiswa WHERE nim='$nim'";
			return $this->execute($query);
		}
		
		function updateMhs($nim, $nama, $angkatan, $fakultas, $prodi, $genre, $wisata){
			//query update nim, nama, angkatan, fakultas, prodi
			$query = "UPDATE mahasiswa SET nama='$nama',angkatan='$angkatan',fakultas='$fakultas',program='$prodi', genre='$genre', wisata='$wisata' WHERE nim='$nim'";
			return $this->execute($query);
		}
		
		function deleteMhs($nim){
			//query delete berdasarkan nim
			$query = "DELETE FROM mahasiswa WHERE nim='$nim'";
			return $this->execute($query);
		}
		
		function insertMhs($nim, $nama, $angkatan, $fakultas, $prodi, $genre, $wisata){
			//query insert nim,nama, angkatan, fakultas, prodi
			$query = "INSERT INTO mahasiswa VALUES ('$nim','$nama','$angkatan','$fakultas','$prodi', '$genre', '$wisata')";
			return $this->execute($query);
		}
		
		function fetch($var){
			return mysqli_fetch_array($var);
		}
		
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
?>