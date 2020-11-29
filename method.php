<?php
echo "Data siswa berprestasi SMAN 1 Bandung"."<br>"."<br>";

class Siswa {
    public $id, $nama, $alamat, $kelas, $umur, $juara, $bidang, $tingkat;   
    public function getData(){
        echo "ID : $this->id"."<br>";
        echo "Nama : $this->nama"."<br>";
        echo "Alamat : $this->alamat"."<br>";
        echo "Kelas : $this->kelas"."<br>";
        echo "Umur (tahun) : $this->umur"."<br>";
        echo "Juara : $this->juara"."<br>";
        echo "Bidang : $this->bidang"."<br>";
        echo "Tingkat : $this->tingkat"."<br>"."<br>";
    }

    public function __construct($id=0, $nama="nama", $alamat="alamat", $kelas=0, $umur=0, $juara="juara", $bidang="bidang", $tingkat="tingkat"){

        $this->id=$id;
        $this->nama=$nama;
        $this->alamat=$alamat;
        $this->kelas=$kelas;
        $this->umur=$umur;
        $this->juara=$juara;
        $this->bidang=$bidang;
        $this->tingkat=$tingkat;

    }
}

$siswa1 = new Siswa(111,"Dwi","Cibiru, Bandung",11,17,"Juara 1","Fisika","Nasional");
$siswa2 = new Siswa(112,"Nur","Cicendo, Bandung",11,17,"Juara 3","Biologi","Kota/Kabupaten");
$siswa3 = new Siswa(113,"Dewi","Cidadap, Bandung",12,18,"Juara 1","Kimia","Kota/Kabupaten");
$siswa4 = new Siswa(114,"Tri","Cinambo, Bandung",10,16,"Juara 2","Fisika","Provinsi");
$siswa5 = new Siswa(115,"Dian","Lengkong, Bandung",12,17,"Juara 1","Matematika","Nasional");
$siswa6 = new Siswa(116,"Sri","Lengkong, Bandung",11,17,"Juara 2","Matematika","Kota/Kabupaten");
$siswa7 = new Siswa(117,"Putri","Sukasari, Bandung",11,16,"Juara 1","Kimia","Kota/Kabupaten");
$siswa8 = new Siswa(118,"Eka","Antapani, Bandung",10,15,"Juara 2","Biologi","Provinsi");



$siswa1->getData();
echo "<br>";
$siswa2->getData();
echo "<br>";
$siswa3->getData();
echo "<br>";
$siswa4->getData();
echo "<br>";
$siswa5->getData();
echo "<br>";
$siswa6->getData();
echo "<br>";
$siswa7->getData();
echo "<br>";
$siswa8->getData();


?>