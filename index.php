<?php

// a == b
// a < b
// a > b
// a <= b
// a >= b
// a != b

$game = '11';
$true = 'Benar';
$false = 'kurang';
$lebih = 'lebih';

// menggunakan if..else if..else
if($game == 10) {
        echo $game.' adalah jawaban yang '.$true.', ';
} else if($game <= 5) {
        echo $game.' adalah jawaban yang '.$false.', ';
} else {
echo $game.' adalah jawaban yang '.$lebih.', ';
}

// menggunakan switch
$user = 'susu';
$item = 'susu, nasi, ice cream, coklat, softdrink, pizza, burger, jagung';
switch($user) {
case 'susu';
case 'nasi';
case 'jagung';
case 'coklat';
        echo $user.' adalah makanan/minuman yang sehat!, ';
        break;
case 'ice cream';
case 'softdrink';
case 'pizza';
case 'burger';
        echo $user.' adalah makanan/minuman yang tidak sehat!, ';
        break;
}

// variabel = (kondisi) ? true : false;
$nama = 'aminul';
$umur = '19';
$data = $umur >= 17 ? $nama.' sudah dewasa, ' : $nama.' belum dewasa, ';
echo $data;

?>
