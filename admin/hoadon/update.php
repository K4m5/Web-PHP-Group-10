<?php
if (is_array($hd)) {
    extract($hd);
    $mahd = $id_bill;
}
?>
<div class="row">
    <div class="row mb headeradmin" style="width:1000px;">
        <h1 style="padding: 15px 0;">ADMIN </h1>
    </div>
    <div class="row mb10 formtittle" style="width:1000px;">
        <h3>CẬP NHẬT HÓA ĐƠN</h3>
    </div>
    <?php
    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
    ?>
    <div class="row formcontent">
        <form action="index.php?act=updatehd" method="post">
            <div class="row mb10">
                <label for="">MÃ HÓA ĐƠN</label><br>
                <input type="text" value="<?= $id_bill ?>" name="idhd" style="width:292%;" disabled>
            </div>
            <div class="row mb10">
                <label for="">MÃ ĐẶT PHÒNG</label><br>
                <input type="text" name="id_order" style="width:292%;" value="<?= $id_order ?>">
            </div>
            <div class="row mb10">
                <label for="">MÃ PHÒNG</label><br>
                <input type="text" name="id_phong" style="width:292%;" value="<?= $id_phong ?>">
            </div>
            <div class="row mb10">
                <label for="">MÃ KHÁCH HÀNG</label><br>
                <input type="text" name="id_user" style="width:292%;" value="<?= $id_user ?>">
            </div>
            <div class="row mb10">
                <label for="">TỔNG TIỀN</label><br>
                <input type="text" name="tongtien" style="width:292%;" value="<?= $tongtien ?>">
            </div>
            <div class="row mb10">
                <label for="">GIAO DỊCH</label><br>
                <select name="giaodich" id="" style="border:1px solid #FFCACA;">
                    <option value="0">Thất Bại</option>
                    <option value="1">Thành Công</option>
                    <?php
                    foreach ($listhd as $hd) {
                        extract($hd);
                        if ($mahd == $id_bill) $s = "selected";
                        else $s = "";
                        echo '<option value="' . $id_bill . '" ' . $s . '>' . $giaodich . '</option>';
                    }
                    ?>
                </select><br><br>
            </div>
            <div class="row mb10" style="margin-top:10px;">
                <input type="hidden" name="id" value="<?php if (isset($id_bill) && ($id_bill > 0)) echo $id_bill; ?>">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" name="nhaplai" value="NHẬP LẠI">
                <a href="index.php?act=listhd"><input type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>
</div>