<?php

class Siswa{

    public $nama;
    public $nisn;
    public $gender;

    public function __construct($nama,$nisn,$gender){
        $this->nama = $nama;
        $this->nisn = $nisn;
        $this->gender = $gender;


    }
    public function set_nilai($nilai_uts,$nilai_uas,$nilai_tugas){
        $this->nilai_uts = $nilai_uts;
        $this->nilai_uas = $nilai_uas;
        $this->nilai_tugas = $nilai_tugas;


    }
    
    
    public function nilai_akhir(){

        return ($this->nilai_uts + $this->nilai_uas + $this->nilai_tugas)/3;
    }

    public function set_bayar_spp($uang_spp){
        $this->uang_spp = $uang_spp;
    }

    public function get_uang_spp(){
        $min_spp = 50000;
        if ($this-> uang_spp = $min_spp){
            return "uang spp kelebihan";
        } else {
            return "uang spp kurang";
        }
    }
}
$siswa1 = new Siswa("Zakky","0020632354","Laki Laki");


echo $siswa1-> nama;
echo $siswa1-> nisn;
echo $siswa1-> gender;
echo "<br>";
$siswa1->set_nilai(90,90,85);
echo $siswa1->nilai_akhir();
echo "<br>";
$siswa1->set_bayar_spp(150000);
echo $siswa1-> get_uang_spp();
echo "<br>";


$siswa2 = new Siswa("Ulfa","0020632351","Perempuan");
echo "<br>";
echo "<br>";
echo $siswa2-> nama;
echo $siswa2-> nisn;
echo $siswa2-> gender;
echo "<br>";
$siswa2->set_nilai(90,92,89);
echo $siswa2->nilai_akhir();
echo "<br>";
$siswa1->set_bayar_spp(15000);
echo $siswa2-> get_uang_spp();
echo "<br>";




?>