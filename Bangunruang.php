<?php

class Persegipanjang{
    private $luas;
    protected $lebar=2;
    protected $panjang=3;

    public function Inputpanjang(){
    return $this->panjang;
    }

    public function Inputlebar(){
    return $this->lebar;
    }

    function LuasPersegiPanjang(){
    $this->luas= $this->panjang * $this->lebar;
    echo " Bangun Ruang = Luas Persegi Panjang </br>";
    echo " Panjang = $this->panjang </br>";
    echo " Lebar = $this->lebar </br>";
    echo " Luas Persegi Panjang = $this->luas </br>";
    }

}

class Bolabol {
    public $phi=3.14;
    public $jari=7;
   
    public function Inputphi(){
        $this->phi;
        return $this->phi;
    }
    public function Inputjari(){
        $this->jari;
        return $this->jari;
    }

    public function VolumeBola(){

     $this->volbola = 4/3*($this->phi * $this->jari * $this->jari * $this->jari);
     echo "</br> Bangun Ruang = Volume Bola </br>";
     echo " Phi = $this->phi </br>";
     echo " Jari-jari = $this->jari </br>";
     echo " Volume Bola = $this->volbola </br>";  
    }
   
   }

class Kerucutkerucut extends Bolabol {
    public $tinggi=14;

    public function Inputtinggi(){
     $this->tinggi;
     return $this->tinggi;
    }
   
    public function VolumeKerucut(){

     $this->volkerucut = 1/3*($this->phi * $this->jari * $this->jari * $this->tinggi);
     echo "</br> Bangun Ruang = Volume Kerucut </br>";
     echo " Jari-jari = $this->jari </br>";
     echo " Tinggi = $this->tinggi </br>";
     echo " Volume Kerucut = $this->volkerucut </br>";  
    }
   
   }

class Kubuskubus {
    public $sisi=10;

    public function Inputsisi(){
     $this->sisi;
     return $this->sisi;
    }
   
    public function VolumeKubus(){

     $this->volkubus = ($this->sisi * $this->sisi * $this->sisi);
     echo "</br> Bangun Ruang = Volume Kubus </br>";
     echo " Sisi = $this->sisi </br>";
     echo " Volume Kubus = $this->volkubus </br>";  
    }
   
   }

class Lingkaran extends Bolabol {
   
    public function KelilingLingkran(){

     $this->kellingkaran = 2*($this->phi * $this->jari);
     echo "</br> Bangun Ruang = Keliling Lingkaran </br>";
     echo " Phi = $this->phi </br>";
     echo " Jari-jari = $this->jari </br>";
     echo " Keliling Lingkaran = $this->kellingkaran";  
    }
   
   }


 $luas =new Persegipanjang();
 $luas->inputpanjang();
 $luas->Inputlebar();
 $luas->LuasPersegiPanjang();

 $volumeKerucut =new Kerucutkerucut();
 $volumeKerucut->Inputtinggi();
 $volumeKerucut->VolumeKerucut();

 $volumeKubus =new Kubuskubus();
 $volumeKubus->Inputsisi();
 $volumeKubus->VolumeKubus();

 $kelLingkaran =new Lingkaran();
 $kelLingkaran->KelilingLingkran();

 $volumeBola =new Bolabol();
 $volumeBola->Inputphi();
 $volumeBola->Inputjari();
 $volumeBola->VolumeBola();

?>