<?php
    require_once '../../model/productModel.php';

    if($_SESSION){
        $product = new Product();
        $prod = $product->getAllProduct();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Reports of Products (BERIJAN ENTERPRISES)</title>
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/buttons.dataTables.min.css">

</head>

<body>
<a href="../superAdmin/index.php?id=<?php echo $_GET['id'];?>">Back</a>
    <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Product Quantity</th>
                <th>Product Dscription</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($prod as $p){?>
            <tr>
                <td><?php echo $p['prod_id'];?></td>
                <td><?php echo $p['prod_name'];?></td>
                <td><?php echo $p['prod_quantity'];?></td>
                <td><?php echo $p['prod_desc'];?></td>
                <td><?php echo $p['prod_price'];?></td>
            </tr>
            <?php }?>
        </tbody>
        <tfoot>
            <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Product Quantity</th>
                <th>Product Dscription</th>
                <th>Price</th>
            </tr>
        </tfoot>
    </table>
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
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        });
    });
</script>
</html>
<?php
    }else{
        header("location:../../index.php?Must_Login");
    }
?>