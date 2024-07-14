<?php require_once '../Connection/conn.php';
$error="";
$success= "";
?>
<?php 
if(($_SESSION['login_user']=="")) 
    { header('location:index.php');}
    
        $result = "SELECT * from admin WHERE id= '1' ";
        $rs_result = mysqli_query($db, $result);
        $row = mysqli_fetch_array($rs_result);
        $id= $row['id'];
        
?>
<?php
if (isset($_POST['submit'])) {
    $mail = $_POST['mail'];
    $o_pass = $_POST['o_pass'];
    $n_pass = $_POST['n_pass'];
    $c_pass = $_POST['c_pass'];
    
    // echo $o_pass .$n_pass .$c_pass;
    // exit();
   
    if($n_pass === $c_pass ){
        
       if ( $o_pass == $row["password"] ) {
          $sql = "UPDATE admin SET password = '$n_pass' , email = '$mail' WHERE id = $id ";
         if (mysqli_query($db, $sql)) {
             $success= "Password Succesfully Changed.";
            }
            else{
                $error = "Query not inserted, Please Try Again.";   
            }
          
    }
    else{
     $error = "Old Password Not Correct, Please Try Again.";   
    }
        
    }
    else{
        $error = "Password Mismatch, Please Try Again.";
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

    <title>Admin Dashboard</title>

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
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
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
          <section class="wrapper __web-inspector-hide-shortcut__">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-user-md"></i> Edit Profile</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-user-md"></i>Profile Edit</li>
					</ol>
				</div>
			</div>
              
              <!-- page start-->
              <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="<?PHP echo $_SERVER['PHP_SELF']; ?>" novalidate="novalidate">
                  <p style="color : red"><strong><?php echo $error;?></strong></p>
                  <p style="color : green"><strong><?php echo $success;?></strong></p>
            
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Email Id <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="subject" name="mail" type="email" required="" 
                                              value=
                                              "<?php 
                                              if(isset($_POST['submit']))
                                              {echo $mail;}
                                              else{ echo $row['email'];} 
                                              ?>">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Old Password <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="subject" name="o_pass" type="password" required="">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">new Password  <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" name="n_pass" type="password" required="">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">Confirm Password  <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                             <input class="form-control" name="c_pass" type="password" required="">
                                          </div>
                                      </div>
                                      
                                      
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                               <input type="submit" name="submit" class="btn btn-primary">
                                              
                                          </div>
                                      </div>
                                  </form>


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
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

  </script>

  </body>
</html>
