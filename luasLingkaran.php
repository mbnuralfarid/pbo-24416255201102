<?php

class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;
}

$Lingkaran = new LuasLingkaran();
$Lingkaran->jari = 10;

$rumus = LuasLingkaran::phi * ($Lingkaran->jari * $Lingkaran->jari);

echo "Luas Lingkaran dengan jari jari $Lingkaran->jari adalah $rumus";