<?php require_once '../Connection/conn.php';
   
?>
<?php 
if(($_SESSION['login_user']=="")) 
    { header('location:index.php');}
    //fetch data from gallry
   

    //delete data 
    if (isset($_GET['id'])) {
   $id=$_GET['id'];
   
  $sql = "DELETE from news WHERE id = $id";
  if((mysqli_query($db, $sql)) )
  {
      $msg =  "Data Deleted successfully";
      header("location: news.php");
  } 
  else {
echo "Operation Failed"; 
}
  }

                      



?>

