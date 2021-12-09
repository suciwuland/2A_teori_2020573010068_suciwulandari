<?php
    if($_GET['url']=='home'){
        require "home.php";
    }elseif($_GET['url']='mhs'){
        require "datapeminjaman.php";
    }elseif($_GET['url']=='dosen'){
        require "datapeminjaman.php";
    }elseif($_GET['url']=='barang'){
        require "datapeminjaman.php";
    }elseif($_GET['url']=='datapinjam'){
        require "mahasiswa.php";
    }elseif($_GET['url']=='pinjam'){
        require "datapeminjaman.php";
    }
?>