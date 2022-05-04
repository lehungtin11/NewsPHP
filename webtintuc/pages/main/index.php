<?php 
    $query = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id_danhmuc=29 ORDER BY id_baiviet DESC LIMIT 1";
    $render = mysqli_query($mysqli, $query);
    $query2 = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id_danhmuc=25 ORDER BY id_baiviet ASC LIMIT 1";
    $render2 = mysqli_query($mysqli, $query2);
    $query3 = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id_danhmuc ORDER BY id_baiviet DESC";
    $render3 = mysqli_query($mysqli, $query3);
    $query4 = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id_danhmuc=28 ORDER BY id_baiviet DESC LIMIT 1";
    $render4 = mysqli_query($mysqli, $query4);
?>
<div class="row">
                <h2 class="news"> Trang chủ</h2>
            </div>
            <div class="row">
                <div class="col-9 ">
                    <div class="box-content">
                    <?php while($row = mysqli_fetch_array($render4)){ ?>
                        <img class="col-8" src="admin/modules/quanlybv/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                        <div class="news-content col-4">
                            <a href="index.php?index.php&id=<?php echo $row['id_baiviet'] ?>" class="head-content">
                                <span style="display: inline-block;">
                                <?php echo $row['tenbaiviet']?>
                            </span> 
                            </a>
                            <span style="color: #868482; font-size: 1.4rem;">
                                <?php echo $row['ngay']?>
                                </span>
                            <p class="desc-content">
                            <?php echo $row['tomtat']?>
                            </p>
                        </div>
                        <?php }?>
                    </div>

                </div>
                <div class="col-3">
                    <div class="news-right">
                    
                        <div class="news-right__item">
                        <?php while($row = mysqli_fetch_array($render2)){ ?>
                            <img style="width: 100%;" src="admin/modules/quanlybv/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                            <div class="news-content">
                                <a href="index.php?index.php&id=<?php echo $row['id_baiviet'] ?>" class="head-content head-content__right">
                                <span><?php echo $row['tenbaiviet']?></span> 
                                </a>
                                <span style="color: #868482; font-size: 1.4rem;">
                                <?php echo $row['ngay']?>
                                </span>
                            </div>
                            <?php }?>
                        </div>
                        
                        <div class="news-right__item">
                        <?php while($row = mysqli_fetch_array($render)){ ?>
                            <div class="news-content">
                                <a href="index.php?index.php&id=<?php echo $row['id_baiviet'] ?>" class="head-content head-content__right">
                                    <span><?php echo $row['tenbaiviet']?></span> 
                                </a>
                                <span style="color: #868482; font-size: 1.4rem;">
                                <?php echo $row['ngay']?>
                                </span>
                            </div>
                <?php }?>

                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="row">
                    <div class="news-middle">
                        <?php while($row = mysqli_fetch_array($render3)) {?>
                        <div class="col-3">
                            <div class="news-mid">
                                <a href="index.php?index.php&id=<?php echo $row['id_baiviet'] ?>">
                                    <div class="height" style="height:100%">
                                        <img class="news-mid__img" src="admin/modules/quanlybv/uploads/<?php echo $row['hinhanh']?>" alt="">
                                    </div>
                                </a>
                                <a href="index.php?index.php&id=<?php echo $row['id_baiviet'] ?>" class="news-mid__item-head">
                                    <?php echo $row['tenbaiviet']?>
                                </a>
                                <span style="color: #868482; font-size: 1.4rem;">
                                <?php echo $row['ngay']?>
                                </span>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>