<?php
    require 'connect_to_mysql.php';
    /*echo $_POST["account"];
    echo $_POST["password"];*/
    $sql = "SELECT * FROM `user_table` WHERE account='{$_POST["account"]}' and password='{$_POST["password"]}'";
    echo $sql."<br>";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $cookie_name = "login";
        $cookie_value = $_POST["account"];
        echo "登入成功";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        header('Location: '.$uri.'/register_system/index.php');
    } else {
        // 帳密錯誤
        echo "帳戶或密碼錯誤";   
        header('Location: '.$uri.'/register_system/login_page.php'); 
    }
