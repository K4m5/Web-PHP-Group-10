<?php
if (is_array($bl)) {
    extract($bl);
}
?>
<div class="row">
    <div class="row mb headeradmin" style="width:1000px;">
        <h1 style="padding: 15px 0;">ADMIN </h1>
    </div>
    <div class="row mb10 formtittle" style="width:1000px;">
        <h3>CẬP NHẬT BÌNH LUẬN</h3>
    </div>
    <?php
    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
    ?>
    <div class="row formcontent">
        <form action="index.php?act=updatebl" method="post">
            <div class="row mb10">
                <label for="">MÃ BÌNH LUẬN</label><br>
                <input type="text" value="<?= $id_comment ?>" name="id" style="width:292%;" disabled>
            </div>
            <div class="row mb10">
                <label for="">NỘI DUNG</label><br>
                <textarea name="noidung" id="" cols="123%" rows="10" style="border:1px solid #FFCACA;"><?= $noidung?></textarea>
            </div>
            <div class="row mb10">
                <label for="">MÃ KHÁCH HÀNG</label><br>
                <input type="text" name="id_user" style="width:292%;" value="<?= $id_user ?>">
            </div>
            <div class="row mb10">
                <label for="">NGÀY BÌNH LUẬN</label><br>
                <input type="date" name="ngaybinhluan" style="width:292%;border:1px solid #FFCACA;border-radius:5px;" value="<?= $ngaybinhluan ?>">
            </div>
            <div class="row mb10">
                <label for="">ID PHÒNG</label><br>
                <input type="text" name="id_phong" style="width:292%;" value="<?= $id_phong ?>">
            </div>
            <div class="row mb10" style="margin-top:10px;">
                <input type="hidden" name="id" value="<?php if (isset($id_comment) && ($id_comment > 0)) echo $id_comment; ?>">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" name="nhaplai" value="NHẬP LẠI">
                <a href="index.php?act=listbl"><input type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>
</div>