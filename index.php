<?php
require 'dbconfig/config.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>IUS pre registration system</title>
	<link rel="stylesheet" type="text/css" href="css/indexstyle.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
           <script type="text/javascript">
                var sel1 = document.querySelector('#sel1');
                var sel2 = document.querySelector('#sel2');
                var options2 = sel2.querySelectorAll('option');

                function giveSelection(selValue) {
                  sel2.innerHTML = '';
                  for(var i = 0; i < options2.length; i++) {
                    if(options2[i].dataset.option === selValue) {
                      sel2.appendChild(options2[i]);
                    }
                  }
                }

                giveSelection(sel1.value);
              </script>
</head>
<body class="bg">
  <div class="header">
    <img src="img/Iuslogo2.png" class="logo">
    <h1>International University of Sarajevo</h1></div>
<form class="container" action="index.php" method="post">
  <div class="box"></div>
  <div class="container-forms">
    <div class="container-info">
      <div class="info-item">
        <div class="table">
          <div class="table-cell">
            <p>
              Have an account?
            </p>
            <div class="btn">
              Log in
            </div>
          </div>
        </div>
      </div>
      <div class="info-item">
        <div class="table">
          <div class="table-cell">
            <p>
              Don't have an account? 
            </p>
            <div class="btn">
              Sign up
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-form">
      <div class="form-item log-in">
        <div class="table">
          <div class="table-cell">
            <input name="username" id="user" placeholder="ID" type="text" /><input name="password" id="pas" placeholder="Password" type="Password" />
              <div class="cup"><button name="login" id="mozda"><div class="btn">Log in</div></button></div>
          </div>
        </div>
      </div>
      <div class="form-item sign-up">
        <div class="table">
          <div class="table-cell">
              <input name="username1" placeholder="ID" type="text" />
              <input name="password1" placeholder="Password" type="Password" />
              <input name="cpassword" placeholder="Confirm Password" type="Password" />
            <select id="sel1" onchange="giveSelection(this.value)" style="margin-left: 8.5%; height: 10%; width: 40%;text-align-last: center; text-align: center;">
                <option value="" disabled selected>Faculty</option>
                <option value="FENS">FENS</option>
                <option value="FAS">FAS</option>
                <option value="FBA">FBA</option>
                <option value="FL">FL</option>
                <option value="FE">FE</option>
            </select>
            <select id="sel2" style="margin-left: 2%; height: 10%; width: 40%; text-align-last: center;">
                      <option data-option="FENS" disabled selected>Program</option>
                      <option data-option="FENS">CS</option>
                      <option data-option="FENS">SE</option>
                      <option data-option="FENS">EE</option>
                      <option data-option="FENS">BIO</option>
                      <option data-option="FENS">ARCH</option>
                      <option data-option="FAS" disabled selected>Program</option>
                      <option data-option="FAS">PSY</option>
                      <option data-option="FAS">SPS</option>
                      <option data-option="FAS">VAV</option>
                      <option data-option="FAS">EL</option>
                      <option data-option="FAS">CULT</option>
                      <option data-option="FBA" disabled selected>Program</option>
                      <option data-option="FBA">IBF</option>
                      <option data-option="FBA">IR</option>
                      <option data-option="FBA">ECO</option>
                      <option data-option="FBA">MAN</option>
                      <option data-option="FL" disabled selected>Program</option>
                      <option data-option="FL">ELL</option>
                      <option data-option="FL">TLL</option>
                      <option data-option="FL">CEI</option>
                      <option data-option="FE" disabled selected>Program</option>
                      <option data-option="FE">BA</option>
                      <option data-option="FE">MA1</option>
                      <option data-option="FE">MA2</option>';
            </select>
              <div class="cup">
                  <button name="register">
                    <div class="btn">Sign up</div>
                  </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

<img src="img/devius.png" class="rabbit">
</form>
	<?php

    //#######################################################################################
		//Log in
    //#######################################################################################

    if(isset($_POST['login'])){

			if($_POST['username']==""||$_POST['password']==""){
				echo '<script type="text/javascript"> $("#user").attr("placeholder","Invalid Username or Password");
                                              $("#pas").attr("placeholder","Invalid Username or Password");
              </script> ';
			}else{
			$username = $_POST['username'];
			$password = $_POST['password'];

			$query = "select * from user WHERE username= '$username' AND password='$password'";
			$query_run = mysqli_query($con,$query);

			if(mysqli_num_rows($query_run)>0){
				$_SESSION['username'] = $username;
        $_SESSION['active'] = "active";

				header('location: homepage.php');

				
			}else{
				echo '<script type="text/javascript"> $("#user").attr("placeholder","Invalid Username or Password");
                                              $("#pas").attr("placeholder","Invalid Username or Password");
              </script> ';
			}
		}
	} 

    //#######################################################################################
    //Register
    //#######################################################################################

  if(isset($_POST['register'])){

    $username1 = $_POST['username1'];
    $password1 = $_POST['password1'];
    $cpassword = $_POST['cpassword'];
    $faculty = $_POST['faculty'];
    $program = $_POST['program'];

    if($password1 == $cpassword){

      $query = "select * from user WHERE username= '$username1' ";

      $query_run = mysqli_query($con,$query);
      if(mysqli_num_rows($query_run)>0){
        echo '<script type="text/javascript"> alert("Error") </script> ';
      }else{
        $query = "insert into user(username, password, Faculty, Program) values ('$username1','$password1','$faculty','$program') ";
        $query_run = mysqli_query($con,$query);
        if($query_run){
          echo '<script type="text/javascript"> alert("Registration complete go to login page") </script> ';
        }else{
          echo '<script type="text/javascript"> alert("Error") </script> ';
        }
      }
    }else{
      echo '<script type="text/javascript"> alert("Error, no match") </script> ';
    }
  }

	?>
	

</body>
</html>