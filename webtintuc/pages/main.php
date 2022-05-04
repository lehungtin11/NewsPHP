<?php 
    $query = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $render = mysqli_query($mysqli, $query);
?>
<div class="main">
        <div class="grid">
            <?php
            if(isset($_GET['quanly'])) {
                $tam = $_GET['quanly'];
            } else {
                $tam = "";
            }
            if ($tam == 'tintuc') {
                include ("main/tintuc.php");
            } elseif ($tam == 'sao') {
                include ("main/sao.php");
            } elseif ($tam == 'giaitri') {
                include ("main/giaitri.php");
            } elseif ($tam == 'thethao') {
                include ("main/thethao.php");
            } elseif ($tam == 'khampha') {
                include ("main/khampha.php");
            } elseif ($tam == 'tuvi') {
                include ("main/tuvi.php");
            } elseif ($tam == 'anchoi') {
                include ("main/anchoi.php");
            } elseif ($tam == 'dep') {
                include ("main/dep.php");
            } elseif ($tam == 'tamsu') {
                include ("main/tamsu.php");
            } else {
                include ("main/index.php");
            }       
            ?>
            
        </div>
    </div>
