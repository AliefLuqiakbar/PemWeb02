<?php

    if (isset($_POST['submit'])) {
        $costumer = $_POST['cust'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jmlh'];

        if ($produk == "TV") {
            $total = $jumlah * 4200000;
            echo "Nama Costumer : $costumer <br>";
            echo "Pilihan Produk : $produk <br>";
            echo "Jumlah Beli : $jumlah <br>";
            echo "Total Belanja : Rp. " . number_format($total) . ",-";
        }elseif ($produk == "Kulkas") {
            $total = $jumlah * 3100000;
            echo "Nama Costumer : $costumer <br>";
            echo "Pilihan Produk : $produk <br>";
            echo "Jumlah Beli : $jumlah <br>";
            echo "Jumlah Belanja : Rp. " . number_format($total) . ",-";
        }elseif ($produk == "Mesin Cuci") {
            $total = $jumlah * 3800000;
            echo "Nama Costumer : $costumer <br>";
            echo "Pilihan Produk : $produk <br>";
            echo "Jumlah Beli : $jumlah <br>";
            echo "Jumlah Belanja : Rp. " . number_format($total) . ",-";
        }else{
            echo "Produk Tidak Ada";
        }    
    }   