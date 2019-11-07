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
  <link rel="stylesheet" type="text/css" href="../css/panel3c.css">
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
      <li><a href="../panel.php?send=<?php echo $id?>" name="op">Osnovni podaci</a></li>
      <li><a href="panel2.php?send=<?php echo $id?>" name="ps">Podaci o skolovanju</a></li>
      <li><a href="" name="pp">Podaci o poziciji</a></li>
      <li><a href="panel4.php?send=<?php echo $id?>" name="pop">Podaci o placanju</a></li>
    </ul>
<!-- Table in the main area-->
    <div class="container">
<div class="all-data"> 
    <div class="section">
      <table>
      <tr>
        <div class="subsection">
          <th><u><p class="section-name">Podaci o poziciji:</p></th>
        </div>
        </tr>
      <tr>
      <div class="subsection">
        <th><label class="label">Trenutni status na IUS-u:</label></th>
        <th><p><?php echo $smt1['status'];?></p></th>
        <th><label class="label">Dnevna satnica:</label></th>
        <th><p><?php echo $smt1['dnevnaSatnica'];?></p></th>
      </div>
      </tr>
      <tr>
      <div class="subsection">
        <th><label class="label">Ugovoreno sedmično vrijeme:</label></th>
        <th><p><?php echo $smt1['sedmicnoVrijeme'];?></p></th>
        <th><label class="label">Radna pozicija(bh):</label></th>
        <th><p><?php echo $smt1['pozicijaBH'];?></p></th>
      </div>
      </tr>
      <tr>
      <div class="subsection">
        <th><label class="label">Radna pozicija(eng):</label></th>
        <th><p><?php echo $smt1['pozicijaENG'];?></p></th>
        <th><label class="label">Dodatna zaduženja:</label></th>
        <th><?php echo $smt1['dodatnaZaduzenja'];?></p></th>
      </div>
      </tr>
      <tr>
      <div class="subsection">
        <th><label class="label">Odluka o imenovanju-broj:</label></th>
        <th><p><?php echo $smt1['odlukaOImenovanjuB'];?></p></th>
        <th><label class="label">Odluka o imenovanju od:</label></th>
        <th><p><?php echo $smt1['odlukaOImenovanjuO'];?></p></th>
      </div>
      </tr>
      <tr>
      <div class="subsection">
        <th><label class="label">Odluka o imenovanju do:</label></th>
        <th><p><?php echo $smt1['odlukaOImenovanjuD'];?></p></th>
        <th><label class="label">Fakultet(bh i eng):</label></th>
        <th><p><?php echo $smt1['fakultet'];?></p></th>
      </div>
      </tr>
      <tr>
      <div class="subsection">
        <th><label class="label">Odsjek:</label></th>
        <th><p><?php echo $smt1['odsjek'];?></p></th>
        <th><label class="label">Studijski program:</label></th>
        <th><p><?php echo $smt1['studijskiProgram'];?></p></th>
      </div>
      </tr>
      <tr>
      <div class="subsection">
        <th><label class="label">Ekvivalencija po oblasti:</label></th>
        <th><p><?php echo $smt1['ekvivalencija'];?></p></th>
        <th><label class="label">Pocetak rada na IUS-u:</label></th>
        <th><p><?php echo $smt1['pocetakRada'];?></p></th>
      </div>
      </tr>
      <tr>
      <div class="subsection">
        <th><label class="label">Ukupno vrijeme provedeno na IUS-u:</label></th>
        <th><p><?php echo $smt1['vrijemeNaIUS'];?></p></th>
        <th><label class="label">Datum isteka ugovora:</label></th>
        <th><p><?php echo $smt1['datumIstekaUg'];?></p></th>
      </div>
      </tr>
      <tr>
      <div class="subsection">
        <th><label class="label">Tip ugovora o radu:</label></th>
        <th><p><?php echo $smt1['ugovorORadu'];?></p>
      </div>
      </tr>
      <tr>
      <div class="subsection">
        <th><label class="label">Vrijeme trajanja probnog rada:</label></th>
        <th><label class="label" name="trajanjeProbnog"<p><?php echo $smt1['trajanjeProbnog'];?></p></th>   
        <th><label class="label">Broj zaključenog ugovora o radu sa pripravnikom:</label></th>
        <th><p><?php echo $smt1['brojZakljucenogUgovoraORaduSaPripravnikom'];?></p> </th>
      </div>
      </tr>
      <tr>
      <div class="subsection">
        <th><label class="label">Datum zaključenog ugovora o radu sa pripravnikom:</label></th>
        <th><p><?php echo $smt1['datumZakljucenogUgovoraORaduSaPripravnikom'];?></p></th>
      </div>
      </tr>
      <tr>
      <div class="subsection">
        <th><label class="label">Trajanje pripravničkog staža:</label></th>
        <th><p><?php echo $smt1['trajanjePripravnickogStaza'];?></p> </th>
      </div>
      </tr>
      <tr>
      <div class="subsection">
        <th><label class="label">Vrijeme i rezultat polaganja stručnog ispita, ako je isti predviđen i objavljen:</label></th>
        <th><p><?php echo $smt1['vrijemeIRezultatPolaganjaStrucnogIspitaAkoJeIstiPredvidenIObjavl'];?></p></th>
      </div>
      </tr>
      <tr>
      <div class="subsection">
        <th><label class="label">Trajanje rada u inostranstvu:</label></th>
        <th><p><?php echo $smt1['trajanjeRadaUInostranstvu'];?></p></th>
        <th><label class="label">Dozvola za boravak i rad ili potvrda o prijavi rada:</label></th>
        <th><p><?php echo $smt1['dozvolaZaBoravak'];?></p></th>
      </div>
      </tr>
      <tr>
      <div class="subsection">
        <th><label class="label">Trajanje radnog vremena:</label></th>
        <th><p><?php echo $smt1['trajanjeRadnogVremena'];?></p></th>
      </div>
      </tr>
      <tr>
      <div class="subsection">
        <th><label class="label">Broj prvog ugovora koji se vezuje za imenovanje:</label></th>
        <th><p><?php echo $smt1['brojUgovoraZaImenovanje'];?></p></th>
        <th><label class="label">Datum potpisivanja ugovora koji se vezuje za prvo imenovanje:</label></th>
        <th><p><?php echo $smt1['datumUgovoraZaPrvoImenovanje'];?></p></th>
      </div>
      </tr>
      <tr>
      <div class="subsection">
        <th><label class="label">Broj posljednjeg zaključenog ugovora o radu:</label></th>
        <th><p><?php echo $smt1['brojPosljednjegUgovoraORadu'];?></p></th>
        <th><label class="label">Datum zaključenog ugovora o radu:</label></th>
        <th><p><?php echo $smt1['datumZakljucenogUgovoraORadu'];?></p></th>
      </div>
      </tr>
      <tr>
      <div class="subsection">  
        <th><label class="label">Datup posljednje promjene putem JS3100:</label></th>
        <th><p><?php echo $smt1['datumPosljednjePromjene'];?></p></th>
        <th><label class="label">Država i mjesto rada u inostranstvu u slučaju upućivanja radnika u inostranstvo:</label></th>
        <th><p><?php echo $smt1['upucivanjeRadnikaUInostranstvo'];?></p></th>
      </div>
      </tr>
      <tr>
      <div class="subsection">    
        <th><label class="label">Radi li se o poslovima na kojima se staž osiguranja računa s uvečanim trajanjem:</label></th>
        <th><p><?php echo $smt1['sUvecanimTrajanjem'];?></p> </th>
        <th><label class="label">Radi li se o poslovima na kojima radnik može raditi samo nakon prethodnog i redovnog utvrđivanja Radne sposobnosti za njihovo obavljanje:</label></th>
        <th><p><?php echo $smt1['radnaSposobnost'];?></p></th>
      </div>
      </tr>
      <tr>
      <div class="subsection">
        <th><label class="label">Mjesto rada:</label></th>
        <th><label class="label" name="mjestoRada"<p><?php echo $smt1['mjestoRada'];?></p></th>
        <th><label class="label">Prethodni radni staž:</label></th>
        <th><p><?php echo $smt1['prethodniRadniStaz'];?></p></th>
      </div>
      </tr>
      <tr>
      <div class="subsection">    
        <th><label class="label">Prethodni penzioni staž:</label></th>
        <th><p><?php echo $smt1['prethodniPStaz'];?></p></th>
        <th><label class="label">Neplaceno/porodiljsko/placeno OD:</label></th>
        <th><p><?php echo $smt1['porodiljskoOD'];?></p></th>
      </div>
      </tr>
      <tr>
      <div class="subsection">    
        <th><label class="label">Neplaceno/porodiljsko/placeno DO:</label></th>
        <th><p><?php echo $smt1['porodiljskoDO'];?></p></th> 
        <th><label class="label">Dan prestanka radnog odnosa:</label></th>
        <th><p><?php echo $smt1['danPrestankaRadnogOdnosa'];?></p></th>
      </div>
      </tr>
      <tr>
      <div class="subsection">    
        <th><label class="label">Razlozi prestanka radnog odnosa:</label></th>
        <th><p><?php echo $smt1['razloziPrestankaRadnogOdnosa'];?></p></th>
        <th><label class="label">Puni naziv is sudskog rješenja:</label></th>
        <th><p><?php echo $smt1['nazivIzSudskogRjesenja'];?></p></th>
      </div>
      </tr>
      <tr>
      <div class="subsection">
        <th><label class="label">ID broj poslje odjave-poslovna jedinica:</label></th>
        <th><p><?php echo $smt1['poslovnaJedinica'];?></p></th>
      </div>
      </tr>
    </div>
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