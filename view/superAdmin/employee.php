<?php
    include '../../model/productModel.php';

    if($_SESSION)
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Admin</title>
</head>
<body>
    <ul class="nav nav-tabs">
    <li role="presentation" class="active"><a href="#">Home</a></li>
    <li role="presentation"><a href="employee.php">Add New Employee</a></li>
    <li role="presentation"><a href="#">Print Product</a></li>
    <li role="presentation"><a href="../../controller/Accounts/log.php">Logout</a></li>
    <li role="presentation"><a href="">(Adin)Super Admin</a></li>
    </ul>

    <form action="../../controller/Register/registerController.php" method="post">
        <input type="text" name="lastname" placeholder="Last Name">
        <input type="text" name="firstname" placeholder="First Name">
        <input type="text" name="mi" placeholder="Minddle Initial">
        <select name="gender" placeholder="MI">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <input type="date" name="date" placeholder="Date">
        <input type="username" name="username" placeholder="Username">
        <select name="employee" placeholder="Type of Employee">
            <option value="admin">Admin</option>
            <option value="cashier">Cashier</option>
            <option value="Dealer">Dealer</option>
            <option value="Clerk">Clerk</option>
        </select>
        <input type="password" name="password" placeholder="password">
        <input type="password" name="confirm" placeholder="Retype Password">
        <input type="submit" value="Add Person" name="addPerson">
    </form>
</body>
</html>
<?php
    }
    else {
        header('../../index.php');
    }
?>