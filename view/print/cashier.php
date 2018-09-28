<?php
    require_once '../../model/productModel.php';
    date_default_timezone_set('Asia/Manila');
    if($_SESSION){
        $product = new Product();
        $prod = $product->getProductById($_GET['id']);
        $date = date('Y-m-d');
        $quant = $prod['prod_quantity'];
        $price = $prod['prod_price'];
        $total=$quant * $price;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Product Receipt</title>
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/buttons.dataTables.min.css">

</head>

<body>
    <table id="example" class="display nowrap" style="width:50%">
        <thead>
            <tr>
                <th colspan="7">RECIEPT</th>
            </tr>
            <tr>
                <th>Product Code</th>
                <th>Date</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Current Price</th>
                <th>Product Name</th>
                <th>Total Payment</th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr>
                <th colspan="5"><center><strong><h3>BERIJAN ENTERPRISE<h3></strong></center></th>
            </tr>
            <tr>
                <th colspan="5"><center><strong>6000, Cebu City</strong></center></th>
            </tr>
            <tr>
                <th colspan="5"><center><strong>09771324877 - 19296604887</strong></center></th>
            </tr> -->
            <tr>
                <td><?php echo $_GET['id'];?></td>
                <td>Date:<?php echo "<strong> ".$date."</strong>";?></td>
                <td>Description:<?php echo "<strong>   ".$prod['prod_desc']."</strong>";?></td>
                <td>Quantity: <?php echo "<strong>   ".$prod['prod_quantity']."</strong>";?></td>
                <td>Price: <?php echo "<strong>   ".$prod['prod_price']."</strong>";?></td>
                <td>Product Name:<?php echo "<strong>   ".$prod['prod_name']."</strong>";?></td>
                <td>Total Payment:  <?php echo "<strong>   ".$total."</strong>";?></td>
            </tr>
        </tbody>
    </table>
<center><a href="../cashier/index.php?id=<?php echo $_GET['id'];?>">Proceed</a></center>

</body>
<!-- must be in order -->
<script src="js/jquery-3.3.1.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.buttons.min.js"></script>
<script src="js/buttons.print.min.js"></script>
<script src="js/buttons.flash.min.js"></script>
<script src="js/buttons.html5.min.js"></script>
<script src="js/jszip.min.js"></script>
<script src="js/pdfmake.min.js"></script>
<script src="js/vfs_fonts.js"></script>
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