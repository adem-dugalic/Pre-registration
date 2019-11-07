<?php

	require 'dbconfig/config.php';
	session_start();
	if(!isset($_SESSION['active'])) 
  header("Location: index.php");
	$counter=$_SESSION['cont'];
?>

<?php 
	if (isset($_REQUEST['to_edit'])) {
		$id = $_GET['to_edit'];
		$update = true;
		$record = mysqli_query($con, "SELECT * FROM employee WHERE id=$id");

		if (mysqli_num_rows($record)==1) {
			$n = mysqli_fetch_array($record);
			$ImeIPrezime = $n['ImeIPrezime'];
			$broj = $n['broj'];
			$IUSbroj = $n['IUSbroj'];
			$pol = $n['pol'];
			$imeOca = $n['imeOca'];
			$imeMajke = $n['imeMajke'];
			$datumRodenja = $n['datumRodenja'];
			$mjestoRodenja = $n['mjestoRodenja'];
			$starost = $n['starost'];
			$jmbg = $n['jmbg'];
			$drzavljanstvo = $n['drzavljanstvo'];
			$bracniStatus = $n['bracniStatus'];
			$brojLicneKarte = $n['brojLicneKarte'];
			$turskiBroj = $n['turskiBroj'];
			$pasosBroj = $n['pasosBroj'];
			$datumIstekaPasosa = $n['datumIstekaPasosa'];
			$adresa = $n['adresa'];
			$opstina = $n['opstina'];
			$grad = $n['grad'];
			$postanskiBroj = $n['postanskiBroj'];
			$drzava = $n['drzava'];
			$brojMobitela1 = $n['brojMobitela1'];
			$brojMobitela2 = $n['brojMobitela2'];
			$brojMagnetneKartice = $n['brojMagnetneKartice'];
			$emailIUS = $n['emailIUS'];
			$privatniEmail = $n['privatniEmail'];
			$skolskaSprema = $n['skolskaSprema'];
			$skracenaSprema = $n['skracenaSprema'];
			$problemZvanje = $n['problemZvanje'];
			$strucniIspit = $n['strucniIspit'];
			$dodatnoObrazovanje = $n['dodatnoObrazovanje'];
			$certifikati = $n['certifikati'];
			$status = $n['status'];
			$dnevnaSatnica = $n['dnevnaSatnica'];
			$sedmicnoVrijeme = $n['sedmicnoVrijeme'];
			$pozicijaBH = $n['pozicijaBH'];
			$pozicijaENG = $n['pozicijaENG'];
			$dodatnaZaduzenja = $n['dodatnaZaduzenja'];
			$odlukaOImenovanjuB = $n['odlukaOImenovanjuB'];
			$odlukaOImenovanjuO = $n['odlukaOImenovanjuO'];
			$odlukaOImenovanjuD = $n['odlukaOImenovanjuD'];
			$fakultet = $n['fakultet'];
			$odsjek = $n['odsjek'];
			$studijskiProgram = $n['studijskiProgram'];
			$ekvivalencija = $n['ekvivalencija'];
			$pocetakRada = $n['pocetakRada'];
			$vrijemeNaIUS = $n['vrijemeNaIUS'];
			$datumIstekaUg = $n['datumIstekaUg'];
			$ugovorORadu = $n['ugovorORadu'];
			$trajanjeProbnog = $n['trajanjeProbnog'];
			$brojZakljucenogUgovoraORaduSaPripravnikom = $n['brojZakljucenogUgovoraORaduSaPripravnikom'];
			$datumZakljucenogUgovoraORaduSaPripravnikom = $n['datumZakljucenogUgovoraORaduSaPripravnikom'];
			$trajanjePripravnickogStaza = $n['trajanjePripravnickogStaza'];
			$vrijemeIRezultatPolaganjaStrucnogIspitaAkoJeIstiPredvidenIObjavl = $n['vrijemeIRezultatPolaganjaStrucnogIspitaAkoJeIstiPredvidenIObjavl'];
			$trajanjeRadaUInostranstvu = $n['trajanjeRadaUInostranstvu'];
			$trajanjeRadnogVremena = $n['trajanjeRadnogVremena'];
			$dozvolaZaBoravak = $n['dozvolaZaBoravak'];
			$brojUgovoraZaImenovanje = $n['brojUgovoraZaImenovanje'];
			$datumUgovoraZaPrvoImenovanje = $n['datumUgovoraZaPrvoImenovanje'];
			$brojPosljednjegUgovoraORadu = $n['brojPosljednjegUgovoraORadu'];
			$datumZakljucenogUgovoraORadu = $n['datumZakljucenogUgovoraORadu'];
			$datumPosljednjePromjene = $n['datumPosljednjePromjene'];
			$upucivanjeRadnikaUInostranstvo = $n['upucivanjeRadnikaUInostranstvo'];
			$sUvecanimTrajanjem = $n['sUvecanimTrajanjem'];
			$radnaSposobnost = $n['radnaSposobnost'];
			$mjestoRada = $n['mjestoRada'];
			$prethodniRadniStaz = $n['prethodniRadniStaz'];
			$prethodniPStaz = $n['prethodniPStaz'];
			$porodiljskoOD = $n['porodiljskoOD'];
			$porodiljskoDO = $n['porodiljskoDO'];
			$danPrestankaRadnogOdnosa = $n['danPrestankaRadnogOdnosa'];
			$razloziPrestankaRadnogOdnosa = $n['razloziPrestankaRadnogOdnosa'];
			$nazivIzSudskogRjesenja = $n['nazivIzSudskogRjesenja'];
			$poslovnaJedinica = $n['poslovnaJedinica'];
			$nazivBnake = $n['nazivBnake'];
			$ulicaBanke = $n['ulicaBanke'];
			$grad2 = $n['grad2'];
			$brojBnakovnogRacuna = $n['brojBnakovnogRacuna'];
			$part = $n['part'];
		}
	}

	if (isset($_POST['update'])) {
	$id=$_POST['id'];
	$ImeIPrezime = $_POST['ImeIPrezime'];
	$broj = $_POST['broj'];
	$IUSbroj = $_POST['IUSbroj'];
	$pol = $_POST['pol'];
	$imeOca = $_POST['imeOca'];
	$imeMajke = $_POST['imeMajke'];
	$datumRodenja = $_POST['datumRodenja'];
	$mjestoRodenja = $_POST['mjestoRodenja'];
	$starost = $_POST['starost'];
	$jmbg = $_POST['jmbg'];
	$drzavljanstvo = $_POST['drzavljanstvo'];
	$bracniStatus = $_POST['bracniStatus'];
	$brojLicneKarte = $_POST['brojLicneKarte'];
	$turskiBroj = $_POST['turskiBroj'];
	$pasosBroj = $_POST['pasosBroj'];
	$datumIstekaPasosa = $_POST['datumIstekaPasosa'];
	$adresa = $_POST['adresa'];
	$opstina = $_POST['opstina'];
	$grad = $_POST['grad'];
	$postanskiBroj = $_POST['postanskiBroj'];
	$drzava = $_POST['drzava'];
	$brojMobitela1 = $_POST['brojMobitela1'];
	$brojMobitela2 = $_POST['brojMobitela2'];
	$brojMagnetneKartice = $_POST['brojMagnetneKartice'];
	$emailIUS = $_POST['emailIUS'];
	$privatniEmail = $_POST['privatniEmail'];
	$skolskaSprema = $_POST['skolskaSprema'];
	$skracenaSprema = $_POST['skracenaSprema'];
	$problemZvanje = $_POST['problemZvanje'];
	$strucniIspit = $_POST['strucniIspit'];
	$dodatnoObrazovanje = $_POST['dodatnoObrazovanje'];
	$certifikati = $_POST['certifikati'];
	$status = $_POST['status'];
	$dnevnaSatnica = $_POST['dnevnaSatnica'];
	$sedmicnoVrijeme = $_POST['sedmicnoVrijeme'];
	$pozicijaBH = $_POST['pozicijaBH'];
	$pozicijaENG = $_POST['pozicijaENG'];
	$dodatnaZaduzenja = $_POST['dodatnaZaduzenja'];
	$odlukaOImenovanjuB = $_POST['odlukaOImenovanjuB'];
	$odlukaOImenovanjuO = $_POST['odlukaOImenovanjuO'];
	$odlukaOImenovanjuD = $_POST['odlukaOImenovanjuD'];
	$fakultet = $_POST['fakultet'];
	$odsjek = $_POST['odsjek'];
	$studijskiProgram = $_POST['studijskiProgram'];
	$ekvivalencija = $_POST['ekvivalencija'];
	$pocetakRada = $_POST['pocetakRada'];
	$vrijemeNaIUS = $_POST['vrijemeNaIUS'];
	$datumIstekaUg = $_POST['datumIstekaUg'];
	$ugovorORadu = $_POST['ugovorORadu'];
	$trajanjeProbnog = $_POST['trajanjeProbnog'];
	$brojZakljucenogUgovoraORaduSaPripravnikom = $_POST['brojZakljucenogUgovoraORaduSaPripravnikom'];
	$datumZakljucenogUgovoraORaduSaPripravnikom = $_POST['datumZakljucenogUgovoraORaduSaPripravnikom'];
	$trajanjePripravnickogStaza = $_POST['trajanjePripravnickogStaza'];
	$vrijemeIRezultatPolaganjaStrucnogIspitaAkoJeIstiPredvidenIObjavl = $_POST['vrijemeIRezultatPolaganjaStrucnogIspitaAkoJeIstiPredvidenIObjavl'];
	$trajanjeRadaUInostranstvu = $_POST['trajanjeRadaUInostranstvu'];
	$trajanjeRadnogVremena = $_POST['trajanjeRadnogVremena'];
	$dozvolaZaBoravak = $_POST['dozvolaZaBoravak'];
	$brojUgovoraZaImenovanje = $_POST['brojUgovoraZaImenovanje'];
	$datumUgovoraZaPrvoImenovanje = $_POST['datumUgovoraZaPrvoImenovanje'];
	$brojPosljednjegUgovoraORadu = $_POST['brojPosljednjegUgovoraORadu'];
	$datumZakljucenogUgovoraORadu = $_POST['datumZakljucenogUgovoraORadu'];
	$datumPosljednjePromjene = $_POST['datumPosljednjePromjene'];
	$upucivanjeRadnikaUInostranstvo = $_POST['upucivanjeRadnikaUInostranstvo'];
	$sUvecanimTrajanjem = $_POST['sUvecanimTrajanjem'];
	$radnaSposobnost = $_POST['radnaSposobnost'];
	$mjestoRada = $_POST['mjestoRada'];
	$prethodniRadniStaz = $_POST['prethodniRadniStaz'];
	$prethodniPStaz = $_POST['prethodniPStaz'];
	$porodiljskoOD = $_POST['porodiljskoOD'];
	$porodiljskoDO = $_POST['porodiljskoDO'];
	$danPrestankaRadnogOdnosa = $_POST['danPrestankaRadnogOdnosa'];
	$razloziPrestankaRadnogOdnosa = $_POST['razloziPrestankaRadnogOdnosa'];
	$nazivIzSudskogRjesenja = $_POST['nazivIzSudskogRjesenja'];
	$poslovnaJedinica = $_POST['poslovnaJedinica'];
	$nazivBnake = $_POST['nazivBnake'];
	$ulicaBanke = $_POST['ulicaBanke'];
	$grad2 = $_POST['grad2'];
	$brojBnakovnogRacuna = $_POST['brojBnakovnogRacuna'];
	$part = $_POST['part'];
	mysqli_query($con, "UPDATE employee SET ImeIPrezime='$ImeIPrezime',broj='$broj',IUSbroj='$IUSbroj',pol='$pol',imeOca='$imeOca',imeMajke='$imeMajke',datumRodenja='$datumRodenja'
            ,mjestoRodenja='$mjestoRodenja',starost='$starost',
            jmbg='$jmbg',drzavljanstvo='$drzavljanstvo',bracniStatus='$bracniStatus'
            ,brojLicneKarte='$brojLicneKarte',turskiBroj='$turskiBroj',pasosBroj='$pasosBroj'
            ,datumIstekaPasosa='$datumIstekaPasosa',adresa='$adresa',opstina='$opstina',
            grad='$grad',postanskiBroj='$postanskiBroj',drzava='$drzava',brojMobitela1='$brojMobitela1'
            ,brojMobitela2='$brojMobitela2',brojMagnetneKartice='$brojMagnetneKartice',emailIUS='$emailIUS'
            ,privatniEmail='$privatniEmail',skolskaSprema='$skolskaSprema',skracenaSprema='$skracenaSprema',
            problemZvanje='$problemZvanje',strucniIspit='$strucniIspit',dodatnoObrazovanje='$dodatnoObrazovanje',
            certifikati='$certifikati',status='$status',dnevnaSatnica='$dnevnaSatnica',sedmicnoVrijeme='$sedmicnoVrijeme',
            pozicijaBH='$pozicijaBH',pozicijaENG='$pozicijaENG',dodatnaZaduzenja='$dodatnaZaduzenja',odlukaOImenovanjuB='$odlukaOImenovanjuB',
            odlukaOImenovanjuO='$odlukaOImenovanjuO',odlukaOImenovanjuD='$odlukaOImenovanjuD',fakultet='$fakultet',odsjek='$odsjek'
            ,studijskiProgram='$studijskiProgram',ekvivalencija='$ekvivalencija',pocetakRada='$pocetakRada',vrijemeNaIUS='$vrijemeNaIUS'
            ,datumIstekaUg='$datumIstekaUg',ugovorORadu='$ugovorORadu',trajanjeProbnog='$trajanjeProbnog',
            brojZakljucenogUgovoraORaduSaPripravnikom='$brojZakljucenogUgovoraORaduSaPripravnikom',
            datumZakljucenogUgovoraORaduSaPripravnikom='$datumZakljucenogUgovoraORaduSaPripravnikom',
            trajanjePripravnickogStaza='$trajanjePripravnickogStaza',
            vrijemeIRezultatPolaganjaStrucnogIspitaAkoJeIstiPredvidenIObjavl='$vrijemeIRezultatPolaganjaStrucnogIspitaAkoJeIstiPredvidenIObjavl'
            ,trajanjeRadaUInostranstvu='$trajanjeRadaUInostranstvu',trajanjeRadnogVremena='$trajanjeRadnogVremena',
            dozvolaZaBoravak='$dozvolaZaBoravak',brojUgovoraZaImenovanje='$brojUgovoraZaImenovanje',
            datumUgovoraZaPrvoImenovanje='$datumUgovoraZaPrvoImenovanje',brojPosljednjegUgovoraORadu='$brojPosljednjegUgovoraORadu',
            datumZakljucenogUgovoraORadu='$datumZakljucenogUgovoraORadu',datumPosljednjePromjene='$datumPosljednjePromjene',
            upucivanjeRadnikaUInostranstvo='$upucivanjeRadnikaUInostranstvo',sUvecanimTrajanjem='$sUvecanimTrajanjem',
            radnaSposobnost='$radnaSposobnost',mjestoRada='$mjestoRada',prethodniRadniStaz='$prethodniRadniStaz',
            prethodniPStaz='$prethodniPStaz',porodiljskoOD='$porodiljskoOD',porodiljskoDO='$porodiljskoDO',
            danPrestankaRadnogOdnosa='$danPrestankaRadnogOdnosa',razloziPrestankaRadnogOdnosa='$razloziPrestankaRadnogOdnosa',
            nazivIzSudskogRjesenja='$nazivIzSudskogRjesenja',poslovnaJedinica='$poslovnaJedinica',nazivBnake='$nazivBnake',
            ulicaBanke='$ulicaBanke',grad2='$grad2',brojBnakovnogRacuna='$brojBnakovnogRacuna',part ='$part' WHERE id='$id'");
	header('location: EmpDashboard.php');
	}
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Employee</title>
	<link rel="stylesheet" type="text/css" href="css/editstyle.css?version=4">
	
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
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

<div class="container">

<form class="main_form" action="edit.php" method="post" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?php echo $id; ?>">
<div class="all-data"> 
			<div class="section">
			<table>
				<tr>
				<div class="subsection">
					<th><u><p class="section-name">Osnovni podaci:</p></th>
				</div>
				</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Ime i prezime:</label></th>
				<th><input class="input" name="ImeIPrezime" type="text" value="<?php echo $ImeIPrezime;?>"/><th>
				<label class="label">Broj:</label>
				<th><input class="input" name="broj" type="text" value="<?php echo $broj;?>"/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">IUS broj:</label></th>
				<th><input class="input" name="IUSbroj" type="text" value="<?php echo $IUSbroj;?>"/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
			<th><label class="label selectorzapol" data-kojijepol="<?php echo $pol; ?>">Pol:</label></th>
				<th><input name="pol" type="radio" class="input" value="musko" value="<?php echo $pol;?>"/><label class="label">Musko</label></th>
				<th><input name="pol" type="radio" class="input" value="zensko" value="<?php echo $pol;?>"/><label class="label">Žensko</label></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Ime oca:</label></th>
				<th><input class="input" name="imeOca" type="text" value="<?php echo $imeOca;?>"/></th>
				<th><label class="label">Ime majke:</label></th>
				<th><input class="input" name="imeMajke" type="text" value="<?php echo $imeMajke;?>"/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Datum Rođenja:</label></th>
				<th><input class="input" name="datumRodenja" type="text" value="<?php echo $datumRodenja;?>"/></th>
				<th><label class="label">Mjesto rođenja:</label></th>
				<th><input class="input" name="mjestoRodenja" type="text" value="<?php echo $mjestoRodenja;?>"/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Starost:</label></th>
				<th><input class="input" name="starost" type="text" value="<?php echo $starost;?>"/></th>
				<th><label class="label">JMBG/JIB:</label></th>
				<th><input class="input" name="jmbg" type="text" value="<?php echo $jmbg;?>"/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Državljanstvo:</label></th>
				<th><input class="input" name="drzavljanstvo" type="text" value="<?php echo $drzavljanstvo;?>"/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
			<th><label class="label brak" data-kojijebrak="<?php echo $bracniStatus; ?>">Bračni status:</label></th>
				<th><input name="bracniStatus" type="radio" class="input" value="Ubraku"  value="<?php echo $bracniStatus;?>"/><label class="label">U braku</label></th>
				<th><input name="bracniStatus" type="radio" class="input" value="Nije"  value="<?php echo $bracniStatus;?>"/><label class="label">Nije</label></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Broj lične karte:</label></th>
				<th><input class="input" name="brojLicneKarte" type="text" value="<?php echo $brojLicneKarte;?>"/></th>
				<th><label class="label">Turski matični broj:</label></th>
				<th><input class="input" name="turskiBroj" type="text" value="<?php echo $turskiBroj;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Pasoš broj:</label></th>
				<th><input class="input" name="pasosBroj" type="text" value="<?php echo $pasosBroj;?>"/></th>
				<th><label class="label">Datum isteka pasoša:</label></th>
				<th><input class="input" name="datumIstekaPasosa" type="text" value="<?php echo $datumIstekaPasosa;?>"/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Adresa:</label></th>
				<th><input class="input" name="adresa" type="text" value="<?php echo $adresa;?>"/></th>
				<th><label class="label">Opština:</label></th>
				<th><input class="input" name="opstina" type="text" value="<?php echo $opstina;?>"/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Grad:</label></th>
				<th><input class="input" name="grad" type="text" value="<?php echo $grad;?>"/></th>
				<th><label class="label">Poštanski broj:</label></th>
				<th><input class="input" name="postanskiBroj" type="text" value="<?php echo $postanskiBroj;?>"/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">	
				<th><label class="label">Država:</label></th>
				<th><input class="input" name="drzava" type="text" value="<?php echo $drzava;?>"/></th>
				<th><label class="label">Broj Mobitela 1:</label></th>
				<th><input class="input" name="brojMobitela1" type="text"  value="<?php echo $brojMobitela1;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">	
				<th><label class="label">Broj Mobitela 2:</label></th>
				<th><input class="input" name="brojMobitela2" type="text"  value="<?php echo $brojMobitela2;?>"/></th>
				<th><label class="label">Broj magnetne kartice:</label></th>
				<th><input class="input" name="brojMagnetneKartice" type="text"  value="<?php echo $brojMagnetneKartice;?>"/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">	
				<th><label class="label">Email-ius:</label></th>
				<th><input class="input" name="emailIUS" type="text"  value="<?php echo $emailIUS;?>"/>
				<th><label class="label">Privatni email:</label></th>
				<th><input class="input" name="privatniEmail" type="text" value="<?php echo $privatniEmail;?>"/>

			</div>
			</tr>
		</div>


		<div class="section">
			<tr>
				<div class="subsection">
					<th><u><p class="section-name">Podaci o skolovanju:</p></th>
				</div>
				</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Školska sprema:</label></th>
				<th><input class="input" name="skolskaSprema" type="text"  value="<?php echo $skolskaSprema;?>"/> </th>
				<th><label class="label">Skraceni naziv stručne spreme:</label></th>
				<th><input class="input" name="skracenaSprema" type="text"  value="<?php echo $skracenaSprema;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Problematično zvanje:</label></th>
				<th><input class="input" name="problemZvanje" type="text" value="<?php echo $problemZvanje;?>"/></th>
				<th><label class="label">Stručni ispit:</label></th>
				<th><input class="input" name="strucniIspit" type="text" value="<?php echo $strucniIspit;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Dodatno obrazovanje:</label></th>
				<th><input class="input" name="dodatnoObrazovanje" type="text"  value="<?php echo $dodatnoObrazovanje;?>"/> </th>
				<th><label class="label">Certifikati i slično:</label></th>
				<th><input class="input" name="certifikati" type="text" value="<?php echo $certifikati;?>"/> </th>
			</div>
			</tr>
		</div>


		<div class="section">
			<tr>
				<div class="subsection">
					<th><u><p class="section-name">Podaci o poziciji:</p></th>
				</div>
				</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Trenutni status na IUS-u:</label></th>
				<th><input class="input" name="status" type="text" value="<?php echo $status;?>"/></th>
				<th><label class="label">Dnevna satnica:</label></th>
				<th><input class="input" name="dnevnaSatnica" type="text" value="<?php echo $dnevnaSatnica;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Ugovoreno sedmično vrijeme:</label></th>
				<th><input class="input" name="sedmicnoVrijeme" type="text" value="<?php echo $sedmicnoVrijeme;?>"/></th>
				<th><label class="label">Radna pozicija(bh):</label></th>
				<th><input class="input" name="pozicijaBH" type="text" value="<?php echo $pozicijaBH;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Radna pozicija(eng):</label></th>
				<th><input class="input" name="pozicijaENG" type="text"  value="<?php echo $pozicijaENG;?>"/> </th>
				<th><label class="label">Dodatna zaduženja:</label></th>
				<th><input class="input" name="dodatnaZaduzenja" type="text" value="<?php echo $dodatnaZaduzenja;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Odluka o imenovanju-broj:</label></th>
				<th><input class="input" name="odlukaOImenovanjuB" type="text" value="<?php echo $odlukaOImenovanjuB;?>"/> </th>
				<th><label class="label">Odluka o imenovanju od:</label></th>
				<th><input class="input" name="odlukaOImenovanjuO" type="text" value="<?php echo $odlukaOImenovanjuO;?>"/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Odluka o imenovanju do:</label></th>
				<th><input class="input" name="odlukaOImenovanjuD" type="text" value="<?php echo $odlukaOImenovanjuD;?>"/> </th>
				<th><label class="label">Fakultet(bh i eng):</label></th>
				<th><input class="input" name="fakultet" type="text"  value="<?php echo $fakultet;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Odsjek:</label></th>
				<th><input class="input" name="odsjek" type="text" value="<?php echo $odsjek;?>"/></th>
				<th><label class="label">Studijski program:</label></th>
				<th><input class="input" name="studijskiProgram" type="text"  value="<?php echo $studijskiProgram;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Ekvivalencija po oblasti:</label></th>
				<th><input class="input" name="ekvivalencija" type="text" value="<?php echo $ekvivalencija;?>"/> </th>
				<th><label class="label">Pocetak rada na IUS-u:</label></th>
				<th><input class="input" name="pocetakRada" type="text"  value="<?php echo $pocetakRada;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Ukupno vrijeme provedeno na IUS-u:</label></th>
				<th><input class="input" name="vrijemeNaIUS" type="text"  value="<?php echo $vrijemeNaIUS;?>"/> </th>
				<th><label class="label">Datum isteka ugovora:</label></th>
				<th><input class="input" name="datumIstekaUg" type="text" value="<?php echo $datumIstekaUg;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label ugovor" data-kojijeugovor="<?php echo $ugovorORadu; ?>">Tip ugovora o radu:</label></th>
				<th><input class="input" name="ugovorORadu" type="radio" class="radio-button" value="odredeno" value="<?php echo $ugovorORadu;?>"/><label class="label">Određeno</label></th>
			<th>	<input class="input" name="ugovorORadu" type="radio" class="radio-button" value="neodredeno"  value="<?php echo $ugovorORadu;?>"/><label class="label">Neodređeno</label></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Vrijeme trajanja probnog rada:</label></th>
				<th><input class="input" name="trajanjeProbnog" type="text"  value="<?php echo $trajanjeProbnog;?>"/></th>	 
				<th><label class="label">Broj zaključenog ugovora o radu sa pripravnikom:</label></th>
				<th><input class="input" name="brojZakljucenogUgovoraORaduSaPripravnikom" type="text" value="<?php echo $brojZakljucenogUgovoraORaduSaPripravnikom;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Datum zaključenog ugovora o radu sa pripravnikom:</label></th>
				<th><input class="input" name="datumZakljucenogUgovoraORaduSaPripravnikom" type="text" value="<?php echo $datumZakljucenogUgovoraORaduSaPripravnikom;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Trajanje pripravničkog staža:</label></th>
				<th><input class="input" name="trajanjePripravnickogStaza" type="text" value="<?php echo $trajanjePripravnickogStaza;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Vrijeme i rezultat polaganja stručnog ispita, ako je isti predviđen i objavljen:</label></th>
				<th><input class="input" name="vrijemeIRezultatPolaganjaStrucnogIspitaAkoJeIstiPredvidenIObjavl" type="text" value="<?php echo $vrijemeIRezultatPolaganjaStrucnogIspitaAkoJeIstiPredvidenIObjavl;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Trajanje rada u inostranstvu:</label></th>
				<th><input class="input" name="trajanjeRadaUInostranstvu" type="text" value="<?php echo $trajanjeRadaUInostranstvu;?>"/> </th>
				<th><label class="label">Dozvola za boravak i rad ili potvrda o prijavi rada:</label></th>
				<th><input class="input" name="dozvolaZaBoravak" type="text"  value="<?php echo $dozvolaZaBoravak;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label trajanje" data-kojijetrajanje="<?php echo $trajanjeRadnogVremena; ?>">Trajanje radnog vremena:</label></th>
				<th><input class="input" name="trajanjeRadnogVremena" type="radio" class="radio-button" value="odredeno"  value="<?php echo $trajanjeRadnogVremena;?>"/><label class="label">Određeno</label></th>
				<th><input class="input" name="trajanjeRadnogVremena" type="radio" class="radio-button" value="neodredeno" value="<?php echo $trajanjeRadnogVremena;?>"/><label class="label">Neodređeno</label></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Broj prvog ugovora koji se vezuje za imenovanje:</label></th>
				<th><input class="input" name="brojUgovoraZaImenovanje" type="text" value="<?php echo $brojUgovoraZaImenovanje;?>"/> </th>
				<th><label class="label">Datum potpisivanja ugovora koji se vezuje za prvo imenovanje:</label></th>
				<th><input class="input" name="datumUgovoraZaPrvoImenovanje" type="text"  value="<?php echo $datumUgovoraZaPrvoImenovanje;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Broj posljednjeg zaključenog ugovora o radu:</label></th>
				<th><input class="input" name="brojPosljednjegUgovoraORadu" type="text"  value="<?php echo $brojPosljednjegUgovoraORadu;?>"/> </th>
				<th><label class="label">Datum zaključenog ugovora o radu:</label></th>
				<th><input class="input" name="datumZakljucenogUgovoraORadu" type="text"  value="<?php echo $datumZakljucenogUgovoraORadu;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">	
				<th><label class="label">Datup posljednje promjene putem JS3100:</label></th>
				<th><input class="input" name="datumPosljednjePromjene" type="text"  value="<?php echo $datumPosljednjePromjene;?>"/></th>
				<th><label class="label">Država i mjesto rada u inostranstvu u slučaju upućivanja radnika u inostranstvo:</label></th>
				<th><input class="input" name="upucivanjeRadnikaUInostranstvo" type="text" value="<?php echo $upucivanjeRadnikaUInostranstvo;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">		
				<th><label class="label">Radi li se o poslovima na kojima se staž osiguranja računa s uvečanim trajanjem:</label></th>
				<th><input class="input" name="sUvecanimTrajanjem" type="text"  value="<?php echo $sUvecanimTrajanjem;?>"/> </th>
				<th><label class="label">Radi li se o poslovima na kojima radnik može raditi samo nakon prethodnog i redovnog utvrđivanja Radne sposobnosti za njihovo obavljanje:</label></th>
				<th><input class="input" name="radnaSposobnost" type="text" value="<?php echo $radnaSposobnost;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">Mjesto rada:</label></th>
				<th><input class="input" name="mjestoRada" type="text" value="<?php echo $mjestoRada;?>"/> </th>
				<th><label class="label">Prethodni radni staž:</label></th>
				<th><input class="input" name="prethodniRadniStaz" type="text" value="<?php echo $prethodniRadniStaz;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">		
				<th><label class="label">Prethodni penzioni staž:</label></th>
				<th><input class="input" name="prethodniPStaz" type="text"  value="<?php echo $prethodniPStaz;?>"/> </th>
				<th><label class="label">Neplaceno/porodiljsko/placeno OD:</label></th>
				<th><input class="input" name="porodiljskoOD" type="text"  value="<?php echo $porodiljskoOD;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">		
				<th><label class="label">Neplaceno/porodiljsko/placeno DO:</label></th>
				<th><input class="input" name="porodiljskoDO" type="text" value="<?php echo $porodiljskoDO;?>"/></th> 
				<th><label class="label">Dan prestanka radnog odnosa:</label></th>
				<th><input class="input" name="danPrestankaRadnogOdnosa" type="text" value="<?php echo $danPrestankaRadnogOdnosa;?>"/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">		
				<th><label class="label">Razlozi prestanka radnog odnosa:</label></th>
				<th><input class="input" name="razloziPrestankaRadnogOdnosa" type="text" value="<?php echo $razloziPrestankaRadnogOdnosa;?>"/> </th>
				<th><label class="label">Puni naziv is sudskog rješenja:</label></th>
				<th><input class="input" name="nazivIzSudskogRjesenja" type="text" value="<?php echo $nazivIzSudskogRjesenja;?>"/> </th>
			</div>
			</tr>
			<tr>
			<div class="subsection">
				<th><label class="label">ID broj poslje odjave-poslovna jedinica:</label></th>
				<th><input class="input" name="poslovnaJedinica" type="text" value="<?php echo $poslovnaJedinica;?>"/> </th>
			</div>
			</tr>
		</div>


		<div class="section">
			<tr>
				<div class="subsection">
					<th><u><p class="section-name">Podaci o placanju:</p></th>
				</div>
				</tr>
			<tr>
			<div class="subsection">		
				<th><label class="label">Naziv banke:</label></th>
				<th><input class="input" name="nazivBnake" type="text"  value="<?php echo $nazivBnake;?>"/> </th>
				<th><label class="label">Ulica banke:</label></th>
				<th><input class="input" name="ulicaBanke" type="text" value="<?php echo $ulicaBanke;?>"/></th>
			</div>
			</tr>
			<tr>
			<div class="subsection">		
				<th><label class="label">Grad Banke:</label></th>
				<th><input class="input" name="grad2" type="text"  value="<?php echo $grad2;?>"/> </th>
				<th><label class="label">Broj bankovnog računa od januara 2017:</label></th>
				<th><input class="input" name="brojBnakovnogRacuna" type="text"  value="<?php echo $brojBnakovnogRacuna;?>"/> </th>
			</div>
			</tr>

			<tr>
				<div class="subsection">
					<th><label class="label odjeel" data-odj="<?php echo $part; ?>">Odjel na IUS:</label></th>
					<th colspan="3">
						<table>
							<tr>
								<td><input class="input" name="part" type="radio" class="radioooo" value="FENS" data-rq/></td>
								<td><input class="input" name="part" type="radio" class="radioooo" value="FBA" data-rq/></td>
								<td><input class="input" name="part" type="radio" class="radioooo" value="FE" data-rq/></td>
							</tr>
							<tr>
								<td><label class="label">FENS</label></td>
								<td><label class="label">FBA</label></td>
								<td><label class="label">FE</label></td>
							</tr>
							<tr>
								<td><input class="input" name="part" type="radio" class="radioooo" value="FASS" data-rq/></td>
								<td><input class="input" name="part" type="radio" class="radioooo" value="FL" data-rq/></td>
								<td><input class="input" name="part" type="radio" class="radioooo" value="Academic"  data-rq/></td>
							</tr>
							<tr>
								<td><label class="label">FASS</label></td>
								<td><label class="label">FL</label></td>
								<td><label class="label">Academic</label></td>
							</tr>
						</table>
					</th>
				</div>
			</tr>
  		</table>
		<div class="buttons-container">
		<?php if (isset($update) && $update): ?>
		<button class="option option__submit" type="submit" name="update">Confirm</button>
		<?php endif ?>
		</div>
		</form>
		</div>
	</body>	
</html>
