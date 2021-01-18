<?php 
include('response.php');
$connection = new DbQuery();
#################################################################  Supplier Start
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

if(isset($_POST['delete_data'])){
    $supplierId=$_POST['deletesupplierId'];
    $emps = $connection->deleteSupplierData($supplierId);

}

#################################################################  Supplier End
#################################################################  Ingredient Start
if(isset($_POST['Ingredient_Insert_data'])){
    $ingredientname=$_POST['ingredientname'];
    $buyingPrice=$_POST['buyingPrice'];
    $sellingPrice=$_POST['sellingPrice'];
    $buyingQuantity=$_POST['buyingQuantity'];
    $availableQuantity=$_POST['availableQuantity'];
    $Ingredient_visibility=$_POST['Ingredient_visibility'];
    $Province=$_POST['Province'];
    $SupplierData=$_POST['SupplierData'];
    $bakerid=$_POST['bakerid'];
  

    $emps = $connection->insertIngredientData($ingredientname,$buyingPrice,$sellingPrice,$buyingQuantity,$availableQuantity,$Ingredient_visibility,$Province,$SupplierData,$bakerid);

}




#################################################################  Ingredient End



?>