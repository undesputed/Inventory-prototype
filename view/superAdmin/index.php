    <?php
        require_once '../../model/productModel.php';
        require_once '../../model/adminModel.php';
        if($_SESSION)
        {
            $product = new Product();
            $prod=$product->getAllProduct();;
            $admin=new Admin();
            $ad = $admin->getSuperById($_GET['id'])
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Super Admin</title>
        
        <link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="../assets/css/buttons.dataTables.min.css">
        <link href="../components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../components//plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
        <link href="../components/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
        <!-- animation CSS -->
        <link href="../components/css/animate.css" rel="stylesheet">
        <!-- Menu CSS -->
        <link href="../components/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="../components/css/style.css" rel="stylesheet">
        <!-- color CSS -->
        <link href="../components/css/animate.css" rel="stylesheet">
        <link href="../components/css/colors/default.css" id="theme" rel="stylesheet"> 

    </head>
    <body>
        
        <svg class="hidden ">
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
                                                    <span >Add New Employee</span>
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
                                                    <span>Print Product</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="../../controller/Accounts/log.php">
                                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                        <use xlink:href="#tabshape"></use>
                                                    </svg>
                                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                        <use xlink:href="#tabshape"></use>
                                                    </svg>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#section-shape-5">
                                                    <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                                        <use xlink:href="#tabshape"></use>
                                                    </svg>
                                                    <span>(Admin)Super Admin</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="content-wrap">
                                        <section id="section-shape-1">   
                                        <div class="row">                                
                                            <div class="col-md-12">
                                            <div class="table-responsive">
                                                    <table id="example" class="display nowrap" style="width:100%">
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
                                            <h2></h2>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="white-box">
                                                    <form class="form-horizontal" action="../../controller/Register/registerController.php?id=<?php echo $_GET['id'];?>" method="post">
                                                    <div class="form-group row">
                                                        <div class="col-sm-9">
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                                                <input type="text" class="form-control" id="exampleInputuname" name="lastname" required placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-9">
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                                                <input type="text" class="form-control" id="exampleInputuname1" name="firstname" required placeholder="First Name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-9">
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                                                <input type="text" class="form-control" id="exampleInputuname2" name="mi" required placeholder="Minddle Initial">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Gender</label>
                                                        <select class="form-control" name="gender" placeholder="Gender">
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                        <span class="help-block"> Select your gender </span> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Date of Birth</label>
                                                        <input type="date" name="date" class="form-control" placeholder="dd/mm/yyyy">
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-9">
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                                                <input type="username" class="form-control" id="exampleInputuname3" name="username" required placeholder="Username">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Type of Employee</label>
                                                        <select class="form-control" value="" name="employee">
                                                            <option value="Cashier">Cashier</option>
                                                            <option value="Dealer">Dealer</option>
                                                            <option value="Clerk">Clerk</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-9">
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="ti-lock"></i></div>
                                                                <input type="password" class="form-control" id="exampleInputpwd3" name="password" required placeholder="Password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-9">
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="ti-lock"></i></div>
                                                                <input type="password" class="form-control" id="exampleInputpwd4" name="confirm" required placeholder="Retype Password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row m-b-0">
                                                        <div class="offset-sm-3 col-sm-9 text-right">
                                                            <button type="submit"  name="addPerson" class="btn btn-info waves-effect waves-light m-t-10">Add Person</button>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        </section>
                                        <section id="section-shape-3">
                                            <form action="../print/index.php?id=<?php echo $_GET['id']?>" method="post">
                                                <button class="btn btn-default btn-hover">Print products</button>
                                            </form>
                                        </section>
                                        <section id="section-shape-4">
                                            <h2></h2>
                                            <a href="../../controller/Accounts/log.php">Logout</a>
                                            </section>
                                            <section id="section-shape-5">
                                                <h2></h2>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="white-box">
                                                            <form class="form-horizontal" action="../../controller/accounts/updateController.php?id=<?php echo $_GET['id'];?>" method="post">
                                                            <div class="form-group row">
                                                                <div class="col-sm-9">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                                                        <input class="form-control" type="text" value="<?php echo $ad['super_lastname'];?>" name="lastname" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-9">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                                                        <input class="form-control" type="text" value="<?php echo $ad['super_firstname'];?>" name="firstname" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-9">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                                                        <input class="form-control" type="text" value="<?php echo $ad['super_mi'];?>" name="mi" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-9">
                                                                    <div class="input-group">
                                                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                                                            <input class="form-control" type="username" value="<?php echo $ad['super_username'];?>" name="username" required placeholder="Username">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-9">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="ti-lock"></i></div>
                                                                            <input class="form-control" type="password" name="oldpassword" required placeholder="Old password">
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-9">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="ti-lock"></i></div>
                                                                            <input class="form-control" type="password" name="password" required placeholder="password">
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-9">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon"><i class="ti-lock"></i></div>
                                                                            <input class="form-control" type="password" name="confirm" required placeholder="Retype Password">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row m-b-0">
                                                                <div class="offset-sm-3 col-sm-9 text-right">
                                                                    <input type="submit" value="Update" name="update" class="btn btn-info waves-effect waves-light m-t-10">
                                                                </div>
                                                            </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </section>
                                    </div>
                                    <!-- /content -->
                                </div>
                                <!-- /tabs -->
                            </section>     


        <script src="../assets/js/jquery-3.3.1.js"></script>
        <script src="../assets/js/jquery.dataTables.min.js"></script>
        <script src="../assets/js/dataTables.buttons.min.js"></script>
        <script src="../assets/js/buttons.print.min.js"></script>
        <script src="../assets/js/buttons.flash.min.js"></script>
        <script src="../assets/js/buttons.html5.min.js"></script>
        <script src="../assets/js/jszip.min.js"></script>
        <script src="../assets/js/pdfmake.min.js"></script>
        <script src="../assets/js/vfs_fonts.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#example12').DataTable({
                    "pageLength": 20,
                    dom: 'Bfrtip',
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                });
            });
        </script>     
             <script src="../components/plugins/bower_components/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="../components/bootstrap/dist/js/tether.min.js"></script>
      <script src="../components/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="../components/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
      <!-- Menu Plugin JavaScript -->
      <script src="../components/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
      <!--slimscroll JavaScript -->
      <script src="../components/js/jquery.slimscroll.js"></script>
      <!--Wave Effects -->
      <script src="../components/js/waves.js"></script>
      <!-- Custom Theme JavaScript -->
      <script src="../components/js/cbpFWTabs.js"></script>
      <script src="../components/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
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
      <script src="../components/js/custom.min.js"></script>
      <!--Style Switcher -->
      <script src="../components/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    </body>
    </html>
    <?php
        }
        else {
            header('../../index.php');
        }
    ?>