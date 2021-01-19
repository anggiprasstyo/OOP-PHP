<?php

class Produk
{
	// Data atau Property
	public $judul,
		$penulis,
		$penerbit,
		$harga,
		$jmlHalaman,
		$waktuMain;


	// Constructor 
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
	}


	// Method
	public function getLabel()
	{
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk()
	{
		// Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}
}

// Inheritance
class Komik extends Produk
{
	public function getInfoProduk()
	{
		$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

// Inheritance
class Game extends Produk
{
	public function getInfoProduk()
	{
		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
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
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);

// Objek 2
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
