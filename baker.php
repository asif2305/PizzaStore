<?php 
include('response.php');
$newObj = new DbQuery();
$emps = $newObj->getSupplierList();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">Pizza Store Center</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search"
                    aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <div class="sb-sidenav-menu-heading">Pizza Store</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Views
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="order.php">Order</a>
                                <a class="nav-link" href="baker.php">Baker</a>
                            </nav>
                        </div>
                    </div>

            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Primary Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Warning Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Success Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Danger Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Supplier Start #################################################################-->

                <!-- Supplier Add  #################################################################- -->


                <div class="modal fade" id="supplierModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="insertSupplier.php" method="POST">
                                <div class="modal-body">
                                    <h2 class="text-dark">Add Supplier </h2>

                                    <div class="form-group">
                                        <label for="Supplier ID">Supplier Id</label>
                                        <input type="text" class="form-control" id="supplierId" name="supplierId"
                                            readonly placeholder="Supplier Id">

                                    </div>
                                    <div class="form-group">
                                        <label for="Supplier Name">Supplier Name</label>
                                        <input type="text" class="form-control" id="suppliername" name="suppliername"
                                            placeholder="Supplier Name">

                                    </div>
                                    <div class="form-group">
                                        <label for="Supplier Name">Supplier Address</label>
                                        <input type="text" class="form-control text-dark" id="supplieraddress"
                                            name="supplieraddress" placeholder="Supplier Address">

                                    </div>
                                    <div class="form-group">
                                        <label for="Visibility">Visibility list:</label>
                                        <select class="form-control" id="visibility" name="visibility">
                                            <option value="1">True</option>
                                            <option value="0">False</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="insert_data" class="btn btn-primary">Save Data</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="col-md-0 col-sm-12 text-left ftco-animate">
                        <h3 class="mb-3 mt-5 bread text-dark">Add Supplier</h3>
                        <!--  <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p> -->
                    </div>
                    <div class="jumbotron">
                        <div class="card">
                            <div class="card-body">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#supplierModal">
                                    Add Supplier
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Supplier List
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Supplier ID</th>
                                            <th>Supplier Name</th>
                                            <th>Address</th>
                                            <th>Visibility</th>
                                            <th>Operations</th>


                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Supplier ID</th>
                                            <th>Supplier Name</th>
                                            <th>Address</th>
                                            <th>Visibility</th>
                                            <th>Operations</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php if(is_array($emps)){?>
                                        <?php foreach($emps as $key => $emp) :?>
                                        <tr>
                                            <td><?php echo $emp['SupplierId'] ?></td>
                                            <td><?php echo $emp['Name'] ?></td>
                                            <td><?php echo $emp['Address'] ?></td>
                                            <td style="display:none"><?php echo $emp['Visibility'] ?></td>
                                            <td><?php
                                            if( $emp['Visibility']=="1"){
                                                 echo "True";
                                             }
                                             else{
                                                 echo "False";
                                             }
                                             ?>
                                            </td>
                                            <td>
                                                <div class="btn-group" data-toggle="buttons">
                                                    <button type="button"
                                                        class="btn btn-warning btn-xs editSupplier">Edit</button>
                                                    <button type="button"
                                                        class="btn btn-danger btn-xs deleteSupplier">Delete</button>

                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Supplier Add  #################################################################- end-->
                <!-- Supplier EDIT  #################################################################- START-->
                <div class="modal fade" id="supplierEditModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">Edit Supplier</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="insertSupplier.php" method="POST">
                                <div class="modal-body">
                                    <h2 class="text-dark">Add Supplier </h2>

                                    <div class="form-group">
                                        <label for="Supplier ID">Supplier Id</label>
                                        <input type="text" class="form-control" id="EditsupplierId"
                                            name="EditsupplierId" readonly placeholder="Supplier Id">

                                    </div>
                                    <div class="form-group">
                                        <label for="Supplier Name">Supplier Name</label>
                                        <input type="text" class="form-control" id="Editsuppliername"
                                            name="Editsuppliername" placeholder="Supplier Name">

                                    </div>
                                    <div class="form-group">
                                        <label for="Supplier Name">Supplier Address</label>
                                        <input type="text" class="form-control text-dark" id="Editsupplieraddress"
                                            name="Editsupplieraddress" placeholder="Supplier Address">

                                    </div>
                                    <div class="form-group">
                                        <label for="Visibility">Visibility list:</label>
                                        <select class="form-control" id="Editvisibility" name="Editvisibility">
                                            <option value="1">True</option>
                                            <option value="0">False</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="update_data" class="btn btn-primary">Update
                                        Data</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- Supplier EDIT  #################################################################- END-->
                <!-- Supplier DELETE #################################################################- START-->
                <div class="modal fade" id="deleteSupplierModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">Delete Supplier</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="insertSupplier.php" method="POST">
                                <div class="modal-body">
                                    <input type="hidden" id="deletesupplierId" name="deletesupplierId">
                                    <h4>Do you want to Delete this Data ??</h4>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                                    <button type="submit" name="delete_data" class="btn btn-primary">Yes !! Delete
                                        it.</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- Supplier DELETE  #################################################################- END-->
                <!-- Supplier End  #################################################################- -->
                <!-- Ingredient Start  #################################################################- -->

                <div class="modal fade" id="ingredientModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">Add Ingredient</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form>
                                <div class="modal-body">
                                    <h2 class="text-dark">Add Ingredient</h2>

                                    <div class="form-group">
                                        <label for="Supplier ID">Ingredint Id</label>
                                        <input type="text" class="form-control" id="ingredientId" name="ingredientId"
                                            readonly placeholder="Supplier Id">

                                    </div>
                                    <div class="form-group">
                                        <label for="Ingredient Name">Ingredient Name</label>
                                        <input type="text" class="form-control" id="ingredientname"
                                            name="ingredientname" placeholder="Ingredient Name">

                                    </div>
                                    <div class="form-group">
                                        <label for="Buying Price">Buying Price</label>
                                        <input type="text" class="form-control text-dark" id="buyingPrice"
                                            name="buyingPrice" placeholder="Buying Price">

                                    </div>
                                    <div class="form-group">
                                        <label for="Buying Price">Selling Price</label>
                                        <input type="text" class="form-control text-dark" id="sellingPrice"
                                            name="sellingPrice" placeholder="Selling Price">

                                    </div>
                                    <div class="form-group">
                                        <label for="Buying Quantity">Buying Quantity</label>
                                        <input type="text" class="form-control text-dark" id="buyingQuantity"
                                            name="buyingQuantity" placeholder="Buying Quantity">

                                    </div>
                                    <div class="form-group">
                                        <label for="Selling Quantity">Selling Quantity</label>
                                        <input type="text" class="form-control text-dark" id="sellingQuantity"
                                            name="sellingQuantity" placeholder="Buying Price">

                                    </div>
                                    <div class="dropdown show">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                            id="visibility" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Visibility
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">True</a>
                                            <a class="dropdown-item" href="#">False</a>

                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save Data</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="col-md-0 col-sm-12 text-left ftco-animate">
                        <h3 class="mb-3 mt-5 bread text-dark">Add Ingredient</h3>
                        <!--  <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p> -->
                    </div>
                    <div class="jumbotron">
                        <div class="card">
                            <div class="card-body">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#ingredientModal">
                                    Add Ingredient
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Ingredient List
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <tr>
                                            <td>Serge Baldwin</td>
                                            <td>Data Coordinator</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2012/04/09</td>
                                            <td>$138,575</td>
                                        </tr>

                                        <tr>
                                            <td>Donna Snider</td>
                                            <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>27</td>
                                            <td>2011/01/25</td>
                                            <td>$112,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2020</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>

    <!-- Supplier Update  #################################################################- -->
    <script>
    $(document).ready(function() {
        $('.editSupplier').on('click', function() {
            $('#supplierEditModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();

            $('#EditsupplierId').val(data[0]);
            $('#Editsuppliername').val(data[1]);
            $('#Editsupplieraddress').val(data[2]);
            $('#Editvisibility').val(data[3]);

        });
    });
    </script>
    <!-- Supplier Update  #################################################################- -->

    <!-- Supplier Delete  #################################################################- -->
    <script>
    $(document).ready(function() {
        $('.deleteSupplier').on('click', function() {
            $('#deleteSupplierModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();

            $('#deletesupplierId').val(data[0]);



        });
    });
    </script>
    <!-- Supplier Delete  #################################################################- -->
</body>

</html>