<div class="row">
    <div class="row mb headeradmin" style="width:1050px;">
        <h1 style="padding: 15px 0;">ADMIN </h1>
    </div>
    <div class="row formtittle" style="width:1050px;">
        <h3>QUẢN LÝ PHÒNG - TÌM KIẾM PHÒNG</h3>
    </div>

    <div class="row formcontent">
        <form action="index.php?act=searchp" method="post">
            <div class="timkiemphong" style="margin-bottom:20px;display:flex;">
            <input type="date" name="ngayden" placeholder="Check phòng" style="width:50%;border-radius:5px;border: 1px solid #FFCACA;">
            <input type="date" name="ngaytra" placeholder="Check phòng" style="width:50%;margin-left:10px;border-radius:5px;border: 1px solid #FFCACA;">
            <input type="submit" name="check" value="Check" style="padding:10px;margin-left:10px;border: 1px solid #FFCACA;">   
        </div>
        <div style="color:red; margin-bottom:10px;">
            <?php
                if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?> 
           
        </div>
            <div class="row mb10 formdshanghoa" style="width:1050px;">
                <table>
                    <tr>
                        <th>LOẠI PHÒNG</th>
                        <th>MÃ PHÒNG</th>
                        <th>TÊN PHÒNG</th>
                        <th>HÌNH ẢNH</th>
                        <th>GIÁ</th>
                        <th>GIÁ SALE</th>
                        <th>SỐ KHÁCH TỐI ĐA</th>
                        <th>TRẠNG THÁI</th>
                    </tr>
                      
                    <?php
                    foreach ($listp as $phong) {
                        extract($phong);
                        if ((($_POST['ngayden'] === $ngayden) || ($_POST['ngaytra'] === $ngaytra)) || (($_POST['ngayden'] === $ngayden) || ($_POST['ngaytra'] <= $ngaytra )) || (($_POST['ngayden'] <= $ngayden) || ($_POST['ngaytra'] <= $ngaytra))){
                            $sql = "update phong set trangthai='Hết' where id_phong=" . $id_phong;
                            
                           
                        }if ((($_POST['ngayden'] === $ngayden) || ($_POST['ngaytra'] <= $ngaytra)) || (($_POST['ngayden'] <= $ngayden) || ($_POST['ngaytra'] === $ngaytra)) || (($_POST['ngayden'] >= $ngayden) || ($_POST['ngaytra'] <= $ngaytra))){
                            $sql = "update phong set trangthai='Trống' where id_phong=" . $id_phong;
                        
                        } else {
                            $thongbao = 'Tìm kiếm không hợp lệ';
                        }
                        pdo_query($sql);
                        die();
                        var_dump($_POST['ngayden']);
                        var_dump($_POST['ngaytra']);
                        
                        echo '<tr>      
                                        <td>' . $id_loaiphong . '</td>
                                        <td>P' . $id_phong . '</td>
                                        <td>' . $name_phong . '</td>
                                        <td>' . $img . '</td>
                                        <td>' . $price . 'vnd/1 đêm</td>
                                        <td>-' . $price_sale . 'vnd</td>
                                        <td>' . $sokhach . 'người</td>
                                        <td>'. $trangthai.'</td>
                                    </tr>';
                    }
                    ?>
                </table>
            </div>
        </form>
    </div>
</div>
</div>
