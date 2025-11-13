<?php

require_once('./LuasLingkaran.php');

use App\Math\LuasLingkaran;

$Lingkaran = new LuasLingkaran(12);

$Lingkaran->tampil('roda');

LuasLingkaran::testing();