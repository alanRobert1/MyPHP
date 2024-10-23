<?php

// if..else if..else;
$nama = 'Aminul Hafiz';
$umur = '17 tahun';

if($umur > 1 && $umur < 17) {
	echo 'belum punya ktp';
} else if ($umur > 17) {
	echo 'wajib punya ktp';
} else {
	echo 'good';
}


// switch
$item = 'susu, tomat, kacang, bayam, apel.';
$user = 'susu';

switch($user) {
	case 'susu';
	case 'jus';
		echo $user.' adalah minuman';
	break;
	case 'sawi';
	case 'bayam';
		echo $user.' adalah sayuran';
	break;
	case 'apel';
	case 'jeruk';
		echo $user.' adalah buah';
	break;
}


// variabel = (kondisi) ? true : false;
$nama = 'Aminul hafiz';
$umur = 17;

$user = $umur <= 17 ? $nama.' sudah dewasa' : $nama.' belum dewasa';
echo $user;
