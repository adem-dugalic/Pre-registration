<?php
session_start();
if(!isset($_SESSION['active'])) 
  header("Location: index.php");
require 'dbconfig/config.php';
$counter=0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="css/newhomepagestyle.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/notifications.css">

</head>

<body>

<main>
<div class="wrapper">
    <ul class="category-navigation">
      <li class="active"><a href="homepage.php">Home</a></li>      
    </ul>
    <div class="container">

    </div>
  </div>
</main>



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
    </ul>
  </nav>
</aside>

<div class="container">
      <div class="row c" id="courseList">
      <?php 
      $query= "SELECT * from studentcourses where student_id = $user";
      $test=mysqli_query($con,$query);
      while($smt=mysqli_fetch_array($test)){
      echo '
              <table>
                <tr>
                  <td>'.$smt['course_id'].'<td>
                </tr>
              </table>
          ';
        }
    ?>
      </div>
   </div>

<?php
    if(isset($_POST['logout'])){
    session_destroy();
    unset($_SESSION['active']); 
    header('location: index.php');
  }
  ?>
</body>
</html>