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
if(isset($_POST['Ingredient_Edit_data'])){
    $EditingredientId=$_POST['EditingredientId'];
    $EditPrice_Id=$_POST['EditPrice_Id'];
    $EditProvince_Id=$_POST['EditProvince_Id'];
    $SupplierData_Id=$_POST['EditSupplierData'];
    $EditbuyingPrice=$_POST['EditbuyingPrice'];
    $EditbuyingQuantity=$_POST['EditbuyingQuantity'];
    $EditsellingPrice=$_POST['EditsellingPrice'];
    $EditavailableQuantity=$_POST['EditavailableQuantity'];
    $EditIngredient_visibility=$_POST['EditIngredient_visibility'];
    $Editingredientname=$_POST['Editingredientname'];
    $ItemId=$_POST['ItemId'];

  

    $emps = $connection->updateIngredientData($EditingredientId,$EditPrice_Id,$EditProvince_Id
    ,$SupplierData_Id,$EditbuyingPrice,$EditbuyingQuantity,$EditsellingPrice,$EditavailableQuantity,
    $EditIngredient_visibility,$Editingredientname,$ItemId);

}


if(isset($_POST['delete_Ingredient_data'])){
    $deletesupplierItemId=$_POST['deletesupplierItemId'];
    $deleteIngredientId=$_POST['deleteIngredientId'];
    $deletePriceId=$_POST['deletePriceId'];
    $emps = $connection->deleteIngredientData($deletesupplierItemId,$deleteIngredientId,$deletePriceId);

}

#################################################################  Ingredient End



?>