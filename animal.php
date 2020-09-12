<?php 

class binatang
{
	public $jumlahkaki,
	$bisa_terbang= "bisa terbang",
	$bersuara;	
}
/**
 * 
 */
class kucing extends binatang
{
	public $bisa_terbang="tidak bisa terbang";

	function jumlahkaki()
	{
		return $this->jumlahkaki;

	}
	public function terbang()
	{
		return $this->bisa_terbang;

	}
	public function bersuara()
	{
		return "meoong";
	}
}
 /**
  * 
  */
 class anjing extends binatang
 {
 	public $bisa_terbang="tidak bisa terbang";

	function jumlahkaki()
	{
		return $this->jumlahkaki;

	}
	
	public function terbang()
	{
		return $this->bisa_terbang;

	}
	public function bersuara()
	{
		return "guk guk";
	}
 	
 }

 class elang extends binatang
 {
	public $bisa_terbang="tidak bisa terbang";

	function jumlahkaki()
	{
		return $this->jumlahkaki;

	}
	
	public function terbang()
	{
		return $this->bisa_terbang;

	}
	public function bersuara()
	{
		return "miip";
	}
 	
 }

 class angsa extends binatang
 {

	function jumlahkaki()
	{
		return $this->jumlahkaki;

	}
	
	public function terbang()
	{
		return $this->bisa_terbang;

	}
	public function bersuara()
	{
		return "kwak";
	}
 	
 }

 $momo = new kucing;
 $momo->jumlah_kaki=4;
 echo "momo adalah kucing <br>";
 echo "punya kaki sebanyak:". $momo->jumlah_kaki."<br>";
 echo $momo->bisa_terbang."<br>";
 echo "suaranya  : " .$momo->bersuara(). "<br>";

 echo "<hr><hr>";


 $doggo= new anjing;
 $doggo->jumlah_kaki=4;
 echo "doggo adalah anjing <br>";
 echo "punya kaki sebanyak:". $doggo->jumlah_kaki."<br>";
 echo $doggo->bisa_terbang."<br>";
 echo "suaranya : " . $doggo->bersuara(). "<br>";

 echo "<hr><hr>";
 


 $zya= new elang;
 $zya->jumlah_kaki=2;
 echo "zya adalah elang<br>";
 echo "punya kaki sebanyak:". $zya->jumlah_kaki."<br>";
 echo $zya->bisa_terbang. "<br>";
 echo "suaranya : " . $zya->bersuara(). "<br>";

 echo "<hr><hr>";

 $masha= new angsa;
 $masha->jumlah_kaki=2;
 echo "masha adalah angsa <br>";
 echo "punya kaki sebanyak:". $masha->jumlah_kaki."<br>";
 echo $masha->bisa_terbang. "<br>";
 echo "suaranya : " . $masha->bersuara(). "<br>";

 echo "<hr><hr>";


 ?>