<?php 
include('response.php');
$connection = new DbQuery();
$emps = $connection->getPizzaOrderList();
echo ($emps);

if(isset($_POST['insert_data'])){
    $suppliername=$_POST['suppliername'];
    $supplieraddress=$_POST['supplieraddress'];
    $visibility=$_POST['visibility'];

    $emps = $connection->insertSupplierData($suppliername,$supplieraddress,$visibility);

    echo $visibility;
}


?>

<?php foreach($emps as $key => $emp) :?>
<table>
    <tr>
        <td><?php echo $emp['OrderId'] ?></td>
        <td><?php echo $emp['PizzaName'] ?></td>
        <td><?php echo $emp['IngredientIdWithConcat'] ?></td>
        <td><?php echo $emp['CustomerName'] ?></td>
        <td><?php echo $emp['StatusName'] ?></td>
    </tr>
    <?php endforeach;?>
</table>