<?php

// Konfiguracja

$config['length'] = 9;
// Alfabet
$values = 'ACDEFGHIKLMNPRSTUVWXYZ';
$cyfry = '12345679'
$values .= $cyfry;

$random_symbols = '';
$random_symbols .= substr($cyfry, mt_rand(0, (strlen($cyfry) - 1)), 1);

for($h = 0, $length = (strlen($values) - 1); $h < $config['length']; ++$h) {
	$random_symbols .= substr($values, mt_rand(0, $length), 1);
}

echo 'Losowe hasło na teraz brzmi: <pre>'.htmlspecialchars($random_symbols).'</pre>';