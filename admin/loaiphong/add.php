<div class="row">
    <div class="row mb headeradmin" style="width:1050px;">
        <h1 style="padding: 15px 0;">ADMIN</h1>
    </div>
    <div class="row mb10 formtittle" style="width:1050px;">
        <h3>THÊM MỚI LOẠI PHÒNG</h3>
    </div>
    <?php
    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
    ?>
    <div class="row formcontent" style="width:1500px;">
        <form action="" method="post">
            <div class="row mb10">
                <label for="">Mã loại phòng</label><br>
                <input type="text" placeholder="auto number" name="maloaiphong" disabled>
            </div>
            <div class="row mb10">
                <label for="">Tên loại phòng</label><br>
                <input type="text" name="tenloaiphong" id="tenloaiphong" value="<?php echo isset($data['tenloaiphong']) ? $data['tenloaiphong'] : ''; ?>"/>
                <span style="color: red;"><?php echo isset($error['tenloaiphong']) ? $error['tenloaiphong'] : ''; ?></span>
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" name="nhaplai" value="NHẬP LẠI">
                <a href="index.php?act=listlp"><input type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>
</div>