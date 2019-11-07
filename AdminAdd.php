<?php

	require 'dbconfig/config.php';
	session_start();
	if(!isset($_SESSION['active'])) 
  header("Location: index.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New Employee</title>
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
      <li><a href="homepage.php">Home</a></li>
      <li><a href="EmpDashboard.php">Course Dashboard</a></li>
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
		<form class="main_form" action="AdminAdd.php" method="post" enctype="multipart/form-data">
		<center>
			<img id="uploadPreview"src="img/IUSlogo2.png"/> <br>
		</center>
			<table>
			<tr>
			<div class="subsection">
				<th><label class="label">Course name:</label></th>
				<th><input class="input" name="name" type="text" data-rq/><th>
				<label class="label">Course ID:</label>
				<th><input class="input" name="id" type="text" data-rq/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<select name="faculty">
	                <option value="FENS">FENS</option>
	                <option value="FAS">FAS</option>
	                <option value="FBA">FBA</option>
	                <option value="FL">FL</option>
	                <option value="FE">FE</option>
            	</select>
			</div>
			</tr>
			<tr>
			<div class="subsection">
			<th><label class="label"> Faculty elective</label></th>
				<th><input name="facultyElective" type="radio" class="input" value="1"/><label class="label">true</label></th>
				<th><input name="facultyElective" type="radio" class="input" value="0" checked/><label class="label">false</label></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label"> Program elective</label></th>
				<th><input name="programElective" type="radio" class="input" value="1"/><label class="label">true</label></th>
				<th><input name="programElective" type="radio" class="input" value="0" checked/><label class="label">false</label></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label"> Free elective</label></th>
				<th><input name="freeElective" type="radio" class="input" value="1" /><label class="label">true</label></th>
				<th><input name="freeElective" type="radio" class="input" value="0" checked/><label class="label">false</label></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Professor:</label></th>
				<th><input class="input" name="proffesor" type="text" data-rq/></th>
				<th><label class="label">Available:</label></th>
				<th><input name="available" type="radio" class="input" value="1"  data-rq checked/><label class="label">true</label></th>
				<th><input name="available" type="radio" class="input" value="0"  data-rq/><label class="label">false</label></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Prereq1:</label></th>
				<th><input class="input" name="Prereq1" type="text" data-rq/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
			<th><label class="label">Prereq2:</label></th>
			<th><input class="input" name="Prereq2" type="text" data-rq/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Prereq3:</label></th>
				<th><input class="input" name="Prereq3" type="text" data-rq/></th>
				<th><label class="label">Num of students:</label></th>
				<th><input class="input" name="numStudents" type="text" data-rq/> </th>
			</div>
			</tr>
			
  		</table>
  			<div class="buttons-container">
	  			<th><button class="option option__submit" type="submit" name="submit_emp">Add</button></th>
  			</div>
	</form>
</div>
		
	<?php
	if(isset($_POST['submit_emp'])){
		$a=$_POST['name'];
		$b=$_POST['id']; 
		$c=$_POST['faculty'];
		$d=$_POST['facultyElective'];
		$e=$_POST['programElective'];
		$f=$_POST['freeElective'];
		$g=$_POST['proffesor'];
		$h=$_POST['available'];
		$j=$_POST['Prereq1'];
		$k=$_POST['Prereq2'];
		$l=$_POST['Prereq3']; 
		$m=$_POST['numStudents'];

		$query= "insert into courses(name,id,faculty,facultyElective,programElective,freeElective,proffesor,available,Prereq1,Prereq2,Prereq3,numStudents) values('$a','$b','$c','$d','$e','$f','$g','$h','$j','$k','$l','$m')";
				$query_run = mysqli_query($con,$query);	
		}
	?>
	
</main>

</body>
</html>