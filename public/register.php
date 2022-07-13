<?php 
if(isset($_POST['create_account'])){
  if(!empty($_POST["business_name"])){
    $business_name = $_POST["business_name"];
    $db_name = strtolower(str_replace(" ","_", str_replace(".","",str_replace("'","",$business_name))));

    $servername = "localhost";
    $username = "root";
    $password = "";
    
    // Creating connection Developer
    $conn = mysqli_connect($servername, $username, $password,'sr');
    // Checking connection
    if (!$conn) {
        die("Connection failed to SR: " . mysqli_connect_error());
    }
    else {
        $business_no = "SR".rand(0, 100000);
        $business = mysqli_escape_string($conn, $_POST["business_name"]);
        $address = mysqli_escape_string($conn, $_POST['address']);
        $region = mysqli_escape_string($conn, $_POST['region']);
        $country = mysqli_escape_string($conn, $_POST['country']);
        $phone_no = mysqli_escape_string($conn, $_POST['phone_no']);
        $personal_email = mysqli_escape_string($conn, $_POST['personal_email']);
        
        $sql_sr = "INSERT INTO tb_system_user(business_no,business_name,phone,email,address,region,country) "
                . "VALUES('$business_no','$business','$phone_no','$personal_email','$address','$region','$country')";
        $sql_query = mysqli_query($conn, $sql_sr) or die(mysqli_error($conn));
    }
    mysqli_close($conn);
    
    // Creating connection User
    $con = mysqli_connect($servername, $username, $password);
    // Checking connection
    if (!$con) {
        die("Connection failed to User: " . mysqli_connect_error());
    }

    // Creating a database named newDB
    $sql = "CREATE DATABASE ".$db_name;
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    function generate_string($input, $strength = 16) {
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
        return $random_string;
    }
    if (mysqli_query($con, $sql)) {
        $con = mysqli_connect($servername, $username, $password, $db_name);
        require_once ("db_config.php");
        $business_title = mysqli_escape_string($con, $_POST["business_name"]);
        $fname = mysqli_escape_string($con, $_POST['fname']);
        $lname = mysqli_escape_string($con, $_POST['lname']);
        $dob = mysqli_escape_string($con, $_POST['dob']);
        $gender = mysqli_escape_string($con, $_POST['gender']);
        $phone_no = mysqli_escape_string($con, $_POST['phone_no']);
        $personal_email = mysqli_escape_string($con, $_POST['personal_email']);
        $username = mysqli_escape_string($con, $_POST['username']);
        $password = mysqli_escape_string($con, $_POST['password']);
        $cpwd = mysqli_escape_string($con, $_POST['cpwd']);
        $address = mysqli_escape_string($con, $_POST['address']);
        $p_o_box = mysqli_escape_string($con, $_POST['p_o_box']);
        $region = mysqli_escape_string($con, $_POST['region']);
        $country = mysqli_escape_string($con, $_POST['country']);
        if(!empty($fname)){
           if(!empty($lname)){
               if(!empty($dob)){
                   if(!empty($gender)){
                       if(!empty($phone_no)){
                           if(!empty($personal_email)){
                               if(!empty($username)){
                                   if(!empty($password)){
                                       if(!empty($cpwd)){
                                           if(!empty($address)){
                                               if(!empty($region)){
                                                   if(!empty($country)){
                                                        if(md5($password) == md5($cpwd)){
                                                            //if(!filter_var($personal_email, FILTER_VALIDATE_EMAIL)){
                                                            $account_id = generate_string($permitted_chars, 20);
                                                            $branch_id = generate_string($permitted_chars, 16); 
                                                            $query = "INSERT INTO tbl_store(store_name,no_of_branch,account_id) VALUES('$business_title','1','$account_id')";
                                                            $sql_store = mysqli_query($con, $query) or die(mysqli_error($con));
                                                            $query_user = "INSERT INTO tbl_user(user_id,fname,lname,gender,age,phone,email,username,address,profile_pic) VALUES('$account_id','$fname','$lname','$gender','$dob','$phone_no','$personal_email','$username','$address','')";
                                                            $sql_user = mysqli_query($con, $query_user) or die(mysqli_error($con));
                                                            $query_tbl_user_accesss = "INSERT INTO tbl_user_accesss (username,email,phone_no,password,account_id,branch_id,user_type) VALUES ('$username','$personal_email','$phone_no','".md5($password)."','$account_id','$branch_id','admin')";
                                                            $sql_user_access = mysqli_query($con, $query_tbl_user_accesss) or die(mysqli_error($con));
                                                            $query_tbl_branch = "INSERT INTO tbl_branch (account_id,branch_name,branch_id,branch_location,branch_type) VALUES ('$account_id', 'NULL', '$branch_id','$address','NULL')";
                                                            $sql_branch = mysqli_query($con, $query_tbl_branch) or die(mysqli_error($con));
                                                            //} else {
                                                            //    $echo = "<div style='color:white' class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'>x</button><div class='alert-icon'><i class='icon-exclamation'></i></div><div class='alert-message'><span><strong>Warning!</strong> Invalid Email Address. Try Again</span></div></div>";
                                                            //}
                                                                  $echo = "<div style='color:white' class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'>x</button><div class='alert-icon'><i class='icon-exclamation'></i></div><div class='alert-message'><span><strong>Good Job..!</strong> Account is Successful Registerd. <a href='index.php'>Login Now</a></span></div></div>";
                                                        } else {
                                                              $echo = "<div style='color:white' class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'>x</button><div class='alert-icon'><i class='icon-exclamation'></i></div><div class='alert-message'><span><strong>Warning!</strong> Password Doesn't Match. Try Again</span></div></div>";
                                                        }
                                                   } else {
                                                       $echo = "<div style='color:white' class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'>x</button><div class='alert-icon'><i class='icon-exclamation'></i></div><div class='alert-message'><span><strong>Warning!</strong> Fill Country. Try Again</span></div></div>";
                                                   }
                                               } else {
                                                   $echo = "<div style='color:white' class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'>x</button><div class='alert-icon'><i class='icon-exclamation'></i></div><div class='alert-message'><span><strong>Warning!</strong> Fill Region. Try Again</span></div></div>";
                                               }
                                           } else {
                                               $echo = "<div style='color:white' class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'>x</button><div class='alert-icon'><i class='icon-exclamation'></i></div><div class='alert-message'><span><strong>Warning!</strong> Fill Address. Try Again</span></div></div>";
                                           }
                                       } else {
                                           $echo = "<div style='color:white' class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'>x</button><div class='alert-icon'><i class='icon-exclamation'></i></div><div class='alert-message'><span><strong>Warning!</strong> Fill Confirm Password. Try Again</span></div></div>";
                                       }
                                   } else {
                                       $echo = "<div style='color:white' class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'>x</button><div class='alert-icon'><i class='icon-exclamation'></i></div><div class='alert-message'><span><strong>Warning!</strong> Fill Password. Try Again</span></div></div>";
                                   }
                               } else {
                                   $echo = "<div style='color:white' class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'>x</button><div class='alert-icon'><i class='icon-exclamation'></i></div><div class='alert-message'><span><strong>Warning!</strong> Fill username. Try Again</span></div></div>";
                               }
                           } else {
                               $echo = "<div style='color:white' class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'>x</button><div class='alert-icon'><i class='icon-exclamation'></i></div><div class='alert-message'><span><strong>Warning!</strong> Fill Email. Try Again</span></div></div>";
                           }
                       } else {
                           $echo = "<div style='color:white' class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'>x</button><div class='alert-icon'><i class='icon-exclamation'></i></div><div class='alert-message'><span><strong>Warning!</strong> Fill Phone Number. Try Again</span></div></div>";
                       }
                   } else {
                       $echo = "<div style='color:white' class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'>x</button><div class='alert-icon'><i class='icon-exclamation'></i></div><div class='alert-message'><span><strong>Warning!</strong> Select Gender. Try Again</span></div></div>";
                   }
               }else{
                   $echo = "<div style='color:white' class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'>x</button><div class='alert-icon'><i class='icon-exclamation'></i></div><div class='alert-message'><span><strong>Warning!</strong> Fill Birth Date. Try Again</span></div></div>";
               }
           }else{
               $echo = "<div style='color:white' class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'>x</button><div class='alert-icon'><i class='icon-exclamation'></i></div><div class='alert-message'><span><strong>Warning!</strong> Fill Last Name. Try Again</span></div></div>";
           } 
        }else{
            $echo = "<div style='color:white' class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'>x</button><div class='alert-icon'><i class='icon-exclamation'></i></div><div class='alert-message'><span><strong>Warning!</strong> Fill First Name. Try Again</span></div></div>";
        }
    } else {
        $echo = "<div style='color:white' class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'>x</button><div class='alert-icon'><i class='icon-exclamation'></i></div><div class='alert-message'><span><strong>Warning!</strong> User exist. Try another</span></div></div>";
    }
    // closing connection
    mysqli_close($con);
  }
  else{
    $echo = "<div style='color:white' class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'>x</button><div class='alert-icon'><i class='icon-exclamation'></i></div><div class='alert-message'><span><strong>Warning!</strong> Business Name is Empty. Try Again</span></div></div>";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Stock Record</title>
     <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard SR" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="images/favicon_io/favicon.ico" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="//fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet" type="text/css">
    <link href="css/select2.min.css" rel="stylesheet">
    <link href="css/daterangepicker.css" rel="stylesheet">
    <link href="css/dropzone.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="css/fullcalendar.min.css" rel="stylesheet">
    <link href="css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/main.css?version=4.4.1" rel="stylesheet">
    <link href="css/loader.css" rel="stylesheet">
</head>

<body>

<div class="all-wrapper menu-side with-pattern">
        <div class="auth-box-w-reg">
            <div class="logo-w">
                <a href="index.html"><img alt="" src="images/logo_sr_lg.png"></a>
            </div>

            <h4 class="auth-header">Create Account</h4>

                <div class="content-i">
                    <div class="content-box">
                        <div class="element-wrapper">
                                <form id="register_form" method="POST" action="register.php">
                                <!--- out ---> <?php if(isset($echo)){ echo $echo;} ?>
                                    <div class="steps-w">
                                        <div class="step-triggers"><a class="step-trigger active" href="#stepContent1">Personal Details</a><a class="step-trigger" href="#stepContent2">Login Details</a><a class="step-trigger" href="#stepContent3">Business Details</a></div>
                                        <div class="step-contents">
                                            <div class="step-content active" id="stepContent1">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for=""> First Name</label>
                                                            <input class="form-control" name="fname" required="required" placeholder="First Name" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Last Name</label>
                                                            <input class="form-control" name="lname" required="required" placeholder="Last Name" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for=""> Date of Birth</label>
                                                            <input class="form-control single-daterange" placeholder="Date of Birth" name="dob" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Gender</label>
                                                            <select class="form-control" required="required" name="gender" id="gender">
                                                                <option value="selected">Select Gender</option>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for=""> Phone No.</label>
                                                            <input class="form-control" name="phone_no" required="required" placeholder="Phone Number" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Personal Email</label>
                                                            <input type="email" class="form-control" required="required" name="personal_email" placeholder="Personal Email">
                                                        </div>
                                                    </div>
                                                </div>
                                               <!--  <div class="form-group">
                                                    <label for=""> States with Offices</label>
                                                    <select class="form-control select2" multiple="true">
                                                        <option selected="true">New York</option>
                                                        <option selected="true">California</option>
                                                        <option>Boston</option>
                                                        <option>Texas</option>
                                                        <option>Colorado</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for=""> Regular select</label>
                                                    <select class="form-control">
                                                        <option>Select State</option>
                                                        <option>New York</option>
                                                        <option>California</option>
                                                        <option>Boston</option>
                                                        <option>Texas</option>
                                                        <option>Colorado</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label> Example textarea</label>
                                                    <textarea class="form-control" rows="3"></textarea>
                                                </div> -->
                                                <div class="form-buttons-w text-right"><a class="btn btn-primary step-trigger-btn" href="#stepContent2"> Continue</a></div>
                                            </div>
                                            <div class="step-content" id="stepContent2">
                                                <div class="form-group">
                                                    <label for=""> Username</label>
                                                    <input class="form-control" placeholder="Enter Username" required="required" name="username" type="text">
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for=""> Password</label>
                                                            <input class="form-control" id="password" name="password" required="required" placeholder="Password" type="password">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Confirm Password</label>
                                                            <input class="form-control" id="cpwd" name="cpwd" onblur="check()" required="required" placeholder="Password" type="password">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group">
                                                    <label for=""> Regular select</label>
                                                    <select class="form-control">
                                                        <option>Select State</option>
                                                        <option>New York</option>
                                                        <option>California</option>
                                                        <option>Boston</option>
                                                        <option>Texas</option>
                                                        <option>Colorado</option>
                                                    </select>
                                                </div> -->
                                                <div class="form-buttons-w text-right"><a class="btn btn-primary step-trigger-btn" href="#stepContent3"> Continue</a></div>
                                            </div>
                                            <div class="step-content" id="stepContent3">
                                                <div class="form-group">
                                                    <label for=""> Business Name</label>
                                                    <input type="text" class="form-control" required="required" name="business_name" id="business_name">
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for=""> Bissness Address</label>
                                                            <input class="form-control" name="address" required="required" placeholder="Business Address" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">P.O.Box</label>
                                                            <input class="form-control" placeholder="12477" name="p_o_box" id="p_o_box" type="Number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Region</label>
                                                            <input class="form-control" name="region" required="required" placeholder="region" id="region" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for=""> Country</label>
                                                            <input class="form-control" name="country" required="required" placeholder="country" id="country" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                              <div class="form-buttons-w text-right">
                                                    <label class="form-check-label text-left">
                                                        <a href="index.php" style="color: grey">I've an Account!</a>
                                                    </label>
                                                    <input type="submit" name="create_account" class="btn btn-primary" value="Submit Form"/>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                               </form>
                            <div id="pageloader">
                                <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
<script src="js/loader.js"></script>
<script>
//$(document).ready(function(){
//  $("#register_form").on("submit", function(){
//    document.getElementById("pageloader").style.display= "block";
//    $("#pageloader").fadeOut();
//  });//submit
//});//document ready
onReady(function () {
  setVisible('#pageloader', false);
});

function check(){
    var pass = $("#password").val();
    var cpass = $("#cpwd").val();
    if(pass !== cpass){
        document.getElementById("password").style.border="2px solid red";
        document.getElementById("cpwd").style.border="2px solid red";
    }else{
        document.getElementById("password").style.border="2px solid green";
        document.getElementById("cpwd").style.border="2px solid green";
    }
 }
</script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/select2.full.min.js"></script>
    <script src="js/jquery.barrating.min.js"></script>
    <script src="js/ckeditor.js"></script>
    <script src="js/validator.min.js"></script>
    <script src="js/daterangepicker.js"></script>
    <script src="js/ion.rangeSlider.min.js"></script>
    <script src="js/dropzone.js"></script>
    <script src="js/mindmup-editabletable.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/fullcalendar.min.js"></script>
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/util.js"></script>
    <script src="js/alert.js"></script>
    <script src="js/button.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/collapse.js"></script>
    <script src="js/dropdown.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/tab.js"></script>
    <script src="js/tooltip.js"></script>
    <script src="js/popover.js"></script>
    <script src="js/demo_customizer.js?version=4.4.1"></script>
    <script src="js/main.js?version=4.4.1"></script>
</html>




