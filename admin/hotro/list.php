<div class="row">
    <div class="row mb headeradmin" style="width:143%;">
        <h1 style="padding: 15px 0;">ADMIN </h1>
    </div>
    <div class="row formtittle" style="width:143%;">
        <h3>DANH SÁCH HỖ TRỢ</h3>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=thongke" method="post">
            <div class="row mb10 formdshanghoa" style="width:1050px;">
                <table>
                    <tr>
                        <th>MÃ HỖ TRỢ</th>
                        <th>TÊN KHÁCH HÀNG</th>
                        <th>SỐ ĐIỆN THOẠI</th>
                        <th>MESSAGE</th>
                        <th style="background-color: #FFCACA;">ACTION</th>
                    </tr>
                    <?php
                    foreach ($listhotro as $hotro) {
                        extract($hotro);
                        $xoaht = "index.php?act=xoaht&id=" . $id_hotro;
                        echo '<tr>
                                        <td>' . $id_hotro . '</td>
                                        <td>' . $name_user . '</td>
                                        <td>' . $tel . '</td>
                                        <td>' . $ghichu . '</td>
                                        <td><a onclick="return DELETE()" href="' . $xoaht . '"><input type="button" value="Xóa"></a></td>
                                    </tr>';
                    }
                    ?>
                </table>
            </div>
        </form>
        <script>
        function DELETE() {
            return confirm("Bạn có chắc muốn xóa " + "?");
        }
        </script>
    </div>
</div>
</div>