<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $angka = 10000;

    // Format angka dengan custom helper "moneyFormat"
    $hasil = moneyFormat($angka);

    return view('welcome', compact('hasil'));
});