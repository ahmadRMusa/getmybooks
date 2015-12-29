
<?php
	$database="getmybooks";
	$conn=mysql_connect("localhost","root","");
	if(!$conn)
	{
	die('could not connect:'.mysql_error());
	}
	mysql_select_db("$database",$conn);
?>
