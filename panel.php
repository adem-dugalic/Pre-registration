<?php
  require 'dbconfig/config.php';
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
  	<link rel="stylesheet" type="text/css" href="css/newEmployeestyle.css">		
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
        <div><img class="header-logo" src="img/IUSlogo2.png"/>
          <p class="section-title">WELCOME 
          <?php echo $_SESSION['username'] ?> 
        <a href="homepage.php">
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
          <li><a href="homepage.php">Dashboard</a></li>
          <li><a href="EmpDashboard.php">Employee Database</a></li>
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
          <li><a href="">Osnovni podaci</a></li>
          <li><a href="Employee_set/panel2.php?send=<?php echo $id?>">Podaci o skolovanju</a></li>
          <li><a href="Employee_set/panel3.php?send=<?php echo $id?>">Podaci o poziciji</a></li>
          <li><a href="Employee_set/panel4.php?send=<?php echo $id?>">Podaci o placanju</a></li>
        </ul>
    <!-- Table in the main area-->
      <div class="container">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="all-data"> 
        <div class="section">
          <table class="c">
            <tr>
              <div class="subsection">
                  <th><u><p class="section-name">Osnovni podaci:</p></th>
                    </div>
                    </tr>
                  <tr>
                  <div class="subsection">
                    <th><label class="label">Ime i prezime:</label></th>
                    <th><p><?php echo $smt1['ImeIPrezime'];?></p><th>
                    <label class="label">Broj:</label>
                    <th><p><?php echo $smt1['broj'];?></p><th>
                  </div>
                  </tr>
                  <tr>
                  <div class="subsection">
                    <th><label class="label">IUS broj:</label></th>
                    <th><p><?php echo  $smt1['IUSbroj'];?></p></th>
                  </div>
                  </tr>
                  <tr>
                  <div class="subsection">
                  <th><label class="label">Pol:</label></th>
                  <th><p><?php echo  $smt1['pol'];?></p></th>
                  </div>
                  </tr>
                  <tr>
                  <div class="subsection">
                    <th><label class="label">Ime oca:</label></th>
                    <th><p><?php echo  $smt1['imeOca'];?></p></th>
                    <th><label class="label">Ime majke:</label></th>
                    <th><p><?php echo  $smt1['imeMajke'];?></p></th>
                  </div>
                  </tr>
                  <tr>
                  <div class="subsection">
                    <th><label class="label">Datum Rođenja:</label></th>
                    <th><p><?php echo  $smt1['datumRodenja'];?></p></th>
                    <th><label class="label">Mjesto rođenja:</label></th>
                    <th><p><?php echo  $smt1['mjestoRodenja'];?></p></th>
                  </div>
                  </tr>
                  <tr>
                  <div class="subsection">
                    <th><label class="label">Starost:</label></th>
                    <th><p><?php echo  $smt1['starost'];?></p></th>
                    <th><label class="label">JMBG/JIB:</label></th>
                    <th><p><?php echo  $smt1['jmbg'];?></p></th>
                  </div>
                  </tr>
                  <tr>
                  <div class="subsection">
                    <th><label class="label">Državljanstvo:</label></th>
                    <th><p><?php echo  $smt1['drzavljanstvo'];?></p></th>
                  </div>
                  </tr>
                  <tr>
                  <div class="subsection">
                  <th><label class="label">Bračni status:</label></th>
                    <th><p><?php echo  $smt1['bracniStatus'];?></p></th>
                  </div>
                  </tr>
                  <tr>
                  <div class="subsection">
                    <th><label class="label">Broj lične karte:</label></th>
                    <th><p><?php echo  $smt1['brojLicneKarte'];?></p></th>
                    <th><label class="label">Turski matični broj:</label></th>
                    <th><p><?php echo $smt1['turskiBroj'];?></p></th>
                  </div>
                  </tr>
                  <tr>
                  <div class="subsection">
                    <th><label class="label">Pasoš broj:</label></th>
                    <th><p><?php echo $smt1['pasosBroj'];?></p></th>
                    <th><label class="label">Datum isteka pasoša:</label></th>
                    <th><p><?php echo $smt1['datumIstekaPasosa'];?></p></th>
                  </div>
                  </tr>
                  <tr>
                  <div class="subsection">
                    <th><label class="label">Adresa:</label></th>
                    <th><p><?php echo $smt1['adresa'];?></p></th>
                    <th><label class="label">Opština:</label></th>
                    <th><p><?php echo $smt1['opstina'];?></p></th>
                  </div>
                  </tr>
                  <tr>
                  <div class="subsection">
                    <th><label class="label">Grad:</label></th>
                    <th><p><?php echo $smt1['grad'];?></p></th>
                    <th><label class="label">Poštanski broj:</label></th>
                    <th><p><?php echo $smt1['postanskiBroj'];?></p></th>
                  </div>
                  </tr>
                  <tr>
                  <div class="subsection">  
                    <th><label class="label">Država:</label></th>
                    <th><p><?php echo $smt1['drzava'];?></p></th>
                    <th><label class="label">Broj Mobitela 1:</label></th>
                    <th><p><?php echo $smt1['brojMobitela1'];?></p></th>
                  </div>
                  </tr>
                  <tr>
                  <div class="subsection">  
                    <th><label class="label">Broj Mobitela 2:</label></th>
                    <th><p><?php echo $smt1['brojMobitela2'];?></p></th>
                    <th><label class="label">Broj magnetne kartice:</label></th>
                    <th><p><?php echo $smt1['brojMagnetneKartice'];?></p></th>
                  </div>
                  </tr>
                  <tr>
                  <div class="subsection">  
                    <th><label class="label">Email-ius:</label></th>
                    <th><p><?php echo $smt1['emailIUS'];?></p></th>
                    <th><label class="label">Privatni email:</label></th>
                    <th><p><?php echo $smt1['privatniEmail'];?></p></th>
                 </div>
               </tr>
             </div>
          </table>
          <div class="buttons-container">
             <a href="delete.php?to_delete=<?php echo $smt1[0];?>"><button name="to_delete" class="option option__submit" id="to_delete">Delete</button>
            <a href="edit.php?to_edit=<?php echo $smt1[0];?>"><button name="to_edit" class="option option__submit" id="to_edit">Edit</button>
            <a href="exportOneToExcel.php?to_export=<?php echo $smt1[0];?>"><button name="to_export" class="option option__submit" id="to_export">Export to Excel</button>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>