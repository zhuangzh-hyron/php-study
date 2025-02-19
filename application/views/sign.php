<?php defined('BASEPATH') or exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注册</title>
</head>
<body>
    <h2>用户注册</h2>
    <?php echo form_open('home/signUp');?>
        <label for="username">用户名：</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">密码：</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="confirm_password">确认密码：</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
        <span id="password_check_message"></span><br><br>
        
        <button type="submit" id="submit_btn" name="register" value="true" disabled>注册</button> <?php // 后台还要加check了?>
        <?php echo form_close();?>
    
    <script>
        let times = 0;
        const password = document.getElementById("password");
        const confirm_password = document.getElementById("confirm_password");
        const check_msg = document.getElementById("password_check_message");
        const subbtn = document.getElementById("submit_btn");

        function check_password(){
            if(password.value === confirm_password.value){
                subbtn.disabled = false;
                check_msg.textContent = ""
            }else{
                check_msg.textContent = "两次密码不一致!"
            }
            times++;
        }

        if(times > 0){
            password.addEventListener("input",check_password);
        }
        confirm_password.addEventListener("input",check_password);

    </script>
</body>
</html>