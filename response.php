<?php
include("connection.php");
class DbQuery{

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
	public function insertSupplierData($suppliername, $supplieraddress,$visibility){

		$sql="CALL sp_add_only_supplier('$suppliername', '$supplieraddress','$visibility')";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
		if($queryRecords){

			echo '<script> alert("Data Saved Successfully");</script>';
			header('Location:baker.php');
		}
		else{
			echo '<script> alert("Data Not Saved Successfully");</script>';
		}
		
		
	}

	public function updateSupplierData($supplierId,$suppliername, $supplieraddress,$visibility){

		$sql="CALL sp_change_only_supplier('$supplierId','$suppliername', '$supplieraddress','$visibility')";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
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
 #################################################################  Supplier End

  #################################################################  Ingredient Start

 public function getProvinceList() {
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


public function insertIngredientData($ingredientname,$buyingPrice,$sellingPrice,$buyingQuantity,$availableQuantity,$Ingredient_visibility,$Province,$SupplierData,$bakerid){

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

 #################################################################  Ingredient End
 
    
}


?>