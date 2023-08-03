<?php
session_start();
include "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email=$_POST['email'];
    $amount=$_POST['amount'];
    
    $fullname=$_POST['fullname'];
    $address=$_POST['address'];
    $country=$_POST['country'];
    $postalcode=$_POST['postalcode'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    
    $mobile=$_POST['mobile'];
    

     $query = "INSERT INTO donate (email,amount,fullname,address,country,city,state,mobile,postalcode)
                Values ('$email','$amount','$fullname','$address','$country','$city','$state','$mobile','$postalcode') 
                ";
                
                if (mysqli_query($conn, $query)) {
                    $last_id = mysqli_insert_id($conn);
                      header("location:DonationView.php");
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                               






}




    ?>