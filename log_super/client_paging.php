<?php require_once '../Connection/conn.php';
   $error="";
?>
 <?php
$limit = 5;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM client ORDER BY id DESC LIMIT $start_from, $limit";  
$rs_result = mysqli_query($db, $sql);?>
<table class="table table-striped table-advance table-hover">
                           <tbody>
                               <tr>
                                 <th><i class=""></i>S.No.</th>
                                 <th><i class="icon_image"></i> Thumbnails</th>
                                 <th>Links</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                              
                              <div id="target-content" class="d-flex justify-content-center">
                                    <div class="spinner-border" role="status">
                                        
                                    <span class="sr-only">Loading...</span>
                                    </div>
                             </div>
                             <?php if (mysqli_num_rows($rs_result) > 0) {
                                 $num="1";
                             
                                // output data of each row

    
     while($row = mysqli_fetch_array($rs_result)) {?>
                              <tr>
                                  
                                 <td><?php echo $num ?> </td>
                                 <td><img src="upload/<?php echo $row["file"]; ?>" alt="..." class="img-thumbnail" width="100" height="100"></td>
                                 <td><a href="<?php echo $row["link"]; ?>"><?php echo $row["link"]; ?></a></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-danger" href="delete_client.php?id=<?php echo $row['id']; ?>"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
        
        
                                <?php $num++;}
                                    } 
                                    else {
                              echo "<p>No Data Found..... </p>";
                              }?>

                              
                                                           
                           </tbody>
                        </table>
