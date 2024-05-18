<?php
 $whereTo=$_POST['whereTo'];
 $howMany=$_POST['howMany'];
 $arrival=$_POST['arrival'];
 $leaving=$_POST['leaving'];
 
 $arrival = date('Y-m-d', strtotime($arrival));
$leaving = date('Y-m-d', strtotime($leaving));

if (strtotime($leaving) > strtotime($arrival)) {
    echo "Booking is okay";
} else {
    echo "Invalid booking. Please select a valid leaving date.";
}

?>