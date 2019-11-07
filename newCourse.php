<?php

	require 'dbconfig/config.php';
	session_start();
	if(!isset($_SESSION['active'])) 
  header("Location: index.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Passed courses</title>
	<link rel="stylesheet" href="css/newEmployeestyle.css" type="text/css">
	
</head>
<body>
<!-- Side navigation bar-->
<aside>
  <header>
    <div><img class="header-logo" src="img/IUSlogo2.png"/>
      <p class="section-title">WELCOME 
			<?php echo $_SESSION['username'] ?> 
    <a href="homepage.php">
    <div class="notification-box">
    <span class="notification-count"></span>
    <div class="notification-bell">
      <span class="bell-top"></span>
      <span class="bell-middle"></span>
      <span class="bell-bottom"></span>
      <span class="bell-rad"></span>
      </div>
  </div>
    </a>
    </p>  
    </div>
  </header>
  <nav class="side-navigation">
    <ul>
      <li><a href="homepage.php">Dashboard</a></li>
      <li><a href="EmpDashboard.php">Courses</a></li>
      <li><a><form action="homepage.php" method="post" enctype="multipart/form-data"><button class="btnnn" name="logout">Log out</button></form></a></li>
      <?php
    if(isset($_POST['logout'])){
    session_destroy();
    unset($_SESSION['active']); 
    header('location: index.php');
  }
  ?>
    </ul>
  </nav>
</aside>
<main>
		
<div class="container">
	<div class="all-data"> 
		<div class="section">
		<form class="main_form" action="newCourse.php" method="post" enctype="multipart/form-data">
		<center>
			<img id="uploadPreview"src="img/IUSlogo2.png"/> <br>
		</center>
		<table>
      <?php 
      
      $query= "SELECT * from courses";
      $test=mysqli_query($con,$query);
      while($smt=mysqli_fetch_array($test)){
        if($smt['available']!='0'){
      echo '<tr>
	      			<td>'.$smt['name'].'</td><td><label class="label">Passed:</label></td><td><input name="'.$smt['name'].'" type="radio" class="input" value="'.$smt['id'].'"/></td>
	      			<td><label class="label">Failed</label></td><td><input name="'.$smt['name'].'" type="radio" class="input" value="0" checked/></td>
	      			<td><label class="label">E:</label></td> <td><input name="'.$smt['name'].'E'.'" type="radio" class="input" value="1"/></td>
	      	<tr>';
          }
         
        }
    ?>
				
  		</table>
  			<div class="buttons-container">
	  			<th><button class="option option__submit" type="submit" name="submitCourses">Add</button></th>
	  			<th><button class="option option__back"><a href="EmpDashboard.php">Back</button></a></th>
  			</div>
	</form>
</div>
	
</main>

</body>
</html>


<?php
	if(isset($_POST['submitCourses'])){

		 $query= "SELECT * from courses";
	     $test1=mysqli_query($con,$query);
	      while($smt1=mysqli_fetch_array($test1)){

			$selected = $_POST[$smt1['name']];
			$student = $_SESSION['username'];
			$option =  $_POST[$smt1['name'].'E']; 

			if($selected =! 0){
				if($option == 1){
					$option = "E";
				}

				$selected = $smt1['id'];

				$query1= "insert into studentcourses(student_id, course_id, optionn) values('$student','$selected','$option')";
				$query_run = mysqli_query($con,$query1);
				}
			}

			
		}
	?>