<?php
setcookie('user', $user['name'], time() + 1899,  "/");
header('Location: undexx.php');
?>