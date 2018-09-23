<?php
        require '../../model/adminModel.php';
        $admin=new Admin();
        // $cashier = new Cashier();
        // $dealer = new Dealer();
        // $clerk = new Clerk();
        if(isset($_POST['addPerson']))
        {
            $flag = true;
            $last=$_POST['lastname'];
            $first=$_POST['firstname'];
            $date = $_POST['date'];
            $mi=$_POST['mi'];
            $email=$_POST['username'];
            $type=$_POST['employee'];
            $password=$_POST['password'];
            $confirm=$_POST['confirm']; 
            $data = array($last,$first,$mi,$email,$password);
            if($type == "Admin")
            { 
                if($password == $confirm)
                {
                    $user->addAdmin($data);
                    $message = "Invalid Credentials";
                    header('location:../../view/superAdmin/employee.php?Employee_added');
                }
                else
                {
                    echo "Password not matched";
                }   
            }
            else if($type == "Cashier")
            {
                if($password != $confirm)
                {
                    
                }
                else
                {
                    echo "Password not matched";
                }  
            }
            else if($type == "Dealer")
            {
                if($password != $confirm)
                {
                    
                }
                else
                {
                    echo "Password not matched";
                }  
            }
            else if($type == "Clerk")
            {
                if($password != $confirm)
                {
                    
                }
                else
                {
                    echo "Password not matched";
                }  
            }
        }

    ?>