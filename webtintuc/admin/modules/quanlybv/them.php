
<form action="modules/quanlybv/xuly.php" method="POST" enctype="multipart/form-data">
    <table style="text-align:center; font-size: 1.6rem; color: #333; margin:auto;">
        <tr style="height: 5px">
            <th style="width: 40%;">Mã bv</th>
            <td><input require type="text" name="mabv" placeholder="Number only"></td>
        </tr>
        <tr style="height: 35px;">
            <th>Tên bài viết</th>
            <td><input type="text" name="tenbv"></td>
        </tr>
        <tr style="height: 35px">
            <th>Hình ảnh</th>
            <td><input type="file" name="hinhanh"></td>
        </tr>
        <tr>
            <th>Tóm tắt</th>
            <td><textarea style="resize:none" name="tomtat" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <th>Nội dung</th>
            <td><textarea style="resize:none" name="noidung" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <th>Danh mục</th>
            <td ><select name="danhmuc" style="width:100%; text-align:center;">
                <?php
                    $query = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                    $sql = mysqli_query($mysqli,$query);
                    while ($row = mysqli_fetch_array($sql)) {
                ?>
                <option value="<?php echo $row['id_danhmuc']?>"><?php echo $row['tendanhmuc']?></option>
                <?php
                    }
                ?>
            </select></td>
        </tr>
        <tr>
            <th>Ngày tạo bài viết</th>
            <td><input type="text" name="ngay" placeholder="dd-mm-yyyy"></td>
        </tr>
        <tr>
            <td><input type="submit" name="thembaiviet" value="Thêm" style="margin-bottom: 16px; padding: 4px 8px; cursor: pointer;"></td>
        </tr>
    </table>
</form>
