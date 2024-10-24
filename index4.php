<?php
// index dimulai dari 0
$siswa = [
        'doddy',
        'nofa',
        'fitri',
        'sandhika'
];

echo $siswa[2];
// var_dump($siswa);

$siswabaru = [
        'name' => ['sandhika', 'galih'],
        'id' => ['10203044', '20103022'],
        'code.pos' => 546.65,
];

echo $siswabaru['name'][0];
echo $siswabaru['code.pos'];
// var_dump($siswabaru);