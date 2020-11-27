

<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "cars";
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Failed:" . $conn->connect_error;
    }

    //insert data
    if($_SERVER['REQUEST_METHOD'] =="POST"){
        //get data from the rest client
        
        $fname = $_POST['fname'];
		$id_no = $_POST['id_no'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
        $location = $_POST['location'];
        $car_id = $_POST['car_id'];
        
            
        $qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,car_id,status)
					VALUES('$fname','$id_no','$gender','$email','$phone','$location','$car_id','Pending')";
		//$qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,car_id,status)
				//VALUES('{$_POST['fname']}', '{$_POST['id_no']}',' {$_POST['gender']}','{$_POST['email']}','{$_POST['phone']}','{$_POST['location']}','{$_POST['car_id']}','Pending')";
		$result = $conn->query($qry);
		if($result == TRUE){
			echo "Berhasil book";
			echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered. Proceed to pay\");
											window.location = (\"wait.php?name=$fname\")
											</script>";
		} else{
			echo "Gagal";
        }
    }
    
?>

<form method="post">
					<table>
						<tr>
							<td>Full Name:</td>
							<td><input type="text" name="fname" required></td>
						</tr>
						<tr>
							<td>Phone Number:</td>
							<td><input type="text" name="phone" required></td>
						</tr>
						<tr>
							<td>Email Address:</td>
							<td><input type="email" name="email" required></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="text" name="id_no" required></td>
						</tr>
						<tr>
							<td>Gender:</td>
							<td>
                            <input type="text" name="gender" required>
								
							</td>
						</tr>
						<tr>
							<td>Location:</td>
							<td><input type="text" name="location" required></td>
						</tr>
                        <tr>
							<td>Car ID:</td>
							<td><input type="text" name="car_id" required></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right">
							<input type="submit" name="save" value="Submit Details">
							</td>
						</tr>
					</table>
				</form>