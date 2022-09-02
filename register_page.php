<html>
<body>
<?php 
if(isset($_COOKIE['login'])){
    header('Location: '.$uri.'/register_system/home_page.php');
}
?>
<h1>Register Page</h1>
<form action="register.php" method="post">
Account: <input type="text" name="account"><br>
Password: <input type="text" name="password"><br>
<input type="submit">
</form>
<a href="login_page.php">已有帳號？按此登入</a>

</body>
</html>