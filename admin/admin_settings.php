<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
    
    <link href="assets/css/all.css" rel="stylesheet">
    <link href="assets/css/regular.css" rel="stylesheet">
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
       <!-- /. NAV TOPBAR  -->
        <?php include 'includes/topbar.php';?>

        <!-- /. NAV TOP  -->
        <?php include 'includes/leftbar.php';?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Settings</h2>   
                        <h5>Welcome to <b>Habaraduwa Pradeshiya Sabha</b> Admin Dashboard </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />

<br><br><br>
    <div class="row">
      
        <div style="margin-left: 110px;" class="col-md-4 col-sm-12 col-xs-12">
              <a href="admin_editProfile.php"><div class="panel back-dash bg-color-blue">
                  <i class="fa fa-edit fa-3x"></i><strong> &nbsp; Admin</strong>
                  <p class="text-muted">Change Contact Info </p>
              </div></a>
                       
        </div>
        <div style="margin-left: 110px;" class="col-md-4 col-sm-12 col-xs-12">
              <a href="admin_changePass.php"><div class="panel back-dash bg-color-blue">
                  <i class="fa fa-unlock-alt fa-3x"></i><strong> &nbsp; Admin</strong>
                  <p class="text-muted">Change Password </p>
              </div></a>
                       
        </div>
        
    </div>

              
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
