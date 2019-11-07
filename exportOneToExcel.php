<?php
require 'dbconfig/config.php';

$DB_TBLName = "employee"; 
$filename = "One Person";
$file_ending = "xls";

header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");

$sep = "\t";

$sql="SELECT * FROM $DB_TBLName"; 
$resultt = $con->query($sql);
while ($property = mysqli_fetch_field($resultt)) { //fetch table field name
    echo $property->name."\t";
}


$schema_insert = "";
    if(isset($_REQUEST['to_export'])){
	$key=$_REQUEST['to_export'];
	$check=mysqli_query($con,"SELECT * from employee where id= '$key' ") or die("not found".mysql_error());
	$testic=mysqli_fetch_array($check);
    	



print("\n");    
$i = 0;
while ($i < 80) { //fetch table field name
    echo $testic[$i]."\t";
 $i++;
}

}
?>