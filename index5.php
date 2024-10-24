<?php

$siswabaru = [
        'name' => ['sandhika', 'galih'],
        'id' => ['10203044', '20103022'],
        'code.pos' => [546.65, 929.64],
];

// iterasi
echo 'iterasi 1 <br />';
foreach($siswabaru as $key => $value) {
	echo $siswabaru[$key][0];
	echo '<br />';
} echo '<br />';

// iterasi 2
echo 'iterasi 2 <br />';
foreach($siswabaru as $key => $value) {
	foreach($value as $val) {
		echo $val;
		echo '<br />';
	}
	echo '<br />';
}
