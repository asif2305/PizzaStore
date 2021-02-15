<!-- 
    Order related tables,store procedure,views, and order.php is done by Md. Mahfujur Rahman and Matrikel-Nr:613925 -->
<?php 
include('response.php');
$newObj = new DbQuery();
$IngredientListData = $newObj->getall_ingredientlistwithpriceandprovince();
$pizza_baker=$newObj->getPizzaBakerData();
$OrderDataList=$newObj->get_order_list();
$PizzaSizeList = $newObj->getall_PizzaSize();


?>

<?php include('header.php')?>

<?php include('Order/createOrder.php')?>

<?php include('Order/orderList.php')?>

<?php include('Order/existingOrder.php')?>



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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>

<!-- Order Insert  #################################################################- Start -->

<script>
$(document).ready(function() {
    $('#IngredientList').multiselect({
        includeSelectAllOption: true,
        nonSelectedText: 'Select Ingredient',
        enabledFiltering: true,
        enableCaseInsensitiveFiltering: true,
        buttonWidth: '400px',
        enableClickableOptGroups: true,
        maxHeight: 400,

    });
});
</script>

<!-- Order Place start  #################################################################- -->
<script>
$(document).ready(function() {
    $('.editExistingOrder').on('click', function() {
        $('#existingOrderModal').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children('td').map(function() {
            return $(this).text();
        }).get();

        console.log(data)
        var dataValues = data[6] + ' -> Size ->' + data[7] + ' Price -> ' + data[11];
        //var mySelect = $('#existingIngredientList');
        $('#existingIngredientList').val(data[5]);
        $('#existingbakerid').val(data[1]);
        $('#existingsize').val(dataValues);
        $('#existingIngredientListID').val(data[0]);
        $('#existingSizeId').val(data[8]);

    });
});
</script>
<!-- Order Place End #################################################################- -->




</body>

</html>