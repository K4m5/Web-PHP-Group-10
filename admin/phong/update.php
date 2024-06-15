<?php
if (is_array($phong)) {
    extract($phong);
    $iddm=$id_loaiphong;
    // $prd_id = $id_phong;
    // var_dump($prd_id);die;
    // var_dump($phong);
}
$img = "../upload/" . $img;
if (is_file($img)) {
    $img = "<img src='" . $img . "' height='50px'>";
} else {
    $img = "No photo";
}
?>
<div class="row">
    <div class="row mb headeradmin" style="width:1050px;">
        <h1 style="padding: 15px 0;">ADMIN </h1>
    </div>
    <div class="row mb10 formtittle" style="width:1050px;">
        <h3>CẬP NHẬT PHÒNG</h3>
    </div>
    <div class="thongbao" style="color: red;">
    <?php
    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
    ?>
    </div>
    <div class="row formcontent" style="width:1650px;">
        <form action="index.php?act=updatep" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="row mb10 content1">
                    <div class="row mb10">
                        <label for="">MÃ LOẠI PHÒNG</label><br>
                        <input type="text" style="width:120%;" value="<?= $id_loaiphong ?>" name="idlp" disabled>
                    </div>
                    <div class="row mb10">
                        <label for="" style="display:flex;">TÊN PHÒNG <p style="color:red;"> *</p><br></label>
                        <input type="text" name="tenphong" style="width:120%;" value="<?= $name_phong ?>" required>
                    </div>
                    <div class="row mb10">
                        <label for="" style="display:flex;">SỐ KHÁCH TỐI ĐA <p style="color:red;">*</p><br></label>
                        <input type="text" name="sokhach" style="width:120%;" value="<?= $sokhach ?>" required>
                    </div>
                </div>
                <div class="row mb10 content2">
                    <div class="row mb10">
                        <label for="" style="display:flex;">ĐƠN GIÁ <p style="color:red;">*</p><br></label>
                        <input type="text" name="gia" style="width:120%;" value="<?= $price ?>" required>
                    </div>
                    <div class="row mb10">
                        <label for="">GIÁ SALE</label><br>
                        <input type="text" name="giasale" style="width:120%;" value="<?= $price_sale ?>">
                    </div>
                </div>
                <div class="row mb10 content3">
                    <div class="row mb10">
                        <label for="">LOẠI PHÒNG</label><br>
                        <select name="idlp" id="">
                            <?php
                            foreach ($listlp as $loaiphong) {
                                extract($loaiphong);
                                if ($iddm == $id_loaiphong) $s = "selected";
                                else $s = "";
                                echo '<option value="' . $id_loaiphong . '" ' . $s . '>' . $name_loaiphong . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="row mb10">
                        <label for="">HÌNH ẢNH</label><br>
                        <input type="file" name="img" style="margin-bottom:5px;">
                        <div class="img" style="width:50px;height:100px;"><?= $img ?></div>
                    </div>
                </div>
            </div>
            <div class="row mb10">
                <label for="">MÔ TẢ</label><br>
                <textarea name="mota" id="" cols="128%" rows="10" style="border:1px solid #FFCACA;"><?= $mota ?></textarea>
            </div>
            <div class="row mb10">
                <input type="hidden" value="<?= $id_phong ?>" name="id">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" name="nhaplai" value="NHẬP LẠI">
                <a href="index.php?act=listp"><input type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>
</div>