<?php

class Produk
{
	// Data atau Property
	public $judul,
		$penulis,
		$penerbit,
		$harga;


	// Constructor
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}


	// Method
	public function getLabel()
	{
		return "$this->judul, $this->penulis, $this->penerbit";
	}
}


// Objek 1
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

// Objek 2
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

$produk3 = new Produk("Dragon Ball");


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);
