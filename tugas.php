<?php
// membuat fungsi dengan nama pembagian yang memiliki parameter nilai1 & nilai2
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

// output :
// Nilai 1 : 10
// Nilai 2 : 2
// --------------------------------------------------
// Hasil bagi adalah 5