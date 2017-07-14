<?php
require 'env.php';
$connection = mysqli_connect(host,user,pass,dbname);
if(mysqli_connect_error()){
    die('Not Good'. mysqli_connect_errno());
}