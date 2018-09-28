<?php
    require_once '../../model/adminModel.php';
    require_once '../../model/cashierModel.php';
    require_once '../../model/clerkModel.php';

    $admin= new Admin();
    $cashier = new Cashier();
    $clerk = new Clerk();
     if(isset($_POST['update']))
     {
         $last = $_POST['lastname'];
         $first = $_POST['firstname'];
         $mi = $_POST['mi'];
         $user = $_POST['username'];
         $pass = $_POST['password'];
         $confirm = $_POST['confirm'];
         if($pass == $confirm)
         {
             $admin->updateSuper(array($last,$pass,$mi,$user,$pass),$_GET['id']);
             header('location:../../index.php?Update_Success_Login_To_Apply_Changes');
         }
     }

     if(isset($_POST['updateCashier']))
     {
        $last = $_POST['lastname'];
        $first = $_POST['firstname'];
        $mi = $_POST['mi'];
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $confirm = $_POST['confirm'];
        if($pass == $confirm)
        {
            $cashier->updateCashier(array($last,$first,$mi,$user,$pass),$_GET['id']);
            header('location:../../index.php?Update_Success_Login_To_Apply_Changes');
        }
     }

     if(isset($_POST['updateClerk']))
     {
        $last = $_POST['lastname'];
        $first = $_POST['firstname'];
        $mi = $_POST['mi'];
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $confirm = $_POST['confirm'];
        if($pass == $confirm)
        {
            $Clerk->updateClerk(array($last,$first,$mi,$user,$pass),$_GET['id']);
            header('location:../../view/clerk/index.php?id='.$_GET['id']);
        }
     }
?>