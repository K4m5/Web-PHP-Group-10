<div class="row">
    <div class="row mb headeradmin" style="width:148%;">
        <h1 style="padding: 15px 0;">ADMIN </h1>
    </div>
    <div class="row formtittle" style="width:148%;">
        <h3>DANH SÁCH HÓA ĐƠN</h3>
    </div>
    <div class="row formcontent" style="width:1040px;">
        <form action="index.php?act=listhd" method="post">
            <div class="row mb10 formdshanghoa" style="width:104%">
                <table>
                    <tr>
                        <th>GIAO DỊCH</th>
                        <th>MÃ HÓA ĐƠN</th>
                        <th>MÃ ĐẶT PHÒNG</th>
                        <th>MÃ PHÒNG</th>
                        <th>MÃ KHÁCH HÀNG</th>
                        <th>TỔNG TIỀN</th>
                        <th style="background-color: #FFCACA;">ACTION</th>
                    </tr>
                    <?php foreach ($listhd as $hoadon) {?>
                        <?php extract($hoadon);?>
                        <?php $xoahd = "index.php?act=xoahd&id=" . $id_bill;?>
                        <?php $suahd = "index.php?act=suahd&id=" . $id_bill;?>
                        <?php if ($role == 0) {
                            $role = "Thất Bại";
                        }
                            if ($role == 1) {
                                $role = "Thành Công";
                        }
                        ?>
                        <tr>
                                        <td><?php echo  $role ?></td>
                                        <td><?php echo  $id_bill ?></td>
                                        <td><?php echo   $id_order ?></td>
                                        <td>P<?php echo   $id_phong ?></td>
                                        <td><?php echo   $id_user ?></td>
                                        <td><?php echo   number_format($tongtien) ?>vnd</td>

                                        
                                        <td>
                                            <a onclick="return confirm('Bạn có thực sự muốn xóa không?');" href="<?php echo $xoahd ?>">
                                                <input type="button" value="Xóa">
                                            </a>
                                            <a href="<?php echo $suahd ?>"><input type="button" value="Sửa"></a>
                                        </td>
                                    </tr>
                   <?php } ?>
                    
                </table>
            </div>
            <div class="row mb10">
                <input type="button" id="btn1" value="Chọn tất cả">
                <input type="button" id="btn2" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
            </div>
        </form>
      
    </div>
</div>
</div>