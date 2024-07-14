<?php require_once '../Connection/conn.php';
   
?>
<?php 
if(($_SESSION['login_user']=="")) 
    { header('location:index.php');}

if (isset($_GET['id'])) {
                          $id = $_GET['id'];
                          $sql = "SELECT * FROM page WHERE id = $id";
                          $rs_result = mysqli_query($db, $sql);
          if(mysqli_num_rows($rs_result)==1)
          {
              $row = mysqli_fetch_array($rs_result);
    
           }
                          }
if (isset($_POST['update']))
{
    $id = $_POST['id'];
    $name=$_POST['page_name'];
    $title=$_POST['title'];
    $keyword=$_POST['keyword'];
    $description=$_POST['description'];
    $metatag = $_POST['metatag'];
    $detail=$_POST['detail'];
                          $sql = "UPDATE page SET sub_page='$name',title='$title', keyword='$keyword', description='$description', metatag='$metatag' , detail='$detail' WHERE id = $id";
                          if (mysqli_query($db, $sql)) {
    $success= "Record updated successfully";
    header("location: page.php?update_success");
} else {
    $error= "Error updating record: " . mysqli_error($conn);
    header("location: page.php?update_fail");
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

    <title>Page Edit</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- date picker -->
    
    <!-- color picker -->
    
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

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
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Page Edit</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
						<li><i class="icon_pencil"></i>Page Edit</li>
						<li><i class="fa fa-file-text-o"></i>Page name</li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Page Edit 
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="<?PHP echo $_SERVER['PHP_SELF']; ?>" novalidate="novalidate">
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Page Name <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                              <input class="form-control" id="subject" name="page_name" minlength="5" value="<?php echo $row['sub_page'];?>" type="text" required="">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Page Title <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="cname" name="title" value="<?php echo $row['title'];?>" minlength="5" type="text" required="">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">Meta Keyword <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control " id="ccomment" name="keyword" required=""><?php echo $row['keyword'];?></textarea>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Meta Description</label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control " id="ccomment" name="description" required=""><?php echo $row['description'];?></textarea>
                                          </div>
                                      </div>
                                                                            
                                      <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Metatag</label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control"  id="ccomment" name="metatag" required=""><?php echo $row['metatag'];?></textarea>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Detail</label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control ckeditor" name="detail" rows="6"><?php echo $row['detail'];?></textarea>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" name="update" type="submit">Save</button>
                                              
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>
              
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <div class="text-right">
        
    </div>
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <!-- jquery ui -->
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom checkbox & radio-->
    <script type="text/javascript" src="js/ga.js"></script>
    <!--custom switch-->
    <script src="js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="js/jquery.tagsinput.js"></script>
    
    <!-- colorpicker -->
   
    <!-- bootstrap-wysiwyg -->
    <script src="js/jquery.hotkeys.js"></script>
    <script src="js/bootstrap-wysiwyg.js"></script>
    <script src="js/bootstrap-wysiwyg-custom.js"></script>
    <!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    <!-- custom form component script for this page-->
    <script src="js/form-component.js"></script>
    <!-- custome script for all page -->
    <script src="js/scripts.js"></script>


  </body>
</html>
