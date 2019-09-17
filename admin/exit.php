<?php
header('content-Type:text/html;charset=utf-8');
session_start();
session_unset();
session_destroy();
echo "<script>alert('你已退出登录!!!');location.href='admin.php';</script>";
?>