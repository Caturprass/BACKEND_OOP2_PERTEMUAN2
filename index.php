<?php
// Interface
interface Model {
    public function Warna();
}
// interable
function getIterable():iterable {
  return ["Selamat ", "Datang"," Di"," Majuhardware"];
  
}
$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;
  
}
// class
class Produk {
    // Access modifiers Public
    // properti
  public $merk,
            $os,
            $harga;

  // contruktor
  function __construct ($merk, $os, $harga) {
    $this->merk = $merk;
    $this->os = $os;
    $this->harga = $harga;
  }
  // destructor
  function __destruct() {
    echo "Produk Hp : Merk : {$this->merk} | Os : {$this->os} | Harga : {$this->harga}.";
    echo "<br>";
  }
  
}

// Inheritance
class Produk2 extends Produk implements Model{
    public  function Warna (){
        echo "<hr>Produk yang ready di toko kami yaitu";
        echo "<br>";
    }
}
// Static Property
class Terjual {
    public static $satu = 50, $dua = 30, $tiga = 40, $empat = 60, $lima = 32;
}
// Static Methods
class Stok{
    public static function staticMethod (){
        echo "Samsung <br> Apple <br> Oppo <br> Xiaomi <br> Asus";
        echo "<hr>";
    }
}

// objek
$produk1 = new Produk2("Samsung,Xiaomi,Asus,Oppo", "Android", 3000000);
$produk2 = new Produk2("Apple", "macOs", 12000000);
$produk2 -> Warna();
Stok::staticMethod();
echo "Untuk Produk Samsung Terjual : " . Terjual::$satu;
echo "<br> Untuk Produk Apple Terjual : " . Terjual::$dua;
echo "<br> Untuk Produk Oppo Terjual : " . Terjual::$tiga;
echo "<br> Untuk Produk Xiaomi Terjual : " . Terjual::$empat;
echo "<br> Untuk Produk Asus Terjual : " . Terjual::$lima;
echo "<hr>";