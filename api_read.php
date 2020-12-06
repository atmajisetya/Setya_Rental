<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "cars";
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Failed:" . $conn->connect_error;
    }
    
    //read data
    //$sql = "SELECT * FROM cars WHERE status = 'Available'";
    $sql = "SELECT * FROM cars WHERE status = 'Available'";
    $rs = $conn->query($sql);
    $json_data= array();
    
	while($row = $rs->fetch_assoc()){
        $json_data[]= $row;
    }
    //set to json
    header('Content-type: application/json');
    echo json_encode($json_data);
    
?>