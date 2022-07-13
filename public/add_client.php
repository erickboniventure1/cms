<?php    
require('includes/user_db.php');
// echo var_dump($_POST);
$client_no = $_POST['client_no'];
$client_no = mysqli_real_escape_string($con,$client_no); 
$company_name = $_POST['company_name'];
$category = $_POST['category'];
$category = mysqli_real_escape_string($con,$category); 
	$full_name = $_POST['full_name'];
	$full_name = mysqli_real_escape_string($con,$full_name); 
	$c_position = "Sales Manager";
	$c_position = mysqli_real_escape_string($con,$c_position); 
	$email = $_POST['email'];
	$email = mysqli_real_escape_string($con,$email);
	$phone= $_POST['phone'];
	$phone = mysqli_real_escape_string($con,$phone);
	$address = $_POST['address'];
	$address =mysqli_escape_string($con, $address);
    $location = $_POST['location'];
	$location =mysqli_escape_string($con, $location);
    $region = $_POST['region'];
	$region=mysqli_escape_string($con, $region  );
    $country = $_POST['country'];
	$country=mysqli_escape_string($con,  $country);
	$amount = "1000000";
	$amount=mysqli_escape_string($con,  $amount);
	$reg_date= $_POST['reg_date'];
	$reg_date = mysqli_real_escape_string($con,$reg_date);
    $due_date= $_POST['due_date'];
	$due_date = mysqli_real_escape_string($con,$due_date);

        $query = "INSERT into clients (client_no,company_name,category,full_name,c_position,email,phone,address,location,region,country,amount,reg_date,due_date) VALUES ('$client_no','$company_name','$category','$full_name','$c_position','$email','$phone','$address','$location','$region','$country','$amount','$reg_date','$due_date')";
        $result = mysqli_query($con,$query) or die(mysqli_error($con));

if($result){
	header("Location: http://localhost/frame_admin/index.php");
}else{
	echo 'Eror';
}
// }
//  else{

//  }

?>

