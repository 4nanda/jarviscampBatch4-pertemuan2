<?php
// tipe data Integer
$umur = 23;
// tipe data float
$phi = 3.14;
// tipe data string
$nama = 'Ananda';
var_dump($umur);
echo '<br>'; /* br adalah fungsi garis baru */
var_dump($phi);
echo '<br>';
var_dump($nama);
echo '<br><br>';
// implementasi penggabungan variabel dalam 1 text
echo "Hello nama saya $nama, umur saya $umur tahun";
echo '<br>';
// tipe data boolean
$isStudent = true;
var_dump($isStudent);
// tipe data array [array : indexing]
$array = ['Ananda', 23, 3.14];
echo '<br>';
echo $array[1] . '<br>';
echo "Hello nama saya $array[0], umur saya $array[1] tahun" . '<br>';
// tipe data array [array : assosiatif]
$mahasiswa = ["nama" => "Ananda Mahardika", "umur" => 23, "ipk" => 3.75];
echo '<br>';
echo "Halo nama saya $mahasiswa[nama], umur saya $mahasiswa[umur], IPK saya $mahasiswa[ipk]";