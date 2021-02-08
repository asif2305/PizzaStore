<?php
include("connection.php");
class DbQuery
{

    protected $conn;
	protected $data = array();
	function __construct() {

		$db = new dbObj();
		$connString =  $db->getConnstring();
		$this->conn = $connString;
	}
	#################################################################  Supplier Start
	public function getSupplierList() {
		$sql = 'SELECT * FROM "getall_supplierlist" ';
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}
	public function getall_Visible_supplier() {
		$sql = 'SELECT * FROM getall_Visible_supplier ';
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}
	
	public function insertSupplierData($suppliername, $supplieraddress,$visibility,$supplieridentificationno){

		$sql="CALL sp_add_only_supplier('$suppliername', '$supplieraddress','$visibility','$supplieridentificationno')";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch supplier data");
		if($queryRecords){
			echo "<script>alert('Supplier Data Saved Successfully');document.location='baker.php'</script>";
		}
		else{
			echo "<script>alert(' Supplier Data Not Saved Successfully');document.location='baker.php'</script>";
		}
		
		
	}

	public function updateSupplierData($supplierId,$suppliername, $supplieraddress,$visibility,$identificationno){

		$sql="CALL sp_change_only_supplier('$supplierId','$suppliername', '$supplieraddress','$visibility','$identificationno')";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch Supplier data");
		if($queryRecords){

			echo "<script>alert('Supplier Data Updated Successfully');document.location='baker.php'</script>";
		}
		else{
			echo "<script>alert('Supplier Data Not Updated Successfully');document.location='baker.php'</script>";
		}
		
		
	}
	public function deleteSupplierData($supplierId){

		$sql="CALL sp_delete_only__supplier('$supplierId')";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
		if($queryRecords){

			echo "<script>alert('Supplier Data Deleted Successfully');document.location='baker.php'</script>";
		}
		else{
			
			echo "<script>alert('Supplier Data Not Deleted Successfully');document.location='baker.php'</script>";
		}
		
		
	}
	// public function supplierIdentificationDuplicateChecking($DuplicateChecking) {
	
	// 	$sql = "SELECT * FROM totalRecords('$DuplicateChecking') ";
	// 	$queryRecords = pg_query($this->conn, $sql) or die("error to fetch supplier data");
		
	// 	$data = pg_fetch_all($queryRecords);
	// 	//exit;
	// 	$response = array("status"=>"Yes");
	
	// 	if(is_array($data)){
	// 			 $response = array("status"=>"No");
		 
	// 	 }
	// 	 echo json_encode($response);
	// #die;
	// }

 #################################################################  Supplier End

  #################################################################  Ingredient Start

 public function getProvinceList() 
 {
	$sql = 'SELECT * FROM "get_all_regional_province" ';
	$queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
	$data = pg_fetch_all($queryRecords);
	return $data;
 }

 public function getPizzaBakerData() {
	$sql = 'SELECT * FROM "get_all_baker" ';
	$queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
	$data = pg_fetch_all($queryRecords);
	return $data;
 } 


public function insertIngredientData($ingredientname,$buyingPrice,$sellingPrice,$buyingQuantity,$availableQuantity,$Ingredient_visibility,$Province,$SupplierData,$bakerid)
 {

	$sql="CALL sp_add_price('$ingredientname', '$buyingPrice','$sellingPrice','$buyingQuantity','$availableQuantity','$Ingredient_visibility','$Province','$SupplierData','$bakerid')";
	$queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
	if($queryRecords){

		echo "<script>alert('Ingredient Data Saved Successfully');document.location='baker.php'</script>";

	}
	else{
		echo "<script>alert('Ingredient Data Not Saved Successfully');document.location='baker.php'</script>";
	}
	
	
 }

public function getingredientData() {
	$sql = 'SELECT * FROM "ingredientdisplay" ';
	$queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
	$data = pg_fetch_all($queryRecords);
	return $data;
}

public function updateIngredientData($EditingredientId,$EditPrice_Id,$EditProvince_Id,$SupplierData_Id,
$EditbuyingPrice,$EditbuyingQuantity,$EditsellingPrice,$EditavailableQuantity,$EditIngredient_visibility,$Editingredientname,$ItemId)
	{
		
	$sql="CALL sp_change_price('$EditingredientId', '$EditPrice_Id','$EditProvince_Id','$SupplierData_Id','$EditbuyingPrice',
	'$EditbuyingQuantity','$EditsellingPrice','$EditavailableQuantity','$EditIngredient_visibility','$Editingredientname','$ItemId')";
	$queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
	if($queryRecords){

		echo "<script>alert('Ingredient Data Updated Successfully');document.location='baker.php'</script>";
	}
	else{
		echo "<script>alert('Ingredient Data Not Updated Successfully');document.location='baker.php'</script>";
	}
	}
	public function updateIngredientVisibilityData($EditingredientId,$SupplierVisibility)
	{
		
	$sql="CALL sp_change_ingrdient_visibility('$EditingredientId', '$SupplierVisibility')";
	$queryRecords = pg_query($this->conn, $sql) or die("error to fetch ingredient data");
	if($queryRecords){

		echo "<script>alert('Ingredient Visibility Status Updated Successfully');document.location='baker.php'</script>";
	}
	else{
		echo "<script>alert('Ingredient Visibility Status Not Updated Successfully');document.location='baker.php'</script>";
	}
	}
	public function updateSupplierVisibilityData($ShowHidesupplierId)
	{
		
	$sql="CALL sp_change_Supplier_visibility('$ShowHidesupplierId')";
	$queryRecords = pg_query($this->conn, $sql) or die("error to fetch ingredient data");
	if($queryRecords){

		echo "<script>alert('Supplier Visibility Status Updated Successfully');document.location='baker.php'</script>";
	}
	else{
		echo "<script>alert('Supplier Visibility Status Not Updated Successfully');document.location='baker.php'</script>";
	}
	}

	

	public function deleteIngredientData($deletesupplierItemId,$deleteIngredientId,$deletePriceId)
	{

		$sql="CALL sp_delete_supplier_item('$deletesupplierItemId','$deleteIngredientId','$deletePriceId')";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
		if($queryRecords){

			echo '<script> alert("Data Deleted Successfully");</script>';
			header('Location:baker.php');
		}
		else{
			echo '<script> alert("Data Not Deleted Successfully");</script>';
		}
		
		
	}

	public function restokeIngredientData($restokeprice_id,$restokebuyingprice,$restokebuyingquantity,$restokesellingprice,$restokeavailablequantity)
		{
			
		$sql="CALL sp_restoke_price('$restokeprice_id', '$restokebuyingprice','$restokebuyingquantity','$restokesellingprice','$restokeavailablequantity')";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch customer data");
		if($queryRecords){
	
			echo '<script> alert("Data Saved Successfully");</script>';
			header('Location:baker.php');
		}
		else{
			echo '<script> alert("Data Not Saved Successfully");</script>';
		}
		}
 #################################################################  Ingredient End
#################################################################  Order Start

 public function getall_ingredientlistwithpriceandprovince() {
	$sql = 'SELECT * FROM "getall_ingredientlistwithpriceandprovince" ';
	$queryRecords = pg_query($this->conn, $sql) or die("error to fetch customer data");
	$data = pg_fetch_all($queryRecords);
	return $data;
}

public function getall_PizzaSize() {
	$sql = 'SELECT * FROM getall_PizzaSize ';
	$queryRecords = pg_query($this->conn, $sql) or die("error to fetch customer data");
	$data = pg_fetch_all($queryRecords);
	return $data;
}

public function insertOrderData($bakerid,$customerName,$customerEmail,$customerPhone,$customerAddress,$IngredientList,$SizeId,$OrderStatudId)
		{
			#$PrizaName="Italian";
     
			$checkingData=False;

			if (is_array($IngredientList) || is_object($IngredientList))
					{
						foreach($IngredientList as $row)
						{
							$IngredientId=$row;
							$sql="select * from totalingrdientAvaiabilityQutatity('$IngredientId')";
							$queryRecords = pg_query($this->conn, $sql) or die("error to fetch customer data");
							$data = pg_fetch_all($queryRecords);
							
							if(!is_array($data)){
									echo "<script> alert('No Ingredient is Available for a new Order.');document.location='order.php'</script>";
	
								exit;
							}
							else{
								$checkingData=True;
							}
						
						}
			
		
					}
		
		if($checkingData){
			$sql="CALL sp_add_customer('$customerName', '$customerEmail','$customerPhone','$customerAddress','$bakerid','$SizeId','$OrderStatudId')";
	     	$queryRecords = pg_query($this->conn, $sql) or die("error to fetch customer data");
	
		if($queryRecords){
			if (is_array($IngredientList) || is_object($IngredientList))
			{
				foreach($IngredientList as $row)
				{
					$IngredientId=$row;
					$sql="CALL sp_add_IngredientList('$IngredientId')";

					$queryRecords = pg_query($this->conn, $sql) or die("error to fetch customer data");
				
				}
				
				if($queryRecords){
				
					echo '<script> alert("Data Saved Successfully");</script>';
					header('Location:order.php');
				}
				else{
					echo '<script> alert("Data Not Saved Successfully");</script>';
				}
					
		
			}
		}

		}
		
   }
   public function get_order_list() {
	$sql = 'SELECT * FROM "get_order_list" ';
	$queryRecords = pg_query($this->conn, $sql) or die("error to fetch Customer data");
	$data = pg_fetch_all($queryRecords);
	return $data;
 } 

 
 public function processOrder($processOrderId)
 {
     $process=1;
	 $sql="CALL sp_process_order('$processOrderId','$process')";
	 $queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
	 if($queryRecords){

		 echo '<script> alert("Data Processed Successfully");</script>';
		
		 header('Location:baker.php');
	 }
	 else{
		 echo '<script> alert("Data Not Deleted Successfully");</script>';
	 }
	 
	 
 }
 
	#################################################################  Order End
  
}



  

?>