<?php
session_start();

if(isset($_SESSION['pageviews'])) { 
    $_SESSION['pageviews']++; 
} else {
    $_SESSION['pageviews'] = 1; 
}

echo "This page has been accessed ".$_SESSION['pageviews']." times.";

exit();

?>