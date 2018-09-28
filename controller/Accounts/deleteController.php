<?php
 session_start();
 require_once '../../model/productModel.php';
 $id = $_GET['id'];
 $prod = new Product();
 $prod->deleteProduct($id);
 header("location:../../view/dealer/index.php?id=".$_SESSION['dealer_id']);
?>