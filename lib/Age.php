<?php

class Age{
	
	private $db;
	public function Siswa(){
		$this->db = new DBClass();
	}
	
	public function __construct($tanggal_lahir){
		$tanggal_lahir;
	}
	
	public function umur($tanggal_lahir){
		//$query = "select date_ob from siswa";
		$tanggal = "1976-12-11";
		$tanggal_lahir = new DateTime($tanggal);
		$today = new DateTime();
		
		$diff = $today->diff($tanggal_lahir);
	}
	
	public function v_umur () {
		
	}
}

?>