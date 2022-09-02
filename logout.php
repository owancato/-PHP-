<html>
<body>

<?php
// set the expiration date to one hour ago
setcookie("login", "", time() - 3600, "/");
echo "Cookie 'login' is deleted.";
header('Location: '.$uri.'/register_system/index.php');
?>

</body>
</html>