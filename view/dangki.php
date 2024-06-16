<?php
session_start();
include '../model/pdo.php';
include '../model/taikhoan.php';

    $error = array();
    $data = array();
    if (isset($_POST['dangki']) && ($_POST['dangki'])) {
        $data['username'] = isset($_POST['username']) ? $_POST['username'] : '';
        $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
        $data['password'] = isset($_POST['password']) ? $_POST['password'] : '';
        $data['phone'] = isset($_POST['phone']) ? $_POST['phone'] : '';
        $data['add'] = isset($_POST['add']) ? $_POST['add'] : '';
        function is_email($str) {
            return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
        }
        function is_password($password) {
            $parttern = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,}$/";
            if (preg_match($parttern, $password))
                return true;
        }
        function validate_mobile($mobile){
            return preg_match('/^[0-9]{10}+$/', $mobile);
        }
        if (empty($data['username'])) {
            $error['username'] = 'Vui lòng nhập tên';
        }
        if (empty($data['email'])) {
            $error['email'] = 'Vui lòng nhập địa chỉ email ';
        }else if (!is_email($data['email'])){
            $error['email'] = 'Email không đúng định dạng';
        }

        if (empty($data['password'])) {
            $error['password'] = 'Vui lòng nhập mật khẩu';
        }else {
            // Kiểm tra định dạng password
            if (!is_password($_POST['password'])) {
                $error['password'] = "Password không đúng định dạng";
            } else {
                $password = $_POST['password'];
            }
        }

        if (empty($data['phone'])) {
            $error['phone'] = 'Vui lòng nhập số điện thoại';
        }else {
            // Kiểm tra định dạng password
            if (!validate_mobile($_POST['phone'])) {
                $error['phone'] = "Số điện thoại không đúng định dạng";
            } else {
                $phone = $_POST['phone'];
            }
        }
        if (empty($data['add'])) {
            $error['add'] = 'Vui lòng nhập địa chỉ';
        }
        if (!$error) {
            $user = $_POST['username'];
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $tel = $_POST['phone'];   
            $address = $_POST['add'];
            $sql = "select * from taikhoan";
            $listtaikhoan=pdo_query($sql);
            $check = false;
            foreach($listtaikhoan as $taikhoan){
                if($taikhoan['username'] == $user || $taikhoan['email'] == $email){
                    $check = true;
                }else{
                    $check = false;
                }
            }
            if($check === true){
                $thongbao = "Tên hoặc địa chỉ email đã được sử dụng để đăng kí . Vui lòng đăng kí bằng tên và tài khoản email khác !";

            }else if($check === false){
                insert_taikhoan($user, $pass, $email, $tel, $address);
                $thongbao = "Đã đăng kí thành công!.Vui lòng đăng nhập để thực hiện các chức năng";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <div class="ct-img" style="margin: 10px 0px 20px 0px;">

        <div class="ct"
            style="border-radius:20px;border:2px solid #FFCACA;height:90%;width:50%;margin-left:25%;margin-top:3%;box-shadow: 5px 5px 8px #251B37, 10px 10px 8px #372948, 15px 15px 8px #FFCACA;">
            <div class="font" style="text-align: center;
          font-size: 2.5vw;color:#251B37;margin-top:5%;"><Label>Đăng kí</Label></div><br>

            <form action="" method="post">
                <div class="form1 " style="text-align:center;">

                    <div>
                        <label for="" class="text-lg" style="color: #000;margin-left:-38%; ">Username</label><br>
                        <input type="text" name="username" class="bg-inherit"
                            style="padding: 8px 10px;width:50%;border-radius:10px;border:1px solid #FFCACA"
                            value="<?php echo isset($data['username']) ? $data['username'] : ''; ?>">
                        <br>
                        <span class="" style="color: red;">
                            <?php echo isset($error['username']) ? $error['username'] : ''; ?>
                        </span>
                    </div>

                    <?php
                          if(isset($thongbao)&&($thongbao!="")){?>

                    <div class="w-96 h-64 fixed inset-y-60 inset-x-1/3 rounded-lg shadow-2xl border-solid z-10 bg-white"
                        style="margin-left:85px;">
                        <i class="text-black py-5  text-5xl text-center fa-sharp fa-solid fa-circle-check"></i>
                        <p class="text-black pb-5 text-2xl text-center"><?php echo $thongbao;?></p>
                        <div class="form4" style="text-align:center;">
                            <button class="bg-gradient-to-r from-purple-500 to-pink-500"
                                style="border: 1px solid #fff;border-radius: 10px;padding: 5px 35px;"><a
                                    href="./dangnhap.php" style="color: #FFCACA;text-decoration: none;">Back to
                                    login</a></button>
                        </div>
                    </div>

                    <?php } ?>

                    <div>
                        <label for="" class="text-lg" style="color: #000;margin-left:-38%;">Pass</label><br>
                        <input type="password" class="bg-inherit" name="password"
                            style="padding: 8px 10px;width:50%;border-radius:10px;border:1px solid #FFCACA"
                            value="<?php echo isset($data['password']) ? $data['password'] : ''; ?>">
                        <br>
                        <span class="w-100" style="color: red; ">

                            <?php echo isset($error['password']) ? $error['password'] : ''; ?>
                        </span>
                    </div>

                    <div>
                        <label for="" class="text-lg" style="color: #000;margin-left:-38%;">Email</label><br>
                        <input type="text" class="bg-inherit" name="email"
                            style="padding: 8px 10px;width:50%;border-radius:10px;border:1px solid #FFCACA"
                            value="<?php echo isset($data['email']) ? $data['email'] : ''; ?>">
                        <br>
                        <span style="color: red;">
                            <?php echo isset($error['email']) ? $error['email'] : ''; ?>
                        </span>
                    </div>

                    <div>
                        <label for="" class="text-lg" style="color: #000;margin-left:-38%;">Số điện thoại</label><br>
                        <input type="text" name="phone" class="bg-inherit text-black"
                            style="padding: 8px 10px;width:50%;border-radius:10px;border:1px solid #FFCACA;"
                            value="<?php echo isset($data['phone']) ? $data['phone'] : ''; ?>">
                        <br>
                        <span style="color: red;">
                            <?php echo isset($error['phone']) ? $error['phone'] : ''; ?>
                        </span>
                    </div>
                    <div>
                        <label for="" class="text-lg" style="color: #000;margin-left:-38%;">Địa chỉ</label><br>
                        <input type="text" name="add" class="bg-inherit text-black"
                            style="padding: 8px 10px;width:50%;border-radius:10px;border:1px solid #FFCACA;"
                            value="<?php echo isset($data['add']) ? $data['add'] : ''; ?>">
                        <br>
                        <span style="color: red;">
                            <?php echo isset($error['add']) ? $error['add'] : ''; ?>
                        </span>
                    </div>



                </div>
                <br>

                <div class="form3" style="text-align:center;margin-bottom:15px;">
                    <input type="submit" value="Đăng kí" name="dangki" class=" mx-2 "
                        style="background-color: #FFCACA;border: 1px solid #fff;border-radius: 10px;color: #000;padding: 8px 35px; cursor: pointer;">
                    <input type="reset" value="Reset" class="bg-rose-500 mx-2"
                        style="background-color: #FFCACA;border: 1px solid #fff;border-radius: 10px;color: #000;padding: 8px 35px; cursor: pointer">
                    <!-- <button style="background-color: #FFCACA;border: 1px solid #FFCACA;border-radius: 10px;padding: 8px 35px;"><a href="index.php?act=dangky" style="color: #fff;text-decoration: none;">Register</a></button><br><br> -->
                </div>
                <div class="form4" style="text-align:center;">
                    <button class=""
                        style="background-color: #FFCACA; border:none;border-radius: 10px;padding: 8px 35px; cursor: pointer; margin: 10px">
                        <a href="../view/index.php" style="color: #000;text-decoration: none;">Back to home</a>
                    </button>
                </div>
                <div class="" style="text-align:center;color: red;">
                    <?php
                      if(isset($txt_erro)&&($txt_erro!="")){
                          echo $txt_erro;
                      }
                  ?>
                </div>
            </form>

        </div>
    </div>
</body>

</html>