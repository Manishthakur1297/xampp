<?php
session_start();
unset($_SESSION['user_id']);
session_destroy();
ob_end_flush();
//echo $http_referer;
header('Location: loginform.inc.php');

?>