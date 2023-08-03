<?php
session_start();
ob_start();
/*-----------------------------------------------------------------------------------------------------------------------*/	
include"config.php"; 

// Category Management
$id = $_GET['id'];
$uid = $_GET['Updateid'];
//Added
if($uid==1)
{
	$_SESSION['error_msg']  = '<p class="alert alert-success" role="alert">
	Record Has Been Saved Successfully.
	</p>';
	header ('location: DonationView.php');
}	
//Updated
if($id==1)
{
	$_SESSION['error_msg']  = '<p class="alert alert-success" role="alert">
	Record Has Been Saved Successfully.
	</p>';
	header ('location: DonationView.php');
}	

	//Delete Entry
	if($_GET['idDel']!="")
	{
		$id		=	$_GET['idDel'];
		$query	="DELETE From donate where id = $id";
		$rs = mysqli_query($conn,$query);

		
		
		$_SESSION['error_msg']  = '<p class="alert alert-danger" role="alert">
		Record Has Been Deleted Succesfully.
		</p>';
		header ('location: DonationView.php');
    }

	
?>