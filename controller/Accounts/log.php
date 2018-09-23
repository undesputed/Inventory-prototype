<?php
 require '../../model/loginModel.php';
unset($_SESSION['super_id']);
unset($_SESSION['super']);
session_destroy();
header("location:../../index.php?success_logout");
?>