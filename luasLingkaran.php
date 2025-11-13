<?php

class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;

    public function tampil($nama = 'ban') {
        $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
        echo "Luas Lingkaran {$nama} dengan jari jari $this->jari adalah {$rumus}";
    }

    public static function testing() {
        echo "</br>";
        echo "ini dari static";
    }
}

$Lingkaran = new LuasLingkaran();
$Lingkaran->jari = 10;
$Lingkaran->tampil('roda');

LuasLingkaran::testing();