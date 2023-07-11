# Pertemuan 2 - PHP Dasar [ 09/07/2023 ]

---

## Setup Project

- untuk menjalankan PHP dibutuhkan **Web Server**, web server yang akan dipakai pada saat ini yaitu web server yg digunakan pada windows yaitu **XAMPP**. XAMPP memiliki direktori di `C:\xampp\htdocs`
- membuat folder ***Jarviscamp*** pada direktori `C:\xampp\htdocs`
- membuka vscode lalu membuka folder ***Jarviscamp*** tadi
- melakukan instalasi ekstensi untuk project PHP saat ini yaitu **PHP Intelephense** untuk autocomplete dalam proses pengkodean
- membuat folder ***pertemuan2*** pada direktori `C:\xampp\htdocs\Jarviscamp`

## Materi

- membuat file `index.php` pada folder ***pertemuan2***
- mempelajari macam-macam **Tag** yang digunakan dalam PHP dan implementasinya dalam bahasa pemrograman yang lain begitupun sebaliknya. *Contoh*: HTML

```php
<?php
echo "Test";
echo "<h1>Halo, Selamat Datang!</h1>";
echo "Hello World";
```

- mempelajari **Variabel** pada PHP dengan cara mengetahui aturan penulisan, membuat dan mengakses variabel tersebut

```php
<?php
$user = "AnandaMH";
$pass = "068016039";

echo "user: " . $user . ", pass: " . $pass;
```

- mempelajari **Tipe Data** pada PHP beserta contohnya, yaitu Float, Integer, String, Boolean, Array dan Object lalu mengimplementasikannya dalam code.

```php
<?php
$umur = 23; // tipe data Integer
$phi = 3.14; // tipe data float
$nama = 'Ananda'; // tipe data string
var_dump($umur); // menampilkan informasi variabel umur
echo '<br>'; /* br adalah fungsi garis baru */
var_dump($phi);
echo '<br>';
var_dump($nama);
echo '<br><br>';
// implementasi penggabungan variabel dalam 1 text
echo "Hello nama saya $nama, umur saya $umur tahun";
echo '<br>';
$isStudent = true; // tipe data boolean
var_dump($isStudent); // tipe data array [array : indexing]
$array = ['Ananda', 23, 3.14];
echo '<br>';
echo $array[1] . '<br>';
echo "Hello nama saya $array[0], umur saya $array[1] tahun" . '<br>';
// tipe data array [array : assosiatif]
$mahasiswa = ["nama" => "Ananda Mahardika", "umur" => 23, "ipk" => 3.75];
echo '<br>';
echo "Halo nama saya $mahasiswa[nama], umur saya $mahasiswa[umur], IPK saya $mahasiswa[ipk]";
```

- mempelajari **Fungsi** pada PHP dengan mengetahui langkah pembuatan yaitu membuat fungsi dengan menentukan nama, parameter dan nilai yang digunakan serta penulisan code untuk memanggil fungsi tersebut.

```php
<?php
function penjumlahan($nilai1, $nilai2)
{
    echo '<br>';
    $hasil = $nilai1 + $nilai2;
    echo $hasil;
}

function perkalian($nilai1, $nilai2){
    return $nilai1 * $nilai2;
}

$penjumlahan1 = penjumlahan(5, 5);
$penjumlahan2 = penjumlahan(2, 3);
// mengkalikan hasil penjumlahan1 & penjumlahan2
echo perkalian($penjumlahan1, $penjumlahan2);
```

## Tugas

- Buat Function untuk menghitung pembagian dari 2 parameter: nilai1 dan nilai2

```php
<?php
// membuat fungsi dengan nama pembagian yang memiliki parameter nilai1 & nilai2 !
function pembagian($nilai1, $nilai2){
    // menambah ruang dengan garis baru menggunakan tag <br> (break)
    echo '<br>';
    // membuat operator kalkulasi dengan nama hasilBagi
    // dan melakukan pembagian menggunakan operator bagi (/)
    $hasilBagi = $nilai1 / $nilai2;
    // menampilkan nilai yang digunakan untuk pembagian
    echo "Nilai 1 : $nilai1 " . '<br>' . "Nilai 2 : $nilai2 " . '<br><hr>';
    // mengembalikan nilai dari hasilBagi dengan fungsi return
    return "Hasil bagi adalah : $hasilBagi";
}

// memanggil fungsi pembagian() dengan nilai1 = 10, dan nilai2 = 2 menggunakan 'echo'
echo pembagian(10, 2);
```

## Output

![hasil](/pertemuan2/tugas/hasil.png)
