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
	public function insertSupplierData($suppliername, $supplieraddress,$visibility,$supplieridentificationno){

		$sql="CALL sp_add_only_supplier('$suppliername', '$supplieraddress','$visibility','$supplieridentificationno')";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch supplier data");
		if($queryRecords){

			echo '<script> alert("Data Saved Successfully");</script>';
			header('Location:baker.php');
		}
		else{
			echo '<script> alert("Data Not Saved Successfully");</script>';
		}
		
		
	}

	public function updateSupplierData($supplierId,$suppliername, $supplieraddress,$visibility,$identificationno){

		$sql="CALL sp_change_only_supplier('$supplierId','$suppliername', '$supplieraddress','$visibility','$identificationno')";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch Supplier data");
		if($queryRecords){

			echo '<script> alert("Data Updated Successfully");</script>';
			header('Location:baker.php');
		}
		else{
			echo '<script> alert("Data Not Updated Successfully");</script>';
		}
		
		
	}
	public function deleteSupplierData($supplierId){

		$sql="CALL sp_delete_only__supplier('$supplierId')";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
		if($queryRecords){

			echo '<script> alert("Data Deleted Successfully");</script>';
			header('Location:baker.php');
		}
		else{
			echo '<script> alert("Data Not Deleted Successfully");</script>';
		}
		
		
	}
	public function supplierIdentificationDuplicateChecking($DuplicateChecking) {
	
		$sql = "SELECT * FROM totalRecords('$DuplicateChecking') ";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
		
		$data = pg_fetch_all($queryRecords);
		//exit;
		$response = array("status"=>"Yes");
	
		if(is_array($data)){
				 $response = array("status"=>"No");
		 
		 }
		 echo json_encode($response);
	#die;
	}

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

		echo '<script> alert("Data Saved Successfully");</script>';
		header('Location:baker.php');
	}
	else{
		echo '<script> alert("Data Not Saved Successfully");</script>';
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

		echo '<script> alert("Data Saved Successfully");</script>';
		header('Location:baker.php');
	}
	else{
		echo '<script> alert("Data Not Saved Successfully");</script>';
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
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
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
	$queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
	$data = pg_fetch_all($queryRecords);
	return $data;
}

#################################################################  Order End
  
}



  

?>