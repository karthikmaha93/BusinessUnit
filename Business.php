<?php
include 'DB_Connection.php';
$sql = "SELECT * FROM `business_table`";
$result = $conn->query($sql);
$data = array();
foreach ($result as  $value) {

	$data[] = array("Token"=>$value['token_number'],"B_Name"=>$value['business_name'],"T_Status"=>$value['token_status']);
}	

echo json_encode($data);

?>