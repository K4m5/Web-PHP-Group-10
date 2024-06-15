<div class="row">
    <div class="row mb headeradmin" style="width:1050px;">
        <h1 style="padding: 15px 0;">ADMIN </h1>
    </div>
    <div class="row mb10 formtittle" style="width:1050px;">
        <h3>THÊM MỚI PHÒNG</h3>
    </div>
    <div class="row formcontent" style="width:1650px;">
    <span class="thongbao" style="color: red;">
    <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
    ?>
    </span>
        <form action="index.php?act=addp" method="post" enctype="multipart/form-data">
            <div class="row" style="margin-top:15px;">
                <div class="row mb10 content1">
                    <div class="row mb10">
                        <label for="">MÃ PHÒNG</label><br>
                        <input type="text" name="maphong" placeholder="auto number" style="width:120%;" disabled>
                    </div>
                    <div class="row mb10">
                        <label for="" style="display:flex;">TÊN PHÒNG <p style="color:red;"> *</p><br></label>
                        <input type="text" name="tenphong" style="width:120%;">
                        <span class="thongbao" style="color: red;">
                        <?php
                            if (isset($errname) && ($errname != "")) echo $errname;
                        ?>
                        </span>
                    </div>
                    <div class="row mb10">
                        <label for="" style="display:flex;">SỐ KHÁCH TỐI ĐA <p style="color:red;">*</p><br></label>
                        <input type="text" name="sokhach" style="width:120%;">
                        <span class="thongbao" style="color: red;">
                        <?php
                            if (isset($errsokhach) && ($errsokhach != "")) echo $errsokhach;
                        ?>
                        </span>
                    </div>
                </div>
                <div class="row mb10 content2">
                    <div class="row mb10">
                        <label for="" style="display:flex;">ĐƠN GIÁ <p style="color:red;">*</p><br></label>
                        <input type="text" name="gia" style="width:120%;">
                        <span class="thongbao" style="color: red;">
                        <?php
                            if (isset($errgia) && ($errgia != "")) echo $errgia;
                        ?>
                        </span>
                    </div>
                    <div class="row mb10">
                        <label for="">GIÁ SALE</label><br>
                        <input type="text" name="giasale" style="width:120%;">
                    </div>
                </div>
                <div class="row mb10 content3">
                    <div class="row mb10">
                        <label for="">LOẠI PHÒNG</label><br>
                        <select name="idlp" id="" style="border:1px solid #FFCACA;">
                            <?php
                            foreach ($listlp as $loaiphong) {
                                extract($loaiphong);
                                echo '<option value="' . $id_loaiphong . '">' . $name_loaiphong . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="row mb10">
                        <label for="">HÌNH ẢNH</label><br>
                        <input type="file" name="img">
                    </div>
                </div>
            </div>
            <div class="row mb10">
                <label for="">MÔ TẢ</label><br>
                <textarea name="mota" id="" cols="131%" rows="10" style="border:1px solid #FFCACA;"></textarea>
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" name="nhaplai" value="NHẬP LẠI">
                <a href="index.php?act=listp"><input type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>
</div>