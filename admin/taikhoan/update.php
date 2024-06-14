<?php
if (is_array($tk)) {
    extract($tk);
}
?>
<div class="row">
    <div class="row mb headeradmin" style="width:1000px;">
        <h1 style="padding: 15px 0;">ADMIN </h1>
    </div>
    <div class="row mb10 formtittle" style="width:1000px;">
        <h3>CẬP NHẬT TÀI KHOẢN</h3>
    </div>
    <?php
    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
    ?>
    <div class="row formcontent">
        <form action="index.php?act=updatetk" method="post">
            <div class="row mb10">
                <label for="">Id</label><br>
                <input type="text" placeholder="auto number" name="id" style="width:292%;" disabled>
            </div>
            <div class="row mb10">
                <label for="">TÊN ĐĂNG NHẬP</label><br>
                <input type="text" name="user" style="width:292%;" value="<?php if (isset($username) && ($username != "")) echo $username; ?>">
            </div>
            <div class="row mb10">
                <label for="">PASSWORD</label><br>
                <input type="text" name="password" style="width:292%;" value="<?= $password ?>">
            </div>
            <div class="row mb10">
                <label for="">EMAIL</label><br>
                <input type="text" name="email" style="width:292%;" value="<?= $email ?>">
            </div>
            <div class="row mb10">
                <label for="">ADDRESS</label><br>
                <input type="text" name="address" style="width:292%;" value="<?= $address ?>">
            </div>
            <div class="row mb10">
                <label for="">SỐ ĐIỆN THOẠI</label><br>
                <input type="text" name="tel" style="width:292%;" value="<?= $tel ?>">
            </div>
            <div class="row mb10">
                <label for="">ROLE</label><br>
                <input type="text" name="role" style="width:292%;" value="<?= $role ?>" disabled>
            </div>
            <div class="row mb10" style="margin-top:10px;">
                <input type="hidden" name="id" value="<?php if (isset($id_user) && ($id_user > 0)) echo $id_user; ?>">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" name="nhaplai" value="NHẬP LẠI">
                <a href="index.php?act=dskh"><input type="button" value="DANH SÁCH"></a>
            </div>
        </form>
    </div>
</div>
</div>