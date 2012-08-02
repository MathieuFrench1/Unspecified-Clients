<?php $title = "Project View"; include('_header.php'); ?>

<?php

if (isset($_GET['id'])){
	include ('includes/inc_individualprojectinfo.php');
} else {
	include ('includes/inc_fullprojectlist.php');
}

?>

<?php include('_footer.php'); ?>