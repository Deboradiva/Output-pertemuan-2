<?php
echo ("<h2>Tipe Data String</h2>");
    $nama = "Debora Divaningrum";
    $nim = "210411100121";
    $kelas = "PAW 3C";

    echo $nama;
    echo "<br>";
    echo $nim;
    echo "<br>";
    echo $kelas;
    // variabel diatas merupakan tipe data string karena berisi teks atau kalimat.
?>
<br>

<?php
echo ("<h2>Tipe Data Float</h2>");
// penjumlahan pada tipe data float
    $awal = 75.80;
    $akhir = 45.17;
    $hasil = $awal + $akhir;
    echo "Hasil nya adalah $hasil";
    // variabel diatas merupakan tipe data float karena dalam contoh berikut $awal $akhir $hasil adalah float.
?>
<br>

<?php
echo ("<h2>Tipe Data Array</h2>");
    $saya = array('Debora','Divaningrum','210411100121','3C');
    // menampilkan isi array
    echo count($saya); 
    // variabel diatas merupakan tipe data array karena berisi mengembalikan panjang (jumlah elemen) dari array.
?>
