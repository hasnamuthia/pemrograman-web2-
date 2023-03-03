<?php 
$customer = $_POST['customer'];
$pilihproduk = $_POST['pilihproduk'];
$jumlah = $_POST['jumlah'];

if($pilihproduk == "TV"){
    $totalharga = 4200000 * $jumlah;
} elseif ($pilihproduk == "Kulkas"){
    $totalharga = 3100000 * $jumlah;
} elseif ($pilihproduk == "Mesin Cuci"){
    $totalharga = 3800000 * $jumlah;
}
?>