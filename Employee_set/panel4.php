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
        $query1= "SELECT * from employee where id='$id'";
        $test1=mysqli_query($con,$query1);
        $smt1=mysqli_fetch_array($test1);
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
      <li><a href="../panel.php?send=<?php echo $id?>"" name="op">Osnovni podaci</a></li>
      <li><a href="panel2.php?send=<?php echo $id?>" name="ps">Podaci o skolovanju</a></li>
      <li><a href="panel3.php?send=<?php echo $id?>" name="pp">Podaci o poziciji</a></li>
      <li><a href="" name="pop">Podaci o placanju</a></li>
    </ul>
<!-- Table in the main area-->
    <div class="container">
<div class="all-data"> 
      <div class="section">
      <table class="c">
    <div class="section">
      <tr>
        <div class="subsection">
          <th><u><p class="section-name">Podaci o placanju:</p></th>
        </div>
        </tr>
      <tr>
      <div class="subsection">    
        <th><label class="label">Naziv banke:</label></th>
        <th><p><?php echo $smt1['nazivBnake'];?></p></th>
        <th><label class="label">Ulica banke:</label></th>
        <th><p><?php echo $smt1['ulicaBanke'];?></p></th>
      </div>
      </tr>
      <tr>
      <div class="subsection">    
        <th><label class="label">Grad Banke:</label></th>
        <th><p><?php echo $smt1['grad2'];?></p></th>
        <th><label class="label">Broj bankovnog računa od januara 2017:</label></th>
        <th><p><?php echo $smt1['brojBnakovnogRacuna'];?></p></th>
      </div>
      </tr>

      <tr>
        <div class="subsection">
          <th><label class="label odjeel" data-odj="<?php echo $part; ?>">Odjel na IUS:</label></th>
          <th><p><?php echo $smt1['part'];?></p></th>
      </tr>
      </table>
      <div class="buttons-container">
          <a href="../delete.php?to_delete=<?php echo $smt1[0];?>"><button name="to_delete" class="option option__submit" id="to_delete">Delete</button>
          <a href="../edit.php?to_edit=<?php echo $smt1[0];?>"><button name="to_edit" class="option option__submit" id="to_edit">Edit</button>
          <a href="../exportOneToExcel.php?to_export=<?php echo $smt1[0];?>"><button name="to_export" class="option option__submit" id="to_export">Export to Excel</button>
        </div>
    </div>
  </div>

</main>



</body>
</html>