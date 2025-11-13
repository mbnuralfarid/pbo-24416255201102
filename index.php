<?php

require_once('./LuasLingkaran.php'); //cara panggil file

use App\Math\LuasLingkaran; //panggil class

$Lingkaran = new LuasLingkaran(12);
// $Lingkaran->jari = 12;
$Lingkaran->tampil('roda'); //panggil method tampil

LuasLingkaran::testing(); //panggil static method