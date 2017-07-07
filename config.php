<?php
$DBSERVER = "localhost";
$DBUSER = "root";
$DBPASS = "root";
$DBNAME = "employee";

$conn = mysqli_connect($$DBSERVER, $DBUSER, $DBPASS, $DBNAME);
if (!$conn){
	die("ERROR IN CONNECTION".mysql_error());
} else {
	echo '<p style="display:none;">CONNECTION SUCCESSFUL !</p>';
}