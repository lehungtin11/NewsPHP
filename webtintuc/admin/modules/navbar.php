<?php
    if(isset($_GET['dangxuat'])=='dangxuat') {
        unset($_SESSION['dangnhap']);
        header("Location:login.php");
    }
?>
<ul class="navbar">
    <li>
        <a href="index.php?quanly=quanlydanhmucsp&query=them">
            Quản lý danh mục sản phẩm
        </a>
    </li>
    <li>
        <a href="index.php?quanly=quanlybv&query=them">
            Quản lý sản phẩm
        </a>
    </li>
    <li>
        <a href="index.php?quanly=quanlydanhmucbv&query=them">
            Quản lý danh mục bài viết
        </a>
    </li>
    <li>
        <a href="index.php?quanly=quanlybv&query=them">
            Quản lý bài viết
        </a>
    </li>
    <li>
        <a href="index.php?dangxuat=dangxuat">
        Đăng xuất 
        </a>
    </li>
</ul>