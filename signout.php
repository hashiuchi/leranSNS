<?php
session_start();

$_SESSIION = [];

//サーバー内のSESSON変数のクリア
session_destroy();

header("Location:signin.php");
exit();