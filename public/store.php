<?php 
session_start();
if(!$_SESSION['username'])
{
    header("location:index.php");
}
else
{
date_default_timezone_set("Africa/Nairobi");
include_once 'includes/user_db.php';
$session_query = "SELECT * FROM users WHERE users.username='{$_SESSION['username']} '";
$session_sql = mysqli_query($con, $session_query) or die(mysqli_error($con));
$get_session_user = mysqli_fetch_array($session_sql);
$user_id = $get_session_user['id'];
$fname = $get_session_user['first_name'];
$lname = $get_session_user['last_name'];
$email = $get_session_user['email'];
$profile_pic = $get_session_user['phone'];
$user_type = $get_session_user['location'];
$branch_id = $get_session_user['address'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer  | Manager</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="images/favicon_io/favicon.ico" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="//fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet" type="text/css">
    <link href="css/select2.min.css" rel="stylesheet">
    <link href="css/daterangepicker.css" rel="stylesheet">
    <link href="css/dropzone.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="css/fullcalendar.min.css" rel="stylesheet">
    <link href="css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/main.css?version=4.4.1" rel="stylesheet">
    <link href="css/loader.css" rel="stylesheet">
    <!-- <script src="https://unpkg.com/localbase/dist/localbase.min.js"></script> -->

</head>
<style>    
   .failed {
       background: red !important;
       color: white !important;
   }
</style>
<body class="menu-position-side menu-side-left full-screen with-content-panel">

    <div class="all-wrapper with-side-panel solid-bg-all">

        <div class="layout-w">
            <!-------------------- START - Mobile Menu -------------------->
            <?php include_once 'layout/mobile_menu.php'; ?>
            <!-------------------- END - Mobile Menu -------------------->
            
            <!-------------------- START - Main Menu -------------------->
            <?php include_once 'layout/main_menu.php'; ?>
            <!-------------------- END - Main Menu -------------------->
            <div class="content-w">
                <!-------------------- START - Top Bar -------------------->
                <?php include_once 'layout/top_bar.php'; ?>
                <!-------------------- END - Top Bar-------------------->
                
                <!-------------------- START - Breadcrumbs-------------------->
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="?dashboard">Dashboard</a></li>
                    <?php if(isset($_GET['page'])){ ?><li class="breadcrumb-item"><a href="?page=<?php echo $_GET['page']; ?>"><?php echo $_GET['page']; ?></a></li><?php } ?>
                </ul>
                <!-------------------- END - Breadcrumbs -------------------->
                <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
                <!------------- LOADER ----------------------->
                <div class="pageloader">
                   <div id="loader" class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                </div>
                <?php 
                if(isset($_GET['dashboard'])){
                    require_once 'layout/dashboard.php';
                }elseif (isset($_GET['page'])) {
                    require_once 'page_engine.php';
                }
                ?>
            </div>
        </div>
        <div class="display-type"></div>
    </div>
    <script src="js/loader.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/select2.full.min.js"></script>
    <script src="js/jquery.barrating.min.js"></script>
    <script src="js/ckeditor.js"></script>
    <script src="js/validator.min.js"></script>
     <script src="js/localbase.min.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/ion.rangeSlider.min.js"></script>
    <script src="js/dropzone.js"></script>
    <script src="js/mindmup-editabletable.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="js/dataTables.buttons.min.js"></script>
    <script src="js/jszip.min.js"></script>
    <script src="js/pdfmake.min.js"></script>
    <script src="js/vfs_fonts.js"></script>
    <script src="js/buttons.html5.min.js"></script>
    <script src="js/buttons.print.min.js"></script>
    <script src="js/buttons.colVis.min.js"></script>
    <script src="js/sum().js"></script>
    <script src="js/fullcalendar.min.js"></script>
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/util.js"></script>
    <script src="js/alert.js"></script>
    <script src="js/button.js"></script>
    <script src="js/buttons.bootstrap4.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/collapse.js"></script>
    <script src="js/dropdown.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/tab.js"></script>
    <script src="js/tooltip.js"></script>
    <script src="js/popover.js"></script>
    <script src="js/demo_customizer.js?version=4.4.1"></script>
    <script src="config.js"></script>
    <script src="js/main.js?version=4.4.1"></script>
    <script>
    onReady(function () {
      setVisible('.pageloader', false);
    });
    
    function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
   </script>
</body>

</html>
<?php
}
?>