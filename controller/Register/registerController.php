<?php
        require_once '../../model/cashierModel.php';
        require_once '../../model/dealerModel.php';
        require_once '../../model/clerkModel.php';
        $cashier = new Cashier();
        $dealer = new Dealer();
        $clerk = new Clerk();
        if(isset($_POST['addPerson']))
        {
            $flag = true;
            $last=$_POST['lastname'];
            $first=$_POST['firstname'];
            $mi=$_POST['mi'];
            $email=$_POST['username'];
            $type=$_POST['employee'];
            $password=$_POST['password'];
            $confirm=$_POST['confirm']; 
            $datas=array($last,$first,$mi,$email,$password);
            
            if($type == "Cashier")
            {
                if($password == $confirm)
                {
                    for($i=0;$i<count($datas);$i++){
                        if($datas[$i] == ""){
                            $flag = false;
                            break;
                        }
                    }
                    if($flag){
                        $cashier->addCashier(array($last,$first,$mi,$email,$password));
                    }
                    else{
                        $message = "Invalid Credentials";
                    }   
                    header('location:../../view/superAdmin/index.php?id='.$_GET['id']);
                }
                else
                {
                    echo "Password not matched";
                }  
            }
            else if($type == "Dealer")
            {
                if($password == $confirm)
                {
                    for($i=0;$i<count($datas);$i++){
                        if($datas[$i] == ""){
                            $flag = false;
                            break;
                        }
                    }
                    if($flag){
                        $dealer->addDealer(array($last,$first,$mi,$email,$password));
                    }
                    else{
                        $message = "Invalid Credentials";
                    }   
                    header('location:../../view/superAdmin/index.php?id='.$_GET['id']);
                }
                else
                {
                    echo "Password not matched";
                }  
            }
            else if($type == "Clerk")
            {
                if($password == $confirm)
                {
                    for($i=0;$i<count($datas);$i++){
                        if($datas[$i] == ""){
                            $flag = false;
                            break;
                        }
                    }
                    if($flag){
                        $clerk->addClerk(array($last,$first,$mi,$email,$password));
                    }
                    else{
                        $message = "Invalid Credentials";
                    }   
                    header('location:../../view/superAdmin/index.php?id='.$_GET['id']);
                }
                else
                {
                    echo "Password not matched";
                }  
            }
        }

        if(isset($_POST['addClerk']))
        {
            $flag = true;
            $last=$_POST['lastname'];
            $first=$_POST['firstname'];
            $mi=$_POST['mi'];
            $email=$_POST['username'];
            $password=$_POST['password'];
            $confirm=$_POST['confirm']; 
            $datas=array($last,$first,$mi,$email,$password);

            if($password == $confirm)
            {
                for($i=0;$i<count($datas);$i++){
                    if($datas[$i] == ""){
                        $flag = false;
                        break;
                    }
                }
                if($flag){
                    $clerk->addClerk(array($last,$first,$mi,$email,$password));
                }
                else{
                    $message = "Invalid Credentials";
                }   
                header('location:../../view/clerk/index.php?id='.$_GET['id']);
            }
            else
            {
                echo "Password not matched";
            }  
        }

    ?>