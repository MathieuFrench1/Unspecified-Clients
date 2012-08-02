<?php $title = "Client View"; include('_header.php'); ?>

<?php

if (isset($_GET['id'])){
	include ('includes/inc_individualclientinfo.php');
} else {
	include ('includes/inc_fullclientlist.php');
}

?>

<?php include('_footer.php'); ?>