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
  <link href="view/components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="view/components//plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <link href="view/components/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- animation CSS -->
    <link href="view/components/css/animate.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="view/components/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="view/components/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="view/components/css/animate.css" rel="stylesheet">
    <link href="view/components/css/colors/default.css" id="theme" rel="stylesheet">

</head>
<body>
    <!-- Navigation Bar here -->
    <svg class="hidden">
                                <defs>
                                    <path id="tabshape" d="M80,60C34,53.5,64.417,0,0,0v60H80z" />
                                </defs>
                            </svg>
                              <section class="m-t-40">
                                <div class="sttabs tabs-style-shape">
                                    <nav>
                                        <ul>
                                            <li>
                                                <a href="#section-shape-1">
                                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                        <use xlink:href="#tabshape"></use>
                                                    </svg>
                                                    <span>Home</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#section-shape-2" >
                                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                        <use xlink:href="#tabshape"></use>
                                                    </svg>
                                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                        <use xlink:href="#tabshape"></use>
                                                    </svg>
                                                    <span >..</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#section-shape-3">
                                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                        <use xlink:href="#tabshape"></use>
                                                    </svg>
                                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                        <use xlink:href="#tabshape"></use>
                                                    </svg>
                                                    <span>..</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#section-shape-4">
                                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                        <use xlink:href="#tabshape"></use>
                                                    </svg>
                                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                        <use xlink:href="#tabshape"></use>
                                                    </svg>
                                                    <span>..</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#section-shape-5">
                                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                        <use xlink:href="#tabshape"></use>
                                                    </svg>
                                                    <span>..</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="content-wrap">
                                        <section id="section-shape-1">
      <div class="row">                                
        <div class="col-md-12">
          <form  class="form-horizontal" action="controller/accounts/loginController.php" method="post">
            <div class="form-group row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="ti-user"></i></div>
                                          <input placeholder="Username *" class="form-control" id="input1" type="username" name="username" required><span class="highlight"></span> <span class="bar"></span>
                                        </div>
                                    </div>  
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <div class="input-group">
                  <div class="input-group-addon"><i class="ti-lock"></i></div>
                    <input placeholder="Password *" class="form-control" id="input1" type="password" name="password" required><span class="highlight"></span> <span class="bar"></span>
                  </div>
                </div>                
            </div>
            <div class="form-actions">
              <input class="btn btn-success" type="submit" name="login" value="Admin">
              <input class="btn btn-success" type="submit" name="loginCashier" value="Cashier">
              <input class="btn btn-success" type="submit" name="loginDealer" value="Dealer">
              <input class="btn btn-success" type="submit" name="loginClerk" value="Clerk">
            </div>
            </form>

            
              <div class="table-responsive">
                <table id="example23" class="display nowrap" cellspacing="0" width="100%">
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
                    </div>
      </div>
                                        </section>
                                        <section id="section-shape-2">
                                            <h2></h2></section>
                                        <section id="section-shape-3">
                                            <h2></h2></section>
                                        <section id="section-shape-4">
                                            <h2></h2></section>
                                        <section id="section-shape-5">
                                            <h2></h2></section>
                                    </div>
                                    <!-- /content -->
                                </div>
                                <!-- /tabs -->
                            </section>
    <!-- ./end of navigation Bar -->
        <script src="view/components/plugins/bower_components/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="view/components/bootstrap/dist/js/tether.min.js"></script>
      <script src="view/components/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="view/components/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
      <!-- Menu Plugin JavaScript -->
      <script src="view/components/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
      <!--slimscroll JavaScript -->
      <script src="view/components/js/jquery.slimscroll.js"></script>
      <!--Wave Effects -->
      <script src="view/components/js/waves.js"></script>
      <!-- Custom Theme JavaScript -->
      <script src="view/components/js/cbpFWTabs.js"></script>
      <script src="view/components/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
      <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;

                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before(
                                '<tr class="group"><td colspan="5">' + group + '</td></tr>'
                            );

                            last = group;
                        }
                    });
                }
            });

            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
      <script type="text/javascript">
      (function() {

          [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
              new CBPFWTabs(el);
          });

      })();
      </script>
      <script src="view/components/js/custom.min.js"></script>
      <!--Style Switcher -->
      <script src="view/components/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>