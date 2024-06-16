
<div class="ct-img" style="margin-top: 20px;">
    <div class="ct" style="border-radius:20px;border:2px solid #e6dddd;height:50%;width:50%;margin-left:23%;margin-top:15%; background: #fff; padding: 10px; box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);">
        <div class="font" style="text-align: center;
    font-size: 2.5vw;color:#251B37;margin-top:5%;"><Label>Log in to your account</Label></div><br>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="form1" style="text-align:center;">
                <label for="" style="color: #372948;margin-left:-38%;">Username</label><br>
                <input type="text" name="username" style="padding: 8px 0;width:50%;border-radius:10px;border:1px solid #FFCACA;" required><br><br>
                <label for="" style="color: #372948;margin-left:-38%;">Password</label><br>
                <input type="password" name="password" style="padding: 8px 0;width:50%;border-radius:10px;border:1px solid #FFCACA;" required>
            </div><br>
            <div class="form2" style="text-align:center;">
                <input type="checkbox" name="checkbox" id="">
                <label for="" style="color: #372948;">Remember account?</label><br><br>
            </div>
            <div class="form3" style="text-align:center;margin-bottom:15px;">
                <input type="submit" value="Log in" name="dangnhap" style="background-color: #FFCACA;border: 1px solid #FFCACA;border-radius: 10px;color: #372948;padding: 8px 35px; margin: 0 25px;">
                <input type="reset" value="Reset" style="background-color: #FFCACA;border: 1px solid #FFCACA;border-radius: 10px;color: #372948;padding: 8px 35px; margin: 0 25px;">
                <!-- <button style="background-color: #FFCACA;border: 1px solid #FFCACA;border-radius: 10px;padding: 8px 35px;"><a href="index.php?act=dangky" style="color: #372948;text-decoration: none;">Register</a></button><br><br> -->
            </div>
            <div class="form4" style="text-align:center;">
                <button style="background-color: #372948;border: 1px solid #372948;border-radius: 10px;padding: 8px 35px;"><a href="index.php" style="color: #FFCACA;text-decoration: none;">Back to home</a></button>
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
