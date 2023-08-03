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

    $id = $_GET['id'];
    $query			=	"select * from donate where id = $id  ";
						$rs		    	=	mysqli_query($conn,$query) or die(mysqli_error());
						$row		    =	mysqli_fetch_array($rs);
						$country = $row['country'];
                      
                        
						if($_SERVER["REQUEST_METHOD"] == "POST"){
                            $email=$_POST['email'];
                            $amount=$_POST['amount'];
                            
                            $fullname=$_POST['fullname'];
                            $address=$_POST['address'];
                            $country=$_POST['country'];
                            $postalcode=$_POST['postalcode'];
                            $city=$_POST['city'];
                            $state=$_POST['state'];
                            
                            $mobile=$_POST['mobile'];

							
				echo		 $query = "Update donate SET email='$email',amount='$amount',fullname='$fullname',address='$address',country='$country',postalcode='$postalcode',city='$city',state='$state',
                         mobile='$mobile'
                           where id=$id";
						$rs	   =  mysqli_query($conn,$query) or die(mysqli_error());
						header("location:functions.php?Updateid=1");
						
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
                        <strong class="card-title">Update Donation</strong>
                    </div>
                    <div class="card-body">
                        &nbsp;


                        <form action="" method="POST">
                            <table class="table table-bordered">
                                <tr>
                                    <td>Email:</td>
                                    <td>

                                        <input type="email" class="form-control" name="email" reuquired
                                            value="<?php echo $row['email']?>">

                                    </td>
                                </tr>

                                <tr>
                                    <td>Amount:</td>
                                    <td>

                                        <input type="number" class="form-control" name="amount" reuquired
                                            value="<?php echo $row['amount']?>">
                                    </td>
                                </tr>

                                <tr>
                                    <td>Full Name:</td>
                                    <td>

                                        <input type="text" class="form-control" name="fullname" reuquired
                                            value="<?php echo $row['fullname']?>">

                                    </td>
                                </tr>


                                <tr>
                                    <td>Address:</td>
                                    <td>

                                        <input type="text" class="form-control" name="address" reuquired
                                            value="<?php echo $row['address']?>">
                                    </td>
                                </tr>



                                <tr>
                                    <td>Country:</td>
                                    <td>

                                        <select class="form-control" name="country" aria-label="Country">

                                            <?php 

$query	=	"SELECT * From countries ";
$rs11		=	mysqli_query($conn,$query) or die(mysqli_error());
while($row111		=	mysqli_fetch_array($rs11))
{
    if($country==$row111['name'])
    {
        $selected = 'selected';
    }
    else{
        $selected = '';
    }

?>

                                            <option <?php echo $selected ?> value="<?php echo $row111['name']?>"><?php echo $row111['name']?>
                                            </option>



                                            <?php
}
    ?>
                                            ?>
                                        </select>
                                    </td>
                                </tr>


                                <tr>
                                    <td>Postal Code:</td>
                                    <td>

                                        <input type="text" class="form-control" name="postalcode"
                                            value="<?php echo $row['postalcode']?>">

                                    </td>
                                </tr>

                                <tr>
                                    <td>City:</td>
                                    <td>

                                        <input type="text" class="form-control" name="city"
                                            value="<?php echo $row['city']?>">

                                    </td>
                                </tr>


                                <tr>
                                    <td>State:</td>
                                    <td>

                                        <input type="text" class="form-control" name="state"
                                            value="<?php echo $row['state']?>">

                                    </td>
                                </tr>


                                <tr>
                                    <td>Mobile:</td>
                                    <td>

                                        <input type="text" class="form-control" name="mobile" reuquired
                                            value="<?php echo $row['mobile']?>">

                                    </td>
                                </tr>







                                <tr>
                                    <td>
                                    <td><input type="submit" class="btn btn-success" value="Update Donation" />
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