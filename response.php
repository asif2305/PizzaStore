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
	
	public function getSupplierList() {
		$sql = 'SELECT * FROM "Supplier"';
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
 
    
}

?>