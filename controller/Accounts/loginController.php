<?php
    require_once '../../model/loginModel.php';

    $login = new Login();
    if(isset($_POST['login']))
    {
        $user = htmlentities($_POST['username']);
        $pass = htmlentities($_POST['password']);
        $data = array($user,$pass);
        $ok=$login->login($data);
        if($ok)
        {
            header("location:../../view/superAdmin/index.php?id=".$_SESSION['super_id']."&?info=".$_SESSION['super']);
        }
        else{
            header("location:../../index.php?login_failed");
        }
    }

    if(isset($_POST['loginCashier']))
    {
        $user = htmlentities($_POST['username']);
        $pass = htmlentities($_POST['password']);
        $data = array($user,$pass);
        $ok=$login->Cashier($data);
        if($ok)
        {
            header("location:../../view/Cashier/index.php?id=".$_SESSION['cashier_id']."&?info=".$_SESSION['cashier']);
        }
        else{
            header("location:../../index.php");
        }
    }

    if(isset($_POST['loginDealer']))
    {
        $user = htmlentities($_POST['username']);
        $pass = htmlentities($_POST['password']);
        $data = array($user,$pass);
        $ok=$login->Dealer($data);
        if($ok)
        {
            header("location:../../view/dealer/index.php?id=".$_SESSION['dealer_id']."&?info=".$_SESSION['dealer']);
        }
        else{
            header("location:../../index.php");
        }
    }

    if(isset($_POST['loginClerk']))
    {
        $user = htmlentities($_POST['username']);
        $pass = htmlentities($_POST['password']);
        $data = array($user,$pass);
        $ok=$login->Clerk($data);
        if($ok)
        {
            header("location:../../view/clerk/index.php?id=".$_SESSION['clerk_id']."&?info=".$_SESSION['clerk']);
        }
        else{
            header("location:../../index.php");
        }
    }

   
?>