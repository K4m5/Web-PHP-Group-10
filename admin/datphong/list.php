<div class="row">
    <div class="row mb headeradmin" style="width:1050px;">
        <h1 style="padding: 15px 0;">ADMIN </h1>
    </div>
    <div class="row formtittle" style="width:1050px;">
        <h3>DANH SÁCH ĐẶT PHÒNG</h3>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=listdp" method="post">
            <div class="row mb10 formdshanghoa" style="width:1050px;">
                <table>
                    <tr>
                        <th>GIAO DỊCH</th>
                        <th>MÃ ĐẶT PHÒNG</th>
                        <th>MÃ PHÒNG</th>
                        <th>MÃ KHÁCH HÀNG</th>
                        <th>SỐ KHÁCH</th>
                        <th>NGÀY ĐẾN</th>
                        <th>NGÀY TRẢ</th>
                        <th>TỔNG TIỀN</th>
                        <th>ACTION</th>
                    </tr>
                    <?php
                    foreach ($listdp as $datphong) {
                        extract($datphong);
                        if ($giaodich == 0) {
                            $giaodich = "Chưa thanh toán";
                        }
                        if ($giaodich == 1) {
                            $giaodich = "Đã thanh toán";
                        }
                        $suadp = "index.php?act=suadp&id=" . $id_order;
                        $xoadp = "index.php?act=xoadp&id=" . $id_order;
                        

                        echo '<tr>
                                        <td>'.$giaodich.'</td>
                                        <td>' . $id_order . '</td>
                                        <td>P' . $id_phong . '</td>
                                        <td>' . $id_user . '</td>
                                        <td>' . $sokhach . 'người</td>
                                        <td>' . $ngayden . '</td>
                                        <td>' . $ngaytra . '</td>
                                        <td>' . number_format($tongtien) . 'vnd</td>
                                       
                                        <td><a href="' . $suadp . '"><input type="button" value="Sửa"></a>  <a onclick="return DELETE()" href="' . $xoadp . '"><input type="button" value="Xóa"></a></td>
                                    </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="row mb10" style="display:flex;">
                <input type="button" id="btn1" value="Chọn tất cả">
                <input type="button" id="btn2" value="Bỏ chọn tất cả" style="margin-left:10px;">
                <input type="button" value="Xóa các mục đã chọn" style="margin-left:10px;">
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