<?php 
    $sql_lietke_bv = "SELECT * FROM tbl_baiviet,tbl_danhmuc WHERE tbl_baiviet.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_baiviet DESC";
    $query_lietke_bv = mysqli_query($mysqli, $sql_lietke_bv);
?>

<table style="border: 1px solid #444;
    text-align: center; width:100%; font-size: 1.6rem; color: #333">
    <tr style="height: 20px;">
        <th><h3>STT</h3></th>
        <th><h3>Tên bài viết</h3></th>
        <th><h3>Hình ảnh</h3></th>
        <th><h3>Tóm tắt</h3></th>
        <th><h3>Nội dung</h3></th>
        <th><h3>Danh mục</h3></th>
        <th><h3>Ngày tạo bài viết</h3></th>
        <th><h3>Quản lý</h3></th>
    </tr>

    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_bv)){
            $i++;
    ?>
    <tr>
        <td style="width: 5%">
            <?php echo $i ?>
        </td>
        <td style="width: 10%">
            <?php echo $row['tenbaiviet'] ?>
        </td><td style="width: 20%">
            <img style="width:100%" src="modules/quanlybv/uploads/<?php echo $row['hinhanh']?>" alt="Không có hình ảnh">
        </td>
        <td style="width: 20%">
            <?php echo $row['tomtat'] ?>
        </td>
        <td style="width: 25%">
            <?php echo $row['noidung'] ?>
        </td>
        <td style="width: 5%">
            <?php echo $row['tendanhmuc'] ?>
        </td>
        <td style="width: 10%">
            <?php echo $row['ngay'] ?>
        </td>
        <td style="width: 10%">
            <a href="?quanly=quanlybv&query=sua&idbaiviet=<?php echo $row['id_baiviet'] ?>" style="font-size: 1.6rem">
                Sửa
            </a>
            <a href="modules/quanlybv/xuly.php?idbaiviet=<?php echo $row['id_baiviet'] ?>" style="margin-left: 8px; font-size: 1.6rem">
                Xoá
            </a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>