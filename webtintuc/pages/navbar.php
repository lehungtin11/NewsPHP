<?php 
    $query = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $render = mysqli_query($mysqli, $query);
?>
<ul class="navbar">
            <div class="grid">
                <div class="navbar-item">
                    <a href="index.php">
                        <li class="navbar-news">
                            <i class="fa-solid fa-house"></i>
                        </li>
                    </a>
                    <a href="index.php?quanly=tintuc">
                        <li class="navbar-news">Tin tức</li>
                    </a>
                    <a href="index.php?quanly=sao">
                        <li class="navbar-news">Sao</li>
                    </a>
                    <a href="index.php?quanly=giaitri">
                        <li class="navbar-news">Giải trí</li>
                    </a>
                    <a href="index.php?quanly=thethao">
                        <li class="navbar-news">Thể thao</li>
                    </a>
                    <a href="index.php?quanly=khampha">
                        <li class="navbar-news">Khám phá</li>
                    </a>
                    <a href="index.php?quanly=tuvi">
                        <li class="navbar-news">Tử vi</li>
                    </a>
                    <a href="index.php?quanly=anchoi">
                        <li class="navbar-news">Ăn chơi</li>
                    </a>
                    <a href="index.php?quanly=dep">
                        <li class="navbar-news">Đẹp</li>
                    </a>
                    <a href="index.php?quanly=tamsu">
                        <li class="navbar-news">Tâm Sự</li>
                    </a>
                </div>
            </div>
        </ul>