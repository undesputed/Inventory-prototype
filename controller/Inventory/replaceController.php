<?php
    require_once '../../model/invenModel.php';
    require_once '../../model/productModel.php';

    $inven= new Inventory();
    $prod = new Product();
     if(isset($_POST['addInven']))
     {
         $code = $_POST['code'];
         $name = $_POST['name'];
         $quantity = $_POST['quantity'];
         $desc = $_POST['desc'];
         $price = $_POST['price'];
         $id = $_GET['id'];

         $inven->addInven(array($code,$name,$quantity,$desc,$price,$id));
         $prod->deleteProduct($code);
         header("location:../../view/cashier/index.php?id=".$id);
     }
?>