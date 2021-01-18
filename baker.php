<?php 
include('response.php');
$newObj = new DbQuery();
$emps = $newObj->getSupplierList();
$province=$newObj->getProvinceList();
$pizza_baker=$newObj->getPizzaBakerData();
?>

<?php include('header.php')?>

<!-- Supplier Start #################################################################-->

<!-- Supplier Add  #################################################################- -->


<div class="modal fade" id="supplierModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
                        <input type="text" class="form-control" id="supplierId" name="supplierId" readonly
                            placeholder="Supplier Id">

                    </div>
                    <div class="form-group">
                        <label for="Supplier Name">Supplier Name</label>
                        <input type="text" class="form-control" id="suppliername" name="suppliername"
                            placeholder="Supplier Name">

                    </div>
                    <div class="form-group">
                        <label for="Supplier Name">Supplier Address</label>
                        <input type="text" class="form-control text-dark" id="supplieraddress" name="supplieraddress"
                            placeholder="Supplier Address">

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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#supplierModal">
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
                                    <button type="button" class="btn btn-warning btn-xs editSupplier">Edit</button>
                                    <button type="button" class="btn btn-danger btn-xs deleteSupplier">Delete</button>

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
<div class="modal fade" id="supplierEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
                        <input type="text" class="form-control" id="EditsupplierId" name="EditsupplierId" readonly
                            placeholder="Supplier Id">

                    </div>
                    <div class="form-group">
                        <label for="Supplier Name">Supplier Name</label>
                        <input type="text" class="form-control" id="Editsuppliername" name="Editsuppliername"
                            placeholder="Supplier Name">

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
<div class="modal fade" id="deleteSupplierModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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

<!-- Ingredient Create  Start #################################################################- -->

<div class="modal fade" id="ingredientModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Add Ingredient</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="insertSupplier.php" method="POST">
                <div class="modal-body">
                    <h2 class="text-dark">Add Ingredient</h2>


                    <div class="form-group">
                        <label for="Supplier ID">Ingredint Id</label>
                        <input type="text" class="form-control" id="ingredientId" name="ingredientId" readonly
                            placeholder="Supplier Id">

                    </div>
                    <div class="form-group">
                        <label for="Ingredient Name">Ingredient Name</label>
                        <input type="text" class="form-control" id="ingredientname" name="ingredientname"
                            placeholder="Ingredient Name">

                    </div>
                    <div class="form-group">
                        <label for="Buying Price">Buying Price</label>
                        <input type="number" class="form-control text-dark" id="buyingPrice" name="buyingPrice"
                            placeholder="Buying Price">

                    </div>
                    <div class="form-group">
                        <label for="Buying Price">Selling Price</label>
                        <input type="number" class="form-control text-dark" id="sellingPrice" name="sellingPrice"
                            placeholder="Selling Price">

                    </div>
                    <div class="form-group">
                        <label for="Buying Quantity">Buying Quantity</label>
                        <input type="number" class="form-control text-dark" id="buyingQuantity" name="buyingQuantity"
                            placeholder="Buying Quantity">

                    </div>
                    <div class="form-group">
                        <label for="Available Quantity">Available Quantity</label>
                        <input type="number" class="form-control text-dark" id="availableQuantity"
                            name="availableQuantity" placeholder="Available Quantity">

                    </div>
                    <div class="form-group">
                        <label for="Ingredient_visibility">Visibility list:</label>
                        <select class="form-control" id="Ingredient_visibility" name="Ingredient_visibility">
                            <option value="1">True</option>
                            <option value="0">False</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Province">Regional Province:</label>
                        <select class="form-control" id="Province" name="Province">
                            <?php if(is_array($province)){?>
                            <?php foreach($province as $key => $province) :?>
                            <option value=<?php echo $province['ProvinceId']?>> <?php echo $province['ProvinceName'] ?>
                            </option>

                            <?php endforeach; ?>
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="SupplierData">Supplier:</label>
                        <select class="form-control" id="SupplierData" name="SupplierData">
                            <?php if(is_array($emps)){?>
                            <?php foreach($emps as $key => $emps) :?>
                            <option value=<?php echo $emps['SupplierId']?>> <?php echo $emps['Name'] ?>
                            </option>

                            <?php endforeach; ?>
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="BakerData">Baker:</label>
                        <?php if(is_array($pizza_baker)){?>
                        <?php foreach($pizza_baker as $key => $pizza_baker) :?>
                        <input type="text" class="form-control text-dark" id="bakerData" name="bakerData"
                            value="<?php echo $pizza_baker['FirstName']; ?><?php echo " "?><?php echo $pizza_baker['LastName']; ?>">
                        <input type="hidden" id="bakerid" name="bakerid" value=<?php echo $pizza_baker['UserId'];?>>

                        <?php endforeach; ?>
                        <?php }?>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="Ingredient_Insert_data" class="btn btn-primary">Save Data</button>
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ingredientModal">
                    Add Ingredient
                </button>
            </div>
        </div>

    </div>
</div>
<!-- Ingredient Create  End #################################################################- -->
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
<!-- Ingredient End  #################################################################- -->
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