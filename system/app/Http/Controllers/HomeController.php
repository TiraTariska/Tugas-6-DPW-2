<?php

namespace App\Http\Controllers;

class HomeController extends Controller{


    function showBeranda(){
        return view('beranda');
    }
    function showProduk(){
        return view('produk');
    }
    function showKategori(){
        return view('kategori');
    }
    function test($produk, $hargaMin = 0 , $hargaMax = 0 ){
        if($produk == 'baju'){
            echo "Tampilkan Produk Baju";
        }elseif($produk == 'sepatu'){
            echo "Produk Sepatu";
        }
        echo "<br>";
        echo "Harga Min adalah $hargaMin  <br>";
        echo "Harga Max adalah $hargaMax  <br>";
    }
}