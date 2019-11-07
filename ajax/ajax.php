<?php
require '../dbconfig/config.php';

if(isset($_POST['faculty'])){

	$faculty = $_POST['faculty'];

	$query = "SELECT * FROM courses WHERE faculty = $faculty";
	$quaryBack=mysqli_query($con,$query);

	while($smt=mysqli_fetch_array($quaryBack)){
       if($smt['faculty']!=$_POST['faculty']){
      echo '<p>'.$smt['name'].'</p>';
          }
        }
}


















?>