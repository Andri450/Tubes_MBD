<?php

    $koneksi = mysqli_connect("localhost","root","","Tubes_MBD");

	$whr = $_GET['whr'];
    $cek = mysqli_query($koneksi,"SELECT * FROM tb_mobil_all WHERE fuelType = '$whr'");

    $rows = array();
	while($row = mysqli_fetch_array($cek)){
		$rows[] = $row;
	}
	echo json_encode($rows);

?>