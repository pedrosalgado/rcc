<?php
$con = mysql_connect("127.0.0.1","root","gema");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("rcc", $con);
?>