<?php

	require 'dbconfig/config.php';

?>

	<?php
	if(isset($_GET['to_delete'])){
		$key=$_GET['to_delete'];
		$check=mysqli_query($con,"SELECT * from employee where id= '$key' ") or die("not found".mysql_error());
		$testic=mysqli_fetch_array($check);
		if(mysqli_num_rows($check)>0){
			$res = mysqli_query($con, "UPDATE employee SET deleted='1' WHERE id='$key'") or die("not found".mysql_error());
			//if($testic[79]!="uploads/IUSlogo.png"){
			//$file=$testic[79];
			//unlink($file);
			//}
		}else{

			echo '<script type="text/javascript"> alert("Error nothing in table") </script> ';
		}
		header('location: EmpDashboard.php');
	}

	?>