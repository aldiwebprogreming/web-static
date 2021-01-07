<?php
	include 'koneksi.php';
	$kecamatan = $_POST['kecamatan'];

	echo "<option value=''>Pilih Kelurahan</option>";

	$query = "SELECT * FROM kelurahan WHERE id_kec=? ORDER BY nama ASC";
	$dewan1 = $db1->prepare($query);
	$dewan1->bind_param("i", $kecamatan);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id_kel'] . "'>" . $row['nama'] . "</option>";
	}
?>