<html>
<body>
<?php 
if(!isset($_COOKIE['login'])){
    echo "請先登入再進行操作<br>";
    die("<a href='login_page.php'>按我登入</a>");
}
?>
<h1>登入後頁面</h1>
<a href="logout.php">按我登出</a>

</body>
</html>