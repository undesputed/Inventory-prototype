    <?php
        include '../../model/productModel.php';

        if($_SESSION)
        {
            $product = new Product();
            $id = $_GET['id'];
            $prod=$product->getProductSuper($id);
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

        <table border="2">
            <thead>
            <th colspan="5">List of products</th>
            </thead>
            <thead>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Price</th>
            </thead>
            <?php foreach($prod as $p)
            {?>
                <tr>
                <td><?php echo $p['prod_id'];?></td>
                <td><?php echo $p['prod_name'];?></td>
                <td><?php echo $p['prod_quantity'];?></td>
                <td><?php echo $p['prod_desc'];?></td>
                <td>&#8369;<?php echo $p['prod_price'];?></td>
                </tr>
            <?php }?>
            </table>
    </body>
    </html>
    <?php
        }
        else {
            header('../../index.php');
        }
    ?>