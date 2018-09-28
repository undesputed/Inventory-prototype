<?php
    require_once '../../model/cartModel.php';
    require_once '../../model/productModel.php';

    $cart= new Cart();
    $prod = new Product();
     if(isset($_POST['addCart']))
     {
         $code = $_POST['code'];
         $pro = $prod->getProductById($code);
         $name = $_POST['name'];
         $quantity = 1;
         $qunt = $pro['prod_quantity'];
         $tota_quant=$qunt - 1;
         $desc = $_POST['desc'];
         $price = $_POST['price'];
         $id = $_GET['id'];
         $payment=$quantity * $price;
         $paym = $cart->getCartById('$code');
         $fin_pay=$paym + 1;
         $dealer = 0;
         $fin_quant = $quantity + 1;

         if($code == $paym['cart_id'])
         {
            $cart->updateCart(array($code,$name,$fin_quant,$desc,$price,$id,$fin_pay),$code);
            header("location:../../view/cashier/index.php?id=".$id);
        }
        else if($code != $paym['cart_id'])
        {
            
            $cart->addCart(array($code,$name,$quantity,$desc,$price,$id,$payment));
            header("location:../../view/cashier/index.php?id=".$id);
        }
        $prod->updateProduct(array($code,$name,$tota_quant,$desc,$price,$dealer,$id),$id);
        header("location:../../view/cashier/index.php?id=".$id);
     }
?>