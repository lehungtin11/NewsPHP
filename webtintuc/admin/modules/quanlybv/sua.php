<?php 
    $sql_sua_bv = "SELECT * FROM tbl_baiviet WHERE id_baiviet='$_GET[idbaiviet]' LIMIT 1";
    $query_sua_bv = mysqli_query($mysqli,$sql_sua_bv);
?>
<table style="text-align:center; font-size: 1.6rem; color: #333; margin:auto;">
    <form action="modules/quanlybv/xuly.php?idbaiviet= <?php echo $_GET['idbaiviet'] ?>" method="POST" enctype="multipart/form-data">
    <?php 
    while ($dong = mysqli_fetch_array($query_sua_bv)) {
    ?>
        <tr style="height: 5px">
            <th style="width: 40%;">Mã bv</th>
            <td><input require type="text" name="mabv" value="<?php echo $dong['mabaiviet'] ?>"></td>
        </tr>
        <tr style="height: 35px">
            <th>Tên bài viết</th>
            <td><input require type="text" name="tenbv" value="<?php echo $dong['tenbaiviet'] ?>"></td>
        </tr>
        <tr style="height: 35px">
            <th>Hình ảnh</th>
            <td><input type="file" name="hinhanh"></td>
            <td><img style="width:100%" src="modules/quanlybv/uploads/<?php echo $dong['hinhanh']?>" alt="Hinh anh"></td>
        </tr>
        <tr>
            <th>Tóm tắt</th>
            <td><textarea style="resize:none" require name="tomtat" id="" cols="30" rows="10"><?php echo $dong['tomtat'] ?></textarea></td>
        </tr>
        <tr>
            <th>Nội dung</th>
            <td><textarea require style="resize:none" name="noidung" id="" cols="30" rows="10"><?php echo $dong['noidung'] ?></textarea></td>
        </tr>
        <tr style="height: 35px">
            <th>Ngày tạo bài viết</th>
            <td><input require type="text" name="ngay" value="<?php echo $dong['ngay']?>"></td>
        </tr>
        <tr>
            <td>Danh mục sản phẩm</td>
            <td>
                <select name="danhmuc">
                    <?php
                    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                    $query = mysqli_query($mysqli, $sql_danhmuc);
                    while($row_danhmuc = mysqli_fetch_array($query)){
                        if($row_danhmuc['id_danhmuc']==$dong['id_danhmuc']){
                    ?>
                    <option selected value="<?php echo $row_danhmuc['id_danhmuc']?>"> <?php echo $row_danhmuc['tendanhmuc'] ?> </option>
                    <?php
                        } else {    
                    ?> 
                         <option value="<?php echo $row_danhmuc['id_danhmuc']?>"> <?php echo $row_danhmuc['tendanhmuc'] ?> </option>
                    <?php
                        }
                    } 
                    ?>
                </select>
            </td>
        </tr>
        
        <tr>
            <td><input type="submit" name="suabaiviet" value="Sửa" style="margin-bottom: 16px; padding: 4px 8px; cursor: pointer;"></td>
        </tr>
        <?php
    }
    ?>
        </form>
    </table>
