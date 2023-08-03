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
$sum =0;


$query	=	"select * from donate   ";
			$rs		 =	mysqli_query($conn,$query) or die(mysqli_error());
		$html = "";
		while($row		=	mysqli_fetch_array($rs))
		{
            $sum=$sum+1;
					$html	.=	'<tr style="font-size:12px">
                    <td >'.$sum.'</td>
                                 <td >'.$row['email'].'</td>
                                 <td >'.$row['amount'].'</td>
                                 <td >'.$row['fullname'].'</td>
                                 <td >'.$row['address'].'</td>
                                 <td >'.$row['country'].'</td>
                                 <td >'.$row['postalcode'].'</td>
                                 <td >'.$row['city'].'</td>
                                 <td >'.$row['state'].'</td>
                                 <td >'.$row['mobile'].'</td>
                                 <td>  <a  href="functions.php?idDel='.$row['id'].'"><i class="fa fa-minus-square icon-white"></i></a> <a  href="DonationUpdate.php?id='.$row['id'].'"><i class="fa fa-edit icon-white"></i></a> </td>
								</tr>  ';
		}


?>

<?php if($_SESSION['error_msg']!=''){echo $_SESSION['error_msg']; $_SESSION['error_msg']='';}?>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Donation List</strong>
                    </div>
                    <div class="card-body">

                        <table id="bootstrap-data-table-export"
                            class="table table-sm table-bordered bootstrap-datatable datatable responsive">
                            <thead>
                                <tr>

                                    <th>Sr</th>
                                    <th>Email</th>
                                    <th>Amount</th>
                                    <th>Full Name</th>
                                    <th>Address</th>
                                    <th>Country</th>
                                    <th>Postal Code</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Mobile</th>

                                    <th>Action</th>



                                </tr>
                            </thead>

                            <?php echo $html;?>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php  }

include 'footer.php';
?>