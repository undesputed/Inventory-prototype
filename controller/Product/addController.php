<?php
    require_once '../../model/productModel.php';

    $prod = new Product();
    if(isset($_POST['addProd']))
    {
        $code = $_POST['code'];
        $name = $_POST['name'];
        $quantity = $_POST['quantity'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        $id = $_GET['id'];

        $prod->addProduct(array($code,$name,$quantity,$desc,$price,$id));
        header("location:../../view/dealer/index.php?id=".$id);
    }
?>