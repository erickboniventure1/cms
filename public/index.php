<!DOCTYPE html>
<html>
<head>
    <title>CRS</title>
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
        <script defer src="/__/firebase/9.9.0/firebase-app-compat.js"></script>
    <!-- include only the Firebase features as you need -->
    <script defer src="/__/firebase/9.9.0/firebase-auth-compat.js"></script>
    <script defer src="/__/firebase/9.9.0/firebase-database-compat.js"></script>
    <script defer src="/__/firebase/9.9.0/firebase-firestore-compat.js"></script>
    <script defer src="/__/firebase/9.9.0/firebase-functions-compat.js"></script>
    <script defer src="/__/firebase/9.9.0/firebase-messaging-compat.js"></script>
    <script defer src="/__/firebase/9.9.0/firebase-storage-compat.js"></script>
    <script defer src="/__/firebase/9.9.0/firebase-analytics-compat.js"></script>
    <script defer src="/__/firebase/9.9.0/firebase-remote-config-compat.js"></script>
    <script defer src="/__/firebase/9.9.0/firebase-performance-compat.js"></script>
    <!-- 
      initialize the SDK after all desired features are loaded, set useEmulator to false
      to avoid connecting the SDK to running emulators.
    -->
    <script defer src="/__/firebase/init.js?useEmulator=true"></script>
</head>

<body class="auth-wrapper">
    <script>
    </script>
    <div class="all-wrapper menu-side with-pattern">
        <div class="auth-box-w">
            <div class="logo-w">
               <!-- <center> <a href="index.php"><img alt="" src="images/logo_sr_lg.png"></a></center><br> -->
            </div>
    <?php
    session_start();
    include 'includes/user_db.php';
    // If form submitted, insert values into the database.
    if (isset($_POST['login'])){
        $_username = stripcslashes($_POST['username']);
        $user_name = mysqli_real_escape_string($con,$_username);
        $_password = stripslashes($_POST['password']);
        $pwd = mysqli_real_escape_string($con,$_password);
        if(!empty($user_name) && !empty($pwd)){
        $query = "SELECT * FROM users WHERE (username='$user_name') and password='".md5($pwd)."'";
        $result = mysqli_query($con,$query) or die(mysqli_error($con));
        $fetch_access = mysqli_fetch_array($result);
        $rows = mysqli_num_rows($result);
        $db_username = $fetch_access['username'];
        $db_pass = $fetch_access['password'];
        if($rows !=0){
         if($db_username == $user_name){
                if($db_pass == md5($pwd)){
                        $_SESSION['username'] = $user_name;
                        $_SESSION['db'] = $db_name;
                        // $_SESSION['branch_id'] = $branch_id;
                        header("Location: store.php?dashboard"); // Redirect user to index.php
                } else {
                    $echo = "<div style='color:white' class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'>x</button><div class='alert-icon'><i class='icon-exclamation'></i></div><div class='alert-message'><span><strong>Warning!</strong> Invalid Password. Try Again</span></div></div>";
                }
            } else {
                $echo = "<div style='color:white' class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'>x</button><div class='alert-icon'><i class='icon-exclamation'></i></div><div class='alert-message'><span><strong>Warning!</strong> Invalid Username. Try Again</span></div></div>";
            }
        } else {
            $echo = "<div style='color:white' class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'>x</button><div class='alert-icon'><i class='icon-exclamation'></i></div><div class='alert-message'><span><strong>Warning!</strong> User does not exist. Try another</span></div></div>";
        }
        } else {
          $echo = "<div style='color:white' class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'>x</button><div class='alert-icon'><i class='icon-exclamation'></i></div><div class='alert-message'><span><strong>Warning!</strong> Fill All required Field. Try Again</span></div></div>";
        }
        }
?>



        <div class="panel-body">
             <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label for="">Username</label>
                    <input class="form-control" required="required" name="username" placeholder="Enter your username or email or phone" type="text">
                    <div class="pre-icon os-icon os-icon-user-male-circle"></div>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input class="form-control" required="required" name="password" placeholder="Enter your password" type="password">
                    <div class="pre-icon os-icon os-icon-fingerprint"></div>
                </div>
                <div class="buttons-w">
                    <button type="submit" name="login" class="btn btn-primary">Log me in</button>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <!-- <a href="register.php">Need an Account?</a> -->
                        </label>
                    </div>
                </div>
            </form>

            
            <div style="padding: 10px;">
            <?php if(isset($echo)){echo $echo;} 
            if(isset($_SESSION['error'])){ echo $_SESSION['error']; unset($_SESSION['error']);}
            ?>
            </div>
         </div>
    </div>
    <script src="js/jquery-1.11.1.min.js"></script>
<script type="text" src="config.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/chart.min.js"></script>
      <script src="js/chart-data.js"></script>
      <script src="js/easypiechart.js"></script>
      <script src="js/easypiechart-data.js"></script>
      <script src="js/bootstrap-datepicker.js"></script>

</body>

</html>