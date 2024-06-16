<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-cyan-200  to-cyan-200 h-screen flex justify-center items-center text-white">
    <div class="bg-cyan-900 w-96 mb-16 mx-auto lg:h-4/5 h-full lg:rounded-lg text-center overflow-hidden p-5">

        <div class="w-36 h-36 border-solid border-4 border-rose-600 rounded-full overflow-hidden m-auto  ">
            <img src="./upload/132083046_3702406189839103_501186624219407700_n.jpg" alt="">
        </div>
        <div class="flex w-96 ml-5 mt-4">
            <label class="text-xl" for="">Họ và tên : </label><br>
            <h2 class="mx-3 text-xl"><?php echo $_SESSION['user']['username']?></h2>
        </div>
        <div class="flex w-96 ml-5">
            <label class="text-xl" for="">Password : </label><br>
            <h2 class="mx-3 text-xl"><?php echo $_SESSION['user']['password']?></h2>

        </div>
        <div class="flex w-96 ml-5">
            <label class="text-xl" for="">Email : </label><br>
            <h2 class="mx-3 text-xl"><?php echo $_SESSION['user']['email']?></h2>

        </div>
        <div class="flex w-96 ml-5">
            <label class="text-xl" for="">Địa chỉ : </label><br>
            <h2 class="mx-3 text-xl"><?php echo $_SESSION['user']['address']?></h2>

        </div>
        <div class="flex w-96 ml-5">
            <label class="text-xl" for="">Số điện thoại : </label><br>
            <h2 class="mx-3 text-xl"><?php echo $_SESSION['user']['tel']?></h2>

        </div>
        <div class="flex w-96 ml-5">
            <label class="text-xl" for="">Role : </label><br>
            <h2 class="mx-3 text-xl"><?php echo $_SESSION['user']['role']?></h2>
        </div>

        <div class="flex-wrap mt-5">
            <button
                class="w-36 h-10 border-solid border bg-transparent text-white rounded-xl hover:bg-rose-500 transition delay-150 duration-300 ease-in-out border-rose-600 m-2">
                <a href="./index.php?act=thoat"> Đăng xuất</a>
            </button>

            <button
                class="w-36 h-10 border-solid border bg-transparent text-white rounded-xl hover:bg-rose-500 transition delay-150 duration-300 ease-in-out border-rose-600 m-2">
                <a href="./update.php">Cập nhật</a>
            </button>
            <button
                class="w-36 h-10 border-solid border bg-transparent text-white rounded-xl hover:bg-rose-500 transition delay-150 duration-300 ease-in-out border-rose-600 m-2">
                <a href="./index.php?act=home">Trang chủ</a>
            </button>

        </div>
    </div>
</body>

</html>