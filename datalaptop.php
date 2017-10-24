<?php
	class data{
	public $merk;
	public $tahun_peluncuran;
	public $penyimpanan;
	public $ram;
	public $GPU;

		public function __construct($merk,$tahun_peluncuran,$penyimpanan,$ram,$GPU)
	{
	$this -> merk = $merk;
	$this -> tahun_peluncuran = $tahun_peluncuran;
	$this -> penyimpanan = $penyimpanan;
	$this -> ram = $ram;
	$this -> GPU = $GPU;	
	}
	public function get_merk()
	{
		return $this -> merk;
	}
	public function get_tahunpeluncuran()
	{
		return $this -> tahun_peluncuran;
	}
	public function get_penyimpanan()
	{
		return $this -> penyimpanan;
	}
	public function get_ram()
	{
		return $this -> ram;
	}
	public function get_GPU()
	{
		return $this -> GPU;
	}
	}
?>