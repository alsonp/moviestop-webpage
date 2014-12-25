<?php
$con= $con =mysql_connect("localhost","root", "");
if(!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("moviestop_db", $con);
$result = mysql_query("SELECT * FROM theatre");
while ($row = mysql_fetch_assoc($result)) {
    $output[] = $row;
}
print(json_encode($output));
mysql_close($con);
?>
    