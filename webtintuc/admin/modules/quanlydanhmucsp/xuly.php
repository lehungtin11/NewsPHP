
<?php
    include ('../../config/config.php');
    $tenloaisp = $_POST['tendanhmuc'];
    $thutu = $_POST['thutu'];
    if(isset($_POST['themdanhmuc'])) {

        // Thêm danh mục ------------------------
        $sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUE('".$tenloaisp."','".$thutu."')";
        mysqli_query($mysqli,$sql_them);
        header('Location:../../index.php?quanly=quanlydanhmucsp&query=them');
    } elseif (isset($_POST['suadanhmuc'])) {

        // Sửa danh mục ------------------------
        $id = $_GET['iddanhmuc'];
        $sql_sua = "UPDATE tbl_danhmuc SET tendanhmuc='".$tenloaisp."', thutu='".$thutu."' WHERE id_danhmuc = '".$id."'";
        mysqli_query($mysqli,$sql_sua);
        header('Location:../../index.php?quanly=quanlydanhmucsp&query=them');
    } else {
        
        // Xoá danh mục ------------------------
        $id = $_GET['iddanhmuc'];
        $sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc = '".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php?quanly=quanlydanhmucsp&query=them');
    }
?>