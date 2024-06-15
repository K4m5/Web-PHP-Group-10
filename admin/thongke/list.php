<div class="row">
    <div class="row mb headeradmin" style="width:143%;">
        <h1 style="padding: 15px 0;">ADMIN </h1>
    </div>
    <div class="row formtittle" style="width:143%;">
        <h3>DANH SÁCH THỐNG KÊ</h3>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=thongke" method="post">
            <div class="row mb10 formdshanghoa" style="width:1050px;"><br>
                <h3 style="font-weight: 600;">THỐNG KÊ LOẠI PHÒNG</h3>
                <table>
                    <tr>
                        <th>MÃ LOẠI PHÒNG</th>
                        <th>TÊN LOẠI PHÒNG</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>
                    <?php
                    foreach ($listthongke as $thongke) {
                        extract($thongke);
                        echo '<tr>
                                        <td>' . $malp . '</td>
                                        <td>' . $tenlp . '</td>
                                        <td>' . $countp . '</td>
                                        <td>' . number_format($maxprice) . 'vnd</td>
                                        <td>' . number_format($minprice) . 'vnd</td>
                                        <td>' . number_format($avgprice) . 'vnd</td>
                                    </tr>';
                    }
                    ?>
                </table><br><br>
                <h3 style="font-weight: 600;">THỐNG KÊ PHÒNG</h3>
                <table>
                    <tr>
                        <th>MÃ PHÒNG</th>
                        <th>TÊN PHÒNG</th>
                        <th>GIÁ</th>
                        <th>SỐ KHÁCH TỐI ĐA</th>
                        <th>MÃ LOẠI PHÒNG</th>
                    </tr>
                    <?php
                    foreach ($listthongkep as $thongke) {
                        extract($thongke);
                        echo '<tr>
                                        <td>' . $map . '</td>
                                        <td>' . $tenp . '</td>
                                        <td>' . number_format($price) . 'vnd</td>
                                        <td>' . $sokhach . '/người</td>
                                        <td>' . $id_loaiphong . '</td>
                                    </tr>';
                    }
                    ?>
                </table><br><br>
                <h3 style="font-weight: 600;">THỐNG KÊ ĐẶT PHÒNG</h3>
                <table>
                    <tr>
                        <th>MÃ LOẠI PHÒNG</th>
                        <th>MÃ PHÒNG</th>
                        <th>MÃ KHÁCH HÀNG</th>
                        <th>SỐ KHÁCH</th>
                        <th>TỔNG TIỀN</th>
                    </tr>
                    <?php
                    foreach ($listthongkedp as $thongke) {
                        extract($thongke);
                        echo '<tr>
                                        <td></td>
                                        <td>' . $map . '</td>
                                        <td>' . $tenkh . '</td>
                                        <td>' . $sokhach . 'người</td>
                                        <td>' . number_format($tongtien) . 'vnd</td>
                                    </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="row mb10">
                <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
            </div>
        </form>
    </div>
</div>
</div>