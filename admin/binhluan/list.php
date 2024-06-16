<div class="row">
    <div class="row mb headeradmin" style="width:148%;">
        <h1 style="padding: 15px 0;">ADMIN </h1>
    </div>
    <div class="row formtittle" style="width:148%;">
        <h3>DANH SÁCH BÌNH LUẬN</h3>
    </div>
    <div class="row formcontent" style="width:1040px;">
        <form action="index.php?act=listbl" method="post">
            <div class="row mb10 formdshanghoa" style="width:104%">
                <table>
                    <tr>
                        <th>MÃ BÌNH LUẬN</th>
                        <th>NỘI DUNG</th>
                        <th>MÃ KHÁCH HÀNG</th>
                        <th>NGÀY BÌNH LUẬN</th>
                        <th>MÃ PHÒNG</th>
                        <th style="background-color: #FFCACA;">ACTION</th>
                    </tr>
                    <?php foreach ($listbl as $binhluan) {?>
                        <?php extract($binhluan);?>
                        <?php $xoabl = "index.php?act=xoabl&id=" . $id_comment;?>
                        <tr>
                                        <td><?php echo  $id_comment ?></td>
                                        <td><?php echo   $noidung ?></td>
                                        <td><?php echo   $id_user ?></td>
                                        <td><?php echo   $ngaybinhluan ?></td>
                                        <td>P<?php echo   $id_phong ?></td>
                                        <td>
                                            <a onclick="return confirm('Bạn có thực sự muốn xóa không?');" href="<?php echo $xoabl ?>">
                                                <input type="button" value="Xóa">
                                            </a>
                                        </td>
                                    </tr>
                   <?php } ?>      
                </table>
            </div>
        </form>
      
    </div>
</div>
</div>