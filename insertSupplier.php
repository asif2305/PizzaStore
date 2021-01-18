<?php 
include('response.php');
$connection = new DbQuery();

if(isset($_POST['insert_data'])){
    $suppliername=$_POST['suppliername'];
    $supplieraddress=$_POST['supplieraddress'];
    $visibility=$_POST['visibility'];

    $emps = $connection->insertSupplierData($suppliername,$supplieraddress,$visibility);

}


if(isset($_POST['update_data'])){
    $supplierId=$_POST['EditsupplierId'];
    $suppliername=$_POST['Editsuppliername'];
    $supplieraddress=$_POST['Editsupplieraddress'];
    $visibility=$_POST['Editvisibility'];

    $emps = $connection->updateSupplierData($supplierId,$suppliername,$supplieraddress,$visibility);

}


?>