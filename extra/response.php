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
	
	public function getPizzaOrderList() {
		$sql = "SELECT * FROM PizzaBakerDisplay";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
		$data = pg_fetch_all($queryRecords);
		return $data;
    }
    public function ttt(){
         alert();
    }
    
}

?>
