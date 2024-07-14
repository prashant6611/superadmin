<?php require_once '../Connection/conn.php';
$msg="";
?>
<?php 
if(($_SESSION['login_user']=="")) 
    { header('location:index.php');}
    
if (isset($_POST["submit"])) 
    {
    if(
        !isset($_POST['title']) ||
        !isset($_POST['link'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
$title=$_POST['title'];
$link=$_POST['link'];

    if(($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg"))
{  if(($_FILES["file"]["size"] >= "1024") ){
	 
  $file = time().$_FILES['file']['name'];
  
  $sql = "INSERT INTO client (title, file, link) VALUES ('".$title."','".$file."','".$link."')";
  if((mysqli_query($db, $sql)) && (move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" .$file)) ){
      $msg =  "Data Added Successfully";
  } 
  }
else {
$msg =  "Operation Failed"; 
}
}
    }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Our Associatess</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
   
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      <?php include 'header.php'; ?>
            
      <!--header end-->

      <!--sidebar start-->
      <?php include 'sidebar.php'; ?>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		        <div class="row">
				<div class="col-lg-6">
					<h3 class="page-header"><i class="fa fa-profile"></i> Our Clients</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
						<li><i class="fa fa-profile"></i>Add Associates</li>
						
					</ol>
				</div>
			</div>
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Add Associates
                          </header>
                          <div class="panel-body">
                              <form role="form" enctype="multipart/form-data" action="<?PHP echo $_SERVER['PHP_SELF']; ?> " method="post">
                                  <p><strong><span id="success_message" class="text-success"><?php echo $msg;?></span></strong></p>
                                  <div class="form-group">
                                      <label for="exampleInputname">Title</label>
                                      <input type="text" class="form-control" name="title">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputname">Associate's URL</label>
                                      <input type="text" class="form-control" name="link" >
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="exampleInputFile">Upload Image</label>
                                      <input type="file" name="file" size="32"required>
                                      <p class="help-block">Photo size:- 380x349 px</p>
                                      
                                  </div>
                                  
                                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                              </form>

                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
	<script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="js/xcharts.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>	
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>	
	<script src="js/charts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
  
  

  </body>
</html>
