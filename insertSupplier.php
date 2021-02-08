<!-- This insertSupplier.php is developed by Md. Mahfujur Rahman and Matrikel-Nr:613925 -->
<?php 
include('response.php');
$connection = new DbQuery();
#################################################################  Supplier Start
if(isset($_POST['insert_data'])){
    $suppliername=$_POST['suppliername'];
    $supplieraddress=$_POST['supplieraddress'];
    $visibility=$_POST['visibility'];
    $supplieridentificationno=$_POST['supplieridentificationno'];

    $emps = $connection->insertSupplierData($suppliername,$supplieraddress,$visibility,$supplieridentificationno);

}


if(isset($_POST['update_data'])){
    $supplierId=$_POST['EditsupplierId'];
    $suppliername=$_POST['Editsuppliername'];
    $supplieraddress=$_POST['Editsupplieraddress'];
    $visibility=$_POST['Editvisibility'];
    $identificationno=$_POST['Editsupplieridentificationno'];

    $emps = $connection->updateSupplierData($supplierId,$suppliername,$supplieraddress,$visibility,$identificationno);

}

if(isset($_POST['delete_data'])){
    $supplierId=$_POST['deletesupplierId'];
    $emps = $connection->deleteSupplierData($supplierId);

}

if(isset($_POST['supplieridentificationno'])){
  
    $DuplicateChecking=$_POST['supplieridentificationno'];
    $emps = $connection->supplierIdentificationDuplicateChecking($DuplicateChecking);
      
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
# Supplier Show and Hide
if(isset($_POST['Supplier_Visibility_Status_data'])){
    $ShowHidesupplierId=$_POST['ShowHidesupplierId'];
       
    $emps = $connection->updateSupplierVisibilityData($ShowHidesupplierId);

}
if(isset($_POST['Ingredient_Visibility_Status_data'])){
    $SupplierVisibility=$_POST['SupplierVisibility'];
    $CheckingVisibilityingredientId=$_POST['CheckingVisibilityingredientId'];

    #if($SupplierVisibility==0){
        
    $emps = $connection->updateIngredientVisibilityData($CheckingVisibilityingredientId,$SupplierVisibility);
   # }

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
if(isset($_POST['Ingredient_Restock_data'])){
    $restokeprice_id=$_POST['RestockPrice_Id'];
    $restokebuyingprice=$_POST['RestockbuyingPrice'];
    $restokebuyingquantity=$_POST['RestockbuyingQuantity'];
    $restokesellingprice=$_POST['RestocksellingPrice'];
    $restokeavailablequantity=$_POST['RestokeavailableQuantity'];

  

    $emps = $connection->restokeIngredientData($restokeprice_id,$restokebuyingprice,$restokebuyingquantity,$restokesellingprice,$restokeavailablequantity);

}


if(isset($_POST['delete_Ingredient_data'])){
    $deletesupplierItemId=$_POST['deletesupplierItemId'];
    $deleteIngredientId=$_POST['deleteIngredientId'];
    $deletePriceId=$_POST['deletePriceId'];
    $emps = $connection->deleteIngredientData($deletesupplierItemId,$deleteIngredientId,$deletePriceId);

}

#################################################################  Ingredient End
#################################################################  Order Start

if(isset($_POST['insert_Order_data'])){
   
    $bakerid=$_POST['bakerid'];
    $customerName=$_POST['customerName'];
    $customerEmail=$_POST['customerEmail'];
    $customerPhone=$_POST['customerPhone'];
    $customerAddress=$_POST['customerAddress'];
    $IngredientList=$_POST['IngredientList'];
   // $PizzaSize=$_POST['PizzaSize'];
    $OrderStatudId=$_POST['OrderStatudId'];
    $SizeId=$_POST['BasePriceId'];
 
   
    $emps = $connection->insertOrderData($bakerid,$customerName,$customerEmail,$customerPhone,$customerAddress,$IngredientList,$SizeId,$OrderStatudId);

}

if(isset($_POST['existing_Order_data']))
{
   
    $existingbakerid=$_POST['existingbakerid'];
    $existingOrderStatudId=$_POST['existingOrderStatudId'];
    $existingIngredientListID=$_POST['existingIngredientListID'];
    $existingcustomerName=$_POST['existingcustomerName'];
    $existingcustomerEmail=$_POST['existingcustomerEmail'];
    $existingcustomerPhone=$_POST['existingcustomerPhone'];
    $existingcustomerAddress=$_POST['existingcustomerAddress'];
    $existingSizeId=$_POST['existingSizeId'];

  $ingredientIds = array_map('intval', explode(',', $existingIngredientListID));

  $emps = $connection->insertOrderData($existingbakerid,$existingcustomerName,$existingcustomerEmail,$existingcustomerPhone,$existingcustomerAddress,$ingredientIds,$existingSizeId,$existingOrderStatudId);

}


if(isset($_POST['process_order_data'])){
    
    $processOrderId=$_POST['processOrderId'];
    $emps = $connection->processOrder($processOrderId);

}


#################################################################  Order End




?>