<?php    
require('includes/user_db.php');
// echo var_dump($_POST);
$category= $_POST['category'];
$category = mysqli_real_escape_string($con,$category); 

        $query = "INSERT into categories (category) VALUES ('$category')";
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

