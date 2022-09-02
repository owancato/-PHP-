<?php
    require 'connect_to_mysql.php';
    /*echo $_POST["account"];
    echo $_POST["password"];*/
    $sql = "SELECT * FROM `user_table` WHERE account='{$_POST["account"]}'";
    echo $sql."<br>";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // 帳號已被註冊
        echo "帳號已被註冊";
        header('Location: '.$uri.'/register_system/register_page.php');
    } else {
        $sql = "INSERT INTO `user_table` (`account`, `password`) VALUES ('{$_POST["account"]}', '{$_POST["password"]}')";
        echo $sql;
        if ($conn->query($sql) === TRUE){
            $cookie_name = "login";
            $cookie_value = $_POST["account"];
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
            header('Location: '.$uri.'/register_system/index.php');
        }else{
            echo "WTF";
        }
    
    }
