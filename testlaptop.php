<?php
require_once "datalaptop.php";
$data = new data ('Acer','2016','500','4','NVDIA');
echo "Merk Laptop " . $data->get_merk()."<br>";
echo "Tahun Rilisnya " . $data->get_tahunpeluncuran()."<br>";
echo "Penyimpanan Sebesar " . $data->get_penyimpanan()." Gb<br>";
echo "Dengan Ram " . $data->get_ram()." Gb<br>";
echo "Memilliki GPU " . $data->get_GPU()."<br>";
?>