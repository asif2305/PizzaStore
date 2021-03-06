<!-- 
    Order related tables,store procedure,views, and order.php is done by Asif Ahmed and Matrikel-Nr:509701 -->
<?php 
include('response.php');
$newObj = new DbQuery();
$emps = $newObj->getSupplierList();
$province=$newObj->getProvinceList();
$pizza_baker=$newObj->getPizzaBakerData();
$ingredientList=$newObj->getingredientData();
$OrderDataList=$newObj->get_order_list();
$suppliervisibility=$newObj->getall_Visible_supplier();

?>

<?php include('header.php')?>


<?php include('Baker/orderList.php')?>


<?php include('Baker/processOrder.php')?>

<?php include('Baker/createSupplier.php')?>

<?php include('Baker/supplierList.php')?>

<?php include('Baker/supplierEdit.php')?>

<?php include('Baker/supplierDelete.php')?>

<?php include('Baker/createIngredient.php')?>

<?php include('Baker/ingredientList.php')?>

<?php include('Baker/ingredientEdit.php')?>
<?php include('Baker/ingredientVisibilityChecking.php')?>


<?php include('Baker/ingredientRestoke.php')?>

<?php include('Baker/ingredientDelete.php')?>

<?php include('Baker/supplierVisibility.php')?>
</main>
<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2021</div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
</script>

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

<!-- Ingredient Update  #################################################################- -->
<script>
$(document).ready(function() {
    $('.editIngredient').on('click', function() {

        // editIngredient
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
        $('#SupplierVisibility').val(data[15]);
        $('#CheckingVisibilityingredientId').val(data[0]);
        $('#SupplierVisibility').val(data[15]);

        if (data[15] == 1) {
            $('#ingredientEditModal').modal('show');
        } else {

            $('#changeVisibilityModal').modal('show');
        }


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

<!-- Ingredient Restoke  #################################################################- -->
<script>
$(document).ready(function() {
    $('.restokeIngredient').on('click', function() {


        $tr = $(this).closest('tr');
        var data = $tr.children('td').map(function() {
            return $(this).text();
        }).get();

        $('#RestokeingredientId').val(data[0]);
        $('#RestockPrice_Id').val(data[1]);
        $('#RestokeProvince_Id').val(data[2]);
        $('#RestokeBakerName').val(data[3]);
        $('#RestokeSupplierData').val(data[4]);
        $('#Restockingredientname').val(data[5]);
        $('#RestokeavailableQuantity').val(data[11]);
        $('#RestokeIngredient_visibility').val(data[12]);
        $('#RestokeItemId').val(data[14]);
        $('#CheckingVisibilityingredientId').val(data[0]);
        $('#SupplierVisibility').val(data[15]);

        if (data[15] == 1) {
            $('#ingredientRestokeModal').modal('show');
        } else {

            $('#changeVisibilityModal').modal('show');
        }

    });
});
</script>
<!-- Ingredient Restoke  #################################################################- -->


<!-- Hide and show #################################################################- -->
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
<script>
$(document).ready(function() {
    $('.ShowOrHideSupplier').on('click', function() {
        $('#ShowOrHideSupplierModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children('td').map(function() {
            return $(this).text();
        }).get();

        $('#ShowHidesupplierId').val(data[0]);


    });
});
</script>

<script>
$(document).ready(function() {
    $('.ShowOrHideIngredient').on('click', function() {
        $('#changeVisibilityModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children('td').map(function() {
            return $(this).text();
        }).get();

        $('#CheckingVisibilityingredientId').val(data[0]);
        $('#SupplierVisibility').val(data[15]);



    });
});
</script>


<script>
$(document).ready(function() {
    $('.processOrder').on('click', function() {
        $('#ProcessOrderModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children('td').map(function() {
            return $(this).text();
        }).get();

        $('#processOrderId').val(data[2]);
        console.log(data[2]);
    });

});
</script>

</body>

</html>