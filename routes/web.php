<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', function () {

    $produk = [
        ['kode' => 'BRG001', 'nama' => 'Pulpen', 'jenis' => 'Alat tulis', 'harga' => 20000],
        ['kode' => 'BRG002', 'nama' => 'pensil', 'jenis' => 'Alat tulis', 'harga' => 15000],
        ['kode' => 'BRG003', 'nama' => 'gelang', 'jenis' => 'Aksesoris', 'harga' => 10000],
        ['kode' => 'BRG004', 'nama' => 'casing', 'jenis' => 'Aksesoris', 'harga' => 35000],
        ['kode' => 'BRG005', 'nama' => 'laptop', 'jenis' => 'Elektronk', 'harga' => 455000],
        
    ];

    return view('produk', compact('produk'));
});

Route::get('/produk/tambah', function () {
    return view('tambah');
});



