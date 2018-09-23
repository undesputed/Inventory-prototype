<?php
  include 'model/productModel.php';

  $product = new Product();
  $prod=$product->getAllProduct();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Inventory</title>
</head>
<body>
    <!-- Navigation Bar here -->
    <div class="row">
      <form action="controller/accounts/loginController.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="login" value="Super Admin">
        <input type="submit" name="loginAdmin" value="Admin">
        <input type="submit" name="loginCashier" value="Cashier">
        <input type="submit" name="loginDealer" value="Dealer">
        <input type="submit" name="loginClerk" value="Clerk">
        </form>

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
      </div>
</body>
</html>