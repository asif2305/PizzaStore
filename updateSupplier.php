<?php 
include('response.php');
$connection = new DbQuery();

if(isset($_POST['update_data'])){
    $suppliername=$_POST['suppliername'];
    $supplieraddress=$_POST['supplieraddress'];
    $visibility=$_POST['visibility'];

    $emps = $connection->insertSupplierData($suppliername,$supplieraddress,$visibility);

}


?>