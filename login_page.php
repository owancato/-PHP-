<html>
<body>
<?php 
if(isset($_COOKIE['login'])){
    header('Location: '.$uri.'/register_system/home_page.php');
}
?>
<h1>Login Page</h1>
<form action="login.php" method="post">
Account: <input type="text" name="account"><br>
Password: <input type="text" name="password"><br>
<input type="submit">
</form>
<a href="register_page.php">點我註冊帳號</a>
</body>
</html>