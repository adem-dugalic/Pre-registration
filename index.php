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
            <select name="faculty" onchange="this.form.submit();">
                <option value="FENS">FENS</option>
                <option value="FAS">FAS</option>
                <option value="FBA">FBA</option>
                <option value="FL">FL</option>
                <option value="FE">FE</option>
            </select>
            <select name="program">
              <?php
              if($_POST[faculty]=="FENS"){
                echo '<option value="CS">CS</option>
                      <option value="SE">SE</option>
                      <option value="EE">EE</option>
                      <option value="BIO">BIO</option>
                      <option value="ARCH">ARCH</option>';
              }else if($_POST[faculty]=="FAS"){
                echo '<option value="PSY">PSY</option>
                      <option value="SPS">SPS</option>
                      <option value="VAV">VAV</option>
                      <option value="EL">EL</option>
                      <option value="CULT">CULT</option>';
              }else if($_POST[faculty]=="FBA"){
                echo '<option value="IBF">IBF</option>
                      <option value="IR">IR</option>
                      <option value="ECO">ECO</option>
                      <option value="MAN">MAN</option>';
              }else if($_POST[faculty]=="FL"){
                echo '<option value="ELL">ELL</option>
                      <option value="TLL">TLL</option>
                      <option value="CEI">CEI</option>';
              }else{
                echo '<option value="BA">BA</option>
                      <option value="MA1">MA1</option>
                      <option value="MA2">MA2</option>';
              }?>
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