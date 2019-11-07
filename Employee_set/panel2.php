<?php
  require '../dbconfig/config.php';
  session_start();
  if(!isset($_SESSION['active'])) 
  header("Location: index.php");
  $counter=$_SESSION['cont'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee Database</title>
<!-- Latest compiled and minified JavaScript -->
	<link rel="stylesheet" type="text/css" href="../css/newEmployeestyle.css">		
</head>
<body>
<?php 
      if(isset($_GET['send'])){
        $id=$_GET['send'];
        $query2= "SELECT * from employee where id='$id'";
        $test2=mysqli_query($con,$query2);
        $smt2=mysqli_fetch_array($test2);
    }
?>
<!-- Side navigation bar-->
<aside>
  <header>
    <div><img class="header-logo" src="../img/IUSlogo2.png"/>
      <p class="section-title">WELCOME 
      <?php echo $_SESSION['username'] ?> 
    <a href="../homepage.php">
    <div class="notification-box">
    <span class="notification-count"><?php echo $counter ?></span>
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
      <li><a href="../homepage.php">Dashboard</a></li>
      <li><a href="../EmpDashboard.php">Employee Database</a></li>
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
  <header class="main-head">
    <div class="search">
      <label type="text" name="search" placeholder="Type here to search..." autocomplete="off"/>
    </div>
  </header>

  <!-- main content-->
  <div class="wrapper">
    <ul class="category-navigation">
      <li><a href="../panel.php?send=<?php echo $id?>">Osnovni podaci</a></li>
      <li><a href="">Podaci o skolovanju</a></li>
      <li><a href="panel3.php?send=<?php echo $id?>">Podaci o poziciji</a></li>
      <li><a href="panel4.php?send=<?php echo $id?>">Podaci o placanju</a></li>
    </ul>
<!-- Table in the main area-->
  <div class="container">
   <div class="all-data"> 
      <div class="section">
        <table class="c">
          <div class="subsection">
            <th><u><p class="section-name">Podaci o skolovanju:</p></th>
          </div>
          </tr>
        <tr>
        <div class="subsection">
          <th><label class="label">Školska sprema:</label></th>
          <th><p><?php echo $smt2['skolskaSprema']; ?></p></th>
          <th><label class="label">Skraceni naziv stručne spreme:</label></th>
          <th><p><?php echo $smt2['skracenaSprema']; ?></p></th>
        </div>
        </tr>
        <tr>
        <div class="subsection">
          <th><label class="label">Problematično zvanje:</label></th>
          <th><p><?php echo $smt2['problemZvanje'];?></p></th>
          <th><label class="label">Stručni ispit:</label></th>
          <th><p><?php echo $smt2['strucniIspit'];?></p></th>
        </div>
        </tr>
        <tr>
        <div class="subsection">
          <th><label class="label">Dodatno obrazovanje:</label></th>
          <th><p><?php echo $smt2['dodatnoObrazovanje'];?></p></th>
          <th><label class="label">Certifikati i slično:</label></th>
          <th><p><?php echo $smt2['certifikati'];?></p></th>
          </div>
          </tr>
          </div>
        </table>
        <div class="buttons-container">
           <a href="../delete.php?to_delete=<?php echo $smt2[0];?>"><button name="to_delete" class="option option__submit" id="to_delete">Delete</button>
          <a href="../edit.php?to_edit=<?php echo $smt2[0];?>"><button name="to_edit" class="option option__submit" id="to_edit">Edit</button>
            <a href="../exportOneToExcel.php?to_export=<?php echo $smt1[0];?>"><button name="to_export" class="option option__submit" id="to_export">Export to Excel</button>
        </div>
    </div>
  </div>
</main>



</body>
</html>