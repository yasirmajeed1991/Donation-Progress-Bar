<?php
session_start();
    if(!isset($_SESSION['id']))
   {
    header("location:adminlogin.php");
   }
   else
   {
include 'config.php';
include 'header.php'; 

    
    $query			=	"select * from funds ";
						$rs		    	=	mysqli_query($conn,$query) or die(mysqli_error());
						$row		    =	mysqli_fetch_array($rs);
						$fund = $row['fund'];
                      
                        
						if($_SERVER["REQUEST_METHOD"] == "POST"){
                            $fund=$_POST['fund'];
                           

							
						 $query = "Update funds SET fund='$fund'
                           ";
						$rs	   =  mysqli_query($conn,$query) or die(mysqli_error());
						$message_Err = "<div class='alert-success'> Required Funds has been updated</div>";
						
						}
   


?>
<div class="content mt-3">
    <?php if($message_Err!=''){?>
    <div align="center"><?php echo $message_Err?></div>

    <?php }?>
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Update Fund Required</strong>
                    </div>
                    <div class="card-body">
                        &nbsp;


                        <form action="" method="POST">
                            <table class="table table-bordered">



                                <tr>
                                    <td>Fund:</td>
                                    <td>

                                        <input type="text" class="form-control" name="fund" reuquired
                                            value="<?php echo $row['fund']?>">

                                    </td>
                                </tr>







                                <tr>
                                    <td>
                                    <td><input type="submit" class="btn btn-success" value="Update Fund Required" />
                                    </td>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php }


include 'footer.php';
?>