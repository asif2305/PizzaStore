<?php 
include('response.php');
$newObj = new DbQuery();
$IngredientListData = $newObj->getall_ingredientlistwithpriceandprovince();

?>

<?php include('header.php')?>

<!-- Supplier Start #################################################################-->

<!-- Supplier Add  #################################################################- -->


<div class="modal fade" id="OrderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Place Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="insertSupplier.php" method="POST">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group  col-md-6">
                            <label for="Supplier ID">Customer Name</label>
                            <input type="text" class="form-control" id="customerName" name="customerName"
                                placeholder="Customer Name" required>

                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="Supplier Name">Customer Email</label>
                            <input type="text" class="form-control" id="customerEmail" name="customerEmail"
                                placeholder="Cusotmer Email" required>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="Supplier Name">Customer Phone</label>
                            <input type="text" class="form-control text-dark" id="customerPhone" name="customerPhone"
                                placeholder="Customer Phone" required>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="Supplier Name">Customer Address</label>
                            <input type="text" class="form-control text-dark" id="customerAddress"
                                name="customerAddress" placeholder="Customer Address" required>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="Province">Ingredient List:</label>
                            <select class="form-control" id="IngredientList" name="IngredientList">
                                <?php if(is_array($IngredientListData)){?>
                                <?php foreach($IngredientListData as $key => $IngredientListData) :?>
                                <option value=<?php echo $IngredientListData['IngredientId']?>>
                                    <?php echo $IngredientListData['Name']?>, <span style="color:green">From(</span>
                                    <?php echo $IngredientListData['ProvinceName']?><span style="color:green">)</span>,
                                    Price(
                                    <?php echo $IngredientListData['PricePerUnit']?>)
                                </option>

                                <?php endforeach; ?>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Supplier Name">Pizza Size</label>
                            <input type="number" class="form-control text-dark" id="PizzaSize" name="PizzaSize"
                                placeholder="Pizza Size" required>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="insert_Order_data" class="btn btn-primary">Save Data</button>
                </div>
            </form>
        </div>

    </div>
</div>


<div>

    <div class="card mb-4">
        <div class="card-title text-center">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#OrderModal">
                Place a Order
            </button>
        </div>
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Order List

        </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Address</th>
                            <th>Ingredients</th>
                            <th>Order Status</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Address</th>
                            <th>Ingredients</th>
                            <th>Order Status</th>
                            <th>Operations</th>
                        </tr>
                    </tfoot>
                    <tbody>



                        <td>
                            <div class="btn-group" data-toggle="buttons">
                                <button type="button" class="btn btn-warning btn-xs editSupplier">Edit</button>
                                <button type="button" class="btn btn-danger btn-xs deleteSupplier">Delete</button>

                            </div>
                        </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Order Add  #################################################################- Start-->
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
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Supplier ID">Supplier Id</label>
                            <input type="text" class="form-control" id="EditsupplierId" name="EditsupplierId" readonly
                                placeholder="Supplier Id">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="Supplier Name">Supplier Name</label>
                            <input type="text" class="form-control" id="Editsuppliername" name="Editsuppliername"
                                placeholder="Supplier Name">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="Supplier Name">Supplier Address</label>
                            <input type="text" class="form-control text-dark" id="Editsupplieraddress"
                                name="Editsupplieraddress" placeholder="Supplier Address">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="Supplier Name">Supplier Identification No</label>
                            <input type="text" class="form-control text-dark" id="Editsupplieridentificationno"
                                name="Editsupplieridentificationno" placeholder="Supplier Identification No">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="Visibility">Visibility list:</label>
                            <select class="form-control" id="Editvisibility" name="Editvisibility">
                                <option value="1">True</option>
                                <option value="0">False</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Province">Ingredient List:</label>
                            <select class="form-control" id="IngredientList" name="IngredientList">
                                <?php if(is_array($province)){?>
                                <?php foreach($province as $key => $province) :?>
                                <option value=<?php echo $province['ProvinceId']?>>
                                    <?php echo $province['ProvinceName'] ?>
                                </option>

                                <?php endforeach; ?>
                                <?php }?>
                            </select>
                        </div>

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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
        $('#Editsupplieridentificationno').val(data[3]);
        $('#Editvisibility').val(data[4]);

    });
});
</script>
<!-- Supplier Update  #################################################################- -->

<!-- Supplier Delete  #################################################################- -->
<script>
$(document).ready(function() {
    $('.deleteSupplier').on('click', function() {
        $('#deleteIngredientModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children('td').map(function() {
            return $(this).text();
        }).get();

        $('#deletesupplierId').val(data[0]);



    });
});
</script>
<!-- Supplier Delete  #################################################################- -->

<!-- Ingredient Update  #################################################################- -->
<script>
$(document).ready(function() {
    $('.editIngredient').on('click', function() {
        $('#ingredientEditModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children('td').map(function() {
            return $(this).text();
        }).get();


        $('#EditingredientId').val(data[0]);
        $('#EditPrice_Id').val(data[1]);
        $('#EditProvince_Id').val(data[2]);
        $('#BakerName').val(data[3]);
        $('#EditSupplierData').val(data[4]);
        $('#Editingredientname').val(data[5]);
        $('#EditbuyingPrice').val(data[8]);
        $('#EditbuyingQuantity').val(data[9]);
        $('#EditsellingPrice').val(data[10]);
        $('#EditavailableQuantity').val(data[11]);
        $('#EditIngredient_visibility').val(data[12]);
        $('#ItemId').val(data[14]);

    });
});
</script>
<!-- Ingredient Update  #################################################################- -->
<!-- Ingredient Delete  #################################################################- -->
<script>
$(document).ready(function() {
    $('.deleteIngredient').on('click', function() {
        $('#deleteIngredientModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children('td').map(function() {
            return $(this).text();
        }).get();

        $('#deletesupplierItemId').val(data[14]);
        $('#deleteIngredientId').val(data[0]);
        $('#deletePriceId').val(data[1]);


    });
});
</script>


<script>
$(document).ready(function() {
    $("#supplieridentificationno").on("input", function() {
        //  console.log($(this).val().trim());
        // alert();

        var supplieridentificationno = $(this).val().trim();

        if (supplieridentificationno != '') {
            // alert(suppliernameDuplicateChecking);
            $.ajax({
                url: 'insertSupplier.php',
                method: 'POST',
                dataType: 'JSON',
                data: {
                    supplieridentificationno: supplieridentificationno
                },
                success: function(response) {
                    console.log(response.status);
                    if (response.status === "Yes") {
                        $('#supplieridentificationno').val();
                    } else {
                        alert("Data already exists!!!");
                        $("#supplieridentificationno").val("");
                    }
                    //  alert(response);

                }
            });
        } else {
            $("#suppliername").html("");
        }


    });

});
</script>
</body>

</html>