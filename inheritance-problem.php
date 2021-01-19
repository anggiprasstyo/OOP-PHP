<?php

class Produk
{
	// Data atau Property
	public $judul,
		$penulis,
		$penerbit,
		$harga,
		$jmlHalaman,
		$waktuMain,
		$tipe;


	// Constructor 
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe)
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}


	// Method
	public function getLabel()
	{
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap()
	{
		// Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if ($this->tipe == "Komik") {
			$str .= " - {$this->jmlHalaman} Halaman.";
		} elseif ($this->tipe == "Game") {
			$str .= " ~{$this->waktuMain} Jam.";
		}

		return $str;
	}
}

// Object Type
class CetakInfoProduk
{
	public function cetak(Produk $produk)
	{
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

// Objek 1
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");

// Objek 2
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
