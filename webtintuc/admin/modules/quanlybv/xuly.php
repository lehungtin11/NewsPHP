
<?php
    include ('../../config/config.php');
    $tenbv = $_POST['tenbv'];
    $mabv = $_POST['mabv'];
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh;
    $noidung = $_POST['noidung'];
    $tomtat = $_POST['tomtat'];
    $danhmuc = $_POST['danhmuc'];
    $ngay = $_POST['ngay'];
    

    if(isset($_POST['thembaiviet'])) {
        // Thêm bài viết ------------------------
        $sql_them = "INSERT INTO tbl_baiviet(tenbaiviet,mabaiviet,hinhanh,noidung,tomtat,id_danhmuc,ngay) VALUE('".$tenbv."','".$mabv."','".$hinhanh."','".$noidung."','".$tomtat."','".$danhmuc."','".$ngay."')";
        mysqli_query($mysqli,$sql_them);
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        header('Location:../../index.php?quanly=quanlybv&query=them');

    } elseif (isset($_POST['suabaiviet'])) {
        // Sửa bài viết ------------------------
        $id = $_GET['idbaiviet'];
        if($hinhanh !='') {
            move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
            $sql = "SELECT * FROM tbl_baiviet WHERE id_baiviet = '$id' LIMIT 1";
            $query = mysqli_query($mysqli,$sql);
            while($row = mysqli_fetch_array($query)) {
                unlink('uploads/'.$row['hinhanh']);
            }
            $sql_sua = "UPDATE tbl_baiviet SET tenbaiviet='".$tenbv."', mabaiviet='".$mabv."', hinhanh='".$hinhanh."', noidung='".$noidung."',
             tomtat='".$tomtat."', id_danhmuc='".$danhmuc."', ngay='".$ngay."' WHERE id_baiviet = '".$id."'";
        } else {
            $sql_sua = "UPDATE tbl_baiviet SET tenbaiviet='".$tenbv."', mabaiviet='".$mabv."', noidung='".$noidung."',
             tomtat='".$tomtat."', id_danhmuc='".$danhmuc."', ngay='".$ngay."' WHERE id_baiviet = '".$id."'";
        }
        mysqli_query($mysqli,$sql_sua);
        header('Location:../../index.php?quanly=quanlybv&query=them');
        
    } else {
        // Xoá bài viết ------------------------
        $id = $_GET['idbaiviet'];
        $sql = "SELECT * FROM tbl_baiviet WHERE id_baiviet = '".$id."' LIMIT 1";
        $query = mysqli_query($mysqli,$sql);
        while($row = mysqli_fetch_array($query)) {
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa = "DELETE FROM tbl_baiviet WHERE id_baiviet = '".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php?quanly=quanlybv&query=them');
    }
?>