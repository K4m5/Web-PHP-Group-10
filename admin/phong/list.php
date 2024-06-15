<div class="row">
    <div class="row mb headeradmin" style="width:1050px;">
        <h1 style="padding: 15px 0;">ADMIN </h1>
    </div>
    <div class="row formtittle" style="width:1050px;">
        <h3>QUẢN LÝ PHÒNG</h3>
    </div>

    <div class="row formcontent">
        <form action="index.php?act=listp" method="post">
            <div class="tk" style="display:flex;">
            <input type="text" name="kyw" placeholder="Tìm kiếm phòng" style="width:70%;">
            <select name="idlp" style="margin-left:20px;padding:10px;width:50%;border-radius:5px;border: 1px solid #FFCACA;color:#372948;">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listlp as $loaiphong) {
                    extract($loaiphong);
                    echo '<option value="' . $id_loaiphong . '">' . $name_loaiphong . '</option>';
                }
                ?>
            </select>
            <input type="submit" name="gui" value="Tìm Kiếm" style="margin-left:20px;">
            </div><br><br>
            <div class="row mb10 formdshanghoa" style="width:1050px;">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ PHÒNG</th>
                        <th>TÊN PHÒNG</th>
                        <th>HÌNH ẢNH</th>
                        <th>GIÁ</th>
                        <th>GIÁ SALE</th>
                        <th>SỐ KHÁCH TỐI ĐA</th>
                        <th>MÔ TẢ</th>
                        <th>ACTION</th>
                    </tr>
                    <?php
                    foreach ($listp as $phong) {
                        extract($phong);
                        $suap = "index.php?act=suap&id=" . $id_phong;
                        $xoap = "index.php?act=xoap&id=" . $id_phong;
                        $img = "../upload/" . $img;
                        if (is_file($img)) {
                            $img = "<img src='" . $img . "' height='80px'>";
                        } else {
                            $img = "No photo";
                        }
                        echo '<tr>
                                        <td><input type="checkbox" name="name"></td>
                                        <td>P' . $id_phong . '</td>
                                        <td>' . $name_phong . '</td>
                                        <td>' . $img . '</td>
                                        <td>' . number_format($price) . 'vnd</td>
                                        <td>-' . $price_sale . 'vnd</td>
                                        <td>' . $sokhach . 'người</td>
                                        <td>' . $mota . '</td>
                                        <td><a href="' . $suap . '"><input type="button" value="Sửa"></a>  <a onclick="return DELETE()" href="' . $xoap . '"><input type="button" value="Xóa"></a></td>
                                    </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="row mb10" style="display:flex;">
                <input type="button" id="btn1" value="Chọn tất cả">
                <input type="button" id="btn2" value="Bỏ chọn tất cả" style="margin-left:10px;">
                <input type="button" value="Xóa các mục đã chọn" style="margin-left:10px;">
                <a href="index.php?act=addp"><input type="button" value="Nhập thêm" style="margin-left:10px;"></a>
            </div>
        </form>
        <script>
            document.getElementById("btn1").onclick = function() {

                var checkboxes = document.getElementsByName('name');


                for (var i = 0; i < checkboxes.length; i++) {
                    checkboxes[i].checked = true;
                }
            }
            document.getElementById("btn2").onclick = function() {

                var checkboxes = document.getElementsByName('name');


                for (var i = 0; i < checkboxes.length; i++) {
                    checkboxes[i].checked = false;
                }
            }
        </script>
        <script>
            function DELETE() {
                return confirm("Bạn có chắc muốn xóa " + "?");
            }
        </script>
    </div>
</div>
</div>