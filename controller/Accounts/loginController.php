<?php
    include '../../model/loginModel.php';

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

    if(isset($_POST['loginAdmin']))
    {
        $user = htmlentities($_POST['username']);
        $pass = htmlentities($_POST['password']);
        $data = array($user,$pass);
        $ok=$login->Admin($data);
        if($ok)
        {
            header("location:../../model/loginModel.php?id=".$_SESSION['']."&?info=".$_SESSION['']);
        }
        else{
            header("location:../../superAdmin/index.php");
        }
    }

    if(isset($_POST['loginCashier']))
    {
        $user = htmlentities($_POST['username']);
        $pass = htmlentities($_POST['password']);
        $data = array($user,$pass);
        $ok=$login->Cahier($data);
        if($ok)
        {
            header("location:../../model/loginModel.php?id=".$_SESSION['']."&?info=".$_SESSION['']);
        }
        else{
            header("location:../../superAdmin/index.php");
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
            header("location:../../model/loginModel.php?id=".$_SESSION['']."&?info=".$_SESSION['']);
        }
        else{
            header("location:../../superAdmin/index.php");
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
            header("location:../../model/loginModel.php?id=".$_SESSION['']."&?info=".$_SESSION['']);
        }
        else{
            header("location:../../superAdmin/index.php");
        }
    }
?>