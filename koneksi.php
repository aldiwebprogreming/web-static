<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB1', 'db_dewankomputer');

// Buat Koneksinya
$db1 = new mysqli(HOST, USER, PASS, DB1);

function tanggal_indo($tanggal)
{
	$bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
	$split = explode('-', $tanggal);
	return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
}
?>
