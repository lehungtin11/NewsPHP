<?php
    if(isset($_GET['quanly']) && isset($_GET['query'])) {
        $tam = $_GET['quanly'];
        $query = $_GET['query'];
    } else {
        $tam = "";
        $query = "";
    }
    if($tam == 'quanlydanhmucsp' && $query =='them') {
        include ("quanlydanhmucsp/them.php");
        include ("quanlydanhmucsp/lietke.php");
    } elseif ($tam == 'quanlydanhmucsp' && $query == 'sua') {
        include ("modules/quanlydanhmucsp/sua.php");
    } elseif ($tam == 'quanlybv' && $query == 'them') {
        include ("modules/quanlybv/them.php");
        include ("modules/quanlybv/lietke.php");
    } elseif ($tam == 'quanlybv' && $query == 'sua') {
        include ("modules/quanlybv/sua.php");
    } else {
        include ("dashboard.php");
    }

?>