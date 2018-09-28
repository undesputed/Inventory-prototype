<?php
    require_once '../../model/cartModel.php';
    require_once '../../model/cashierModel.php';
    date_default_timezone_set('Asia/Manila');
    if($_SESSION){
        $cart = new Cart();
        $car = $cart->getAllCart();
        $cashier = new Cashier();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Product Receipt</title>
    <link rel="stylesheet" href="../print/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../print/css/buttons.dataTables.min.css">

</head>
<style>
    td{
        text-align: center;
    }
</style>

<body>
    <table id="example" class="display nowrap" style="width:50%">
        <thead>
            <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Current Price</th>
                <th>Cashier Name</th>
                <th>Total Payment</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($car as $c){?>
            <tr>
                <td><?php echo $c['cart_id'];?></td>
                <td><?php echo $c['cart_name'];?></td>
                <td><?php echo $c['cart_desc'];?></td>
                <td><?php echo $c['cart_quantity'];?></td>
                <td><?php echo $c['cart_price'];?></td>
                <td><?php echo $_SESSION['cashier'];?></td>
                <td><?php echo $c['cart_payment'];?></td>
            </tr>
            <?php }?>
            <tr>
                <td><?php?></td>
            </tr>
        </tbody>
    </table>
<a href="../cashier/index.php?id=">Proceed</a>

</body>
<!-- must be in order -->
<script src="../print/js/jquery-3.3.1.js"></script>
<script src="../print/js/jquery.dataTables.min.js"></script>
<script src="../print/js/dataTables.buttons.min.js"></script>
<script src="../print/js/buttons.print.min.js"></script>
<script src="../print/js/buttons.flash.min.js"></script>
<script src="../print/js/buttons.html5.min.js"></script>
<script src="../print/js/jszip.min.js"></script>
<script src="../print/js/pdfmake.min.js"></script>
<script src="../print/js/vfs_fonts.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#example').DataTable({
            "pageLength": 20,
            dom: 'Bfrtip',
            buttons: ['print']
        });
    });
</script>
</html>
<?php
    }else{
        header("location:../../index.php?Must_Login");
    }
?>