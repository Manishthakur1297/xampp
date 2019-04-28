<?php

@require 'core.inc.php';
@require 'connect.inc.php';

if(loggedin())
{
	$firstname = getuserfield('username');
	//$surname = getuserfield('surname');
	echo 'You are Logged in  '.$firstname.' <br><br><a href="logout.php">Click here to Log Out</a>';
}
else
{
include 'loginform.inc.php';
}

?>