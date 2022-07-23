<?php
session_start();
session_destroy();
header ("location:/mvc-hj/view/template/login.php");
?>