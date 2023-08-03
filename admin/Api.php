<?php session_start();
   include 'config.php';
   include 'header.php'; 


?>
<style>
  .holds-the-iframe {
  background:url(img/Walk.gif) center center no-repeat;
}
</style>
<div class="content mt-3">

    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Total Donation Received</strong>
                    </div>
                    <div class="card-body">
                    <iframe src="testmeter.php" width="100%" height="760px" style="border:none;">
</iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php 


include 'footer.php';
?>