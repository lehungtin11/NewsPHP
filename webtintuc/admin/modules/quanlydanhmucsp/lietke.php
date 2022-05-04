<?php 
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>

<table style="border: 1px solid #444;
    text-align: center; width:100%; font-size: 1.6rem; color: #333">
    <tr style="height: 20px;">
        <th><h3>STT</h3></th>
        <th><h3>Tên danh mục</h3></th>
        <th><h3>Quản lý</h3></th>
    </tr>

    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
            $i++;
    ?>
    <tr>
        <td style="width: 20%">
            <?php echo $i ?>
            
        </td>
        <td style="width: 60%">
            <?php echo $row['tendanhmuc'] ?>
        </td>
        <td style="width: 20%">
            <a href="?quanly=quanlydanhmucsp&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>" style="font-size: 1.6rem">
                Sửa
            </a>
            <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>" style="margin-left: 8px; font-size: 1.6rem">
                Xoá
            </a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>