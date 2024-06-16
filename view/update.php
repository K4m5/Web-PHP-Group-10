<?php
    session_start();
    include '../model/pdo.php';
    include '../model/taikhoan.php';
    // $id = $_POST['id'];
    // $user = $_POST['user'];
    // $password = $_POST['pass'];
    // $email = $_POST['email'];
    // $address = $_POST['address'];
    // $tel = $_POST['tel'];
    // echo $id, $user, $password, $email, $address, $tel;
    // $update = update_taikhoan($id, $user, $password, $email, $address, $tel);
    // // $_SESSION['user'] = $update;
    // $thongbao = "Cập nhật thành công!";
    
   

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
    <div class="w-1/2 px-8 mx-auto border border-slate-400 rounded mt-10">

        <h1 class="text-center text-3xl my-5">Cập nhật thông tin</h1>
        <form action="./index.php?act=capnhat" method="POST" class="w-full px-24 mx-auto "
            enctype="multipart/form-data">

            <input type="text" name="id" value="<?php echo $_SESSION['user']['id_user']?>"
                class="w-full form-control border border-slate-400 rounded px-24 py-1  border" placeholder="auto number"
                hidden>


            <div class="my-4 ">
                <label for="" class="text-lg">Họ và tên </label>
                <br>
                <input type="text" name="user" value="<?php echo $_SESSION['user']['username']?>"
                    class="w-full form-control border border-slate-400 rounded px-24 py-1  border"
                    placeholder="auto number">
            </div>

            <div class="my-4">
                <label for="" class="text-lg">Password</label>
                <br>
                <input name="pass" value="<?php echo $_SESSION['user']['password']?>"
                    class="form-control w-full border border-slate-400 rounded px-24 py-1  border" type="text">
            </div>
            <div class="my-4 ">
                <label for="" class="text-lg">Email</label>
                <br>
                <input type="text" name="email" value="<?php echo $_SESSION['user']['email']?>"
                    class="form-control border w-full border-slate-400 rounded px-24 py-1 border">
            </div>
            <div class="my-4 ">
                <label for="" class="text-lg">Địa chỉ</label>
                <br>
                <input name="address" value="<?php echo $_SESSION['user']['address']?>"
                    class="form-control w-full border border-slate-400 rounded px-24 py-1 border" type="text">
            </div>

            <div class="my-4 ">
                <label for="" class="text-lg">Số điện thoại</label>
                <br>
                <input type="text" name="tel" value="<?php echo $_SESSION['user']['tel']?>"
                    class="form-control border w-full border-slate-400 rounded px-24 py-1  border">
            </div>
            <div class="my-4 ">
                <button type="submit" name="capnhat"
                    class="text-white p-2 bg-lime-700  h-10 border rounded btn btn-default">Cập nhật</button>
            </div>

        </form>
        <div class="my-4 ">
            <a href="./index.php"><button type="submit" name="capnhat"
                    class="text-white p-2 bg-lime-700  h-10 border rounded btn btn-default">Thoát</button></a>
        </div>

    </div>
</body>
<script>
var image = document.querySelector('#image');
var changeImg = document.querySelector('#changeimg');
console.log(changeImg);

changeImg.addEventListener('change', function(e) {
    console.log(e);
    var file = e.target.files[0];
    var src = URL.createObjectURL(file);
    image.src = src;
})
</script>

</html>