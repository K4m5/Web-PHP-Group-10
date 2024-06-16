<div class="row">
    <div class="row mb headeradmin" style="width:1050px;">
        <h1 style="padding: 15px 0;">ADMIN </h1>
    </div>
    <div class="row mb10 formtittle" style="width:1050px;">
        <h3>CẬP NHẬT ĐẶT PHÒNG</h3>
    </div>
    <div class="thongbao" style="color: red;">
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
        ?>
    </div>
    <div class="row formcontent" style="width:1650px;">
        <form action="index.php?act=updatedp" method="post" enctype="multipart/form-data">
            <div class="row">
                <?php
                if (is_array($dp)) {
                    extract($dp);
                }
                ?>
                <div class="row mb10 content1">
                    <div class="row mb10">
                        <label for="">MÃ PHÒNG</label><br>
                        <input type="text" name="maphong" style="width:120%;" value="<?= $id_phong ?>" required>
                    </div>
                    <div class="row mb10">
                        <label for="">MÃ KHÁCH HÀNG<br></label>
                        <input type="text" name="makhachhang" style="width:120%;" value="<?= $id_user ?>" required>
                    </div>
                    <div class="row mb10">
                        <label for="">TỔNG TIỀN</label><br>
                        <input type="tongtien" name="tongtien" style="width:120%;border: 1px solid #FFCACA;padding: 10px;border-radius: 5px;" value="<?= $tongtien ?>">
                    </div>
                </div>
                <div class="row mb10 content2">
                    <div class="row mb10">
                        <label for="">NGÀY ĐẾN</label><br>
                        <input type="date" name="ngayden" style="width:120%;border: 1px solid #FFCACA;padding: 10px;border-radius: 5px;" value="<?= $ngayden ?>">
                    </div>
                    <div class="row mb10">
                        <label for="">NGÀY TRẢ</label><br>
                        <input type="date" name="ngaytra" style="width:120%;border: 1px solid #FFCACA;padding: 10px;border-radius: 5px;" value="<?= $ngaytra ?>">
                    </div>
                    <div class="row mb10">
                        <label for="">GIAO DỊCH</label><br>
                        <select name="giaodich" id="" style="border:1px solid #FFCACA;">
                            <option value="0">Chưa Thanh Toán</option>
                            <option value="1">Đã Thanh Toán</option>
                        </select>
                    </div>
                </div>
                <div class="row mb10 content3">
                    <div class="row mb10">
                        <label for="">SỐ KHÁCH</label><br>
                        <input type="text" name="sokhach" value="<?= $sokhach ?> " required>
                    </div>
                    
                    <div class="row mb10">
                        <label for="">TÌNH TRẠNG</label><br>
                        <input type="text" name="tinhtrang" style="margin-bottom:5px;" value="<?= $tinhtrang ?>">
                    </div>
                </div>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?php if (isset($id_order) && ($id_order > 0)) echo $id_order; ?>">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" name="nhaplai" value="NHẬP LẠI">
                <a href="index.php?act=listdp"><input type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>
</div>