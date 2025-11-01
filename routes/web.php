<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', function () {

    $produk = [
        ['kode' => 'BRG001', 'nama' => 'Pulpen', 'jenis' => 'alat tulis', 'harga' => 20000],
        ['kode' => 'BRG002', 'nama' => 'pensil', 'jenis' => 'alat tulis', 'harga' => 15000],
        ['kode' => 'BRG003', 'nama' => 'gelang', 'jenis' => 'aksesoris', 'harga' => 10000],
        ['kode' => 'BRG004', 'nama' => 'casing', 'jenis' => 'aksesoris', 'harga' => 35000],
    ];

    return view('produk', compact('produk'));
});

Route::get('/produk/tambah', function () {
    return view('tambah');
});



