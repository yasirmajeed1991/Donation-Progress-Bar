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
                        <strong class="card-title">Create New Donation</strong>
                    </div>
                    <div class="card-body">
                        &nbsp;


                        <form action="DonationGenerate.php" method="POST">
                            <table class="table table-bordered">
                                <tr>
                                    <td>Email:</td>
                                    <td>

                                        <input type="email" class="form-control" name="email" reuquired value="">

                                    </td>
                                </tr>

                                <tr>
                                    <td>Amount:</td>
                                    <td>

                                        <input type="number" class="form-control" name="amount" reuquired value="">

                                    </td>
                                </tr>

                                <tr>
                                    <td>Full Name:</td>
                                    <td>

                                        <input type="text" class="form-control" name="fullname" reuquired value="">

                                    </td>
                                </tr>


                                <tr>
                                    <td>Address:</td>
                                    <td>

                                        <input type="text" class="form-control" name="address" reuquired value="">

                                    </td>
                                </tr>



                                <tr>
                                    <td>Country:</td>
                                    <td>

                                        <select class="form-control" name="country" aria-label="Country">

                                        <?php 
                                        
                                        $query	=	"SELECT * From countries ";
                                        $rs		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        while($row		=	mysqli_fetch_array($rs))
                                        {

                                        ?>

                                            <option value="<?php echo $row['name']?>"><?php echo $row['name']?>
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

                                        <input type="text" class="form-control" name="postalcode" value="">

                                    </td>
                                </tr>

                                <tr>
                                    <td>City:</td>
                                    <td>

                                        <input type="text" class="form-control" name="city" value="">

                                    </td>
                                </tr>


                                <tr>
                                    <td>State:</td>
                                    <td>

                                        <input type="text" class="form-control" name="state" value="">

                                    </td>
                                </tr>


                                <tr>
                                    <td>Mobile:</td>
                                    <td>

                                        <input type="text" class="form-control" name="mobile" reuquired value="">

                                    </td>
                                </tr>







                                <tr>
                                    <td>
                                    <td><input type="submit" class="btn btn-success" value="Add Donation" />
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