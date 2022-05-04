<?php 
    $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<table style="text-align:center; font-size: 1.6rem; color: #333; margin:auto;">
    <form action="modules/quanlydanhmucsp/xuly.php?iddanhmuc= <?php echo $_GET['iddanhmuc'] ?>" method="POST">
    <?php 
    while ($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
    ?>
        <tr style="height: 5px">
            <th style="width: 35%; font-size: ">Thứ tự</th>
            <td><input require type="text" name="thutu" value="<?php echo $dong['thutu'] ?> "></td>
        </tr>
        <tr style="height: 35px">
            <th>Tên danh mục</th>
            <td><input require type="text" name="tendanhmuc" value="<?php echo $dong['tendanhmuc'] ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" name="suadanhmuc" value="Sửa" style="margin-bottom: 16px; padding: 4px 8px; cursor: pointer;"></td>
        </tr>
        <?php
    }
    ?>
        </form>
    </table>
