<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/connexion.css" />
</head>
<body>
  
<?php
require('config.php');
session_start();
if (isset($_POST['username'])){
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username);
  $_SESSION['username'] = $username;
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE username='$username' 
  and password='".hash('sha256', $password)."'";
  
  $result = mysqli_query($conn,$query) or die(mysql_error());
  
  if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    

    if ($user['type'] == 'admin') {
      header('location: reserv.php');      
    }else{
      header('location: index.php');
    }
  }else{
    $message ="";
  }
}
?>
<form method="POST" action="" name="login">
<div class="login-wrap">
        <div class="login-html">
          <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Se connecter</label>
          <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">S'inscrire</label>
          <div class="login-form">
            <div class="sign-in-htm">
              <div class="group">
                <label for="user" class="label">Identifiant</label>
                <input id="user" type="text" name="username" class="input">
              </div>
              <div class="group">
                <label for="pass" class="label">Mot de passe</label>
                <input id="pass" type="password" name="password" class="input" data-type="password">
              </div>
              <div class="group">
                <input id="check" type="checkbox" class="check" checked>
                <label for="check"><span class="icon"></span> Réster connecter </label>
              </div>
              <div class="group">
                <input type="submit" class="button" name="submit" value="Se connecter">
				</div>
              <div class="hr"></div>
              
            </div>
            <div class="sign-up-htm">
              <div class="group">
                <label for="user" class="label">Identifiant</label>
                <input id="user" type="text" class="input">
              </div>
              <div class="group">
                <label for="pass" class="label">Mot de passe</label>
                <input id="pass" type="password" class="input" data-type="pa">
              </div>
              <div class="group">
                <label for="pass" class="label">Addresse Email</label>
                <input id="pass" type="text" class="input">
              </div>
              <div class="group">
                <label for="pass" class="label">Numero telephone</label>
                <input id="pass" type="tel" class="input">
              </div>
              <div class="group">
                <input type="submit" class="button" value="S'inscrire">
              </div>
              <div class="foot-lnk">
                <label for="tab-1">Déja membre ?</a>
              </div>
              <div class="hr"></div>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>

<?php
require('config.php');
if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'], $_REQUEST['tel'])){

	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username); 

	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);


	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);


  $tel= stripslashes($_REQUEST['tel']);
	$tel = mysqli_real_escape_string($conn, $tel);

    $query = "INSERT into `users` (username, email, tel, password)
              VALUES ('$username', '$email', '$tel', '".hash('sha256', $password)."')";

    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='index.php'>connecter</a></p>
			 </div>";
    }
}else{

?>
<form class="box" action="" method="post">
<div class="sign-up-htm">
              <div class="group">
                <label for="user" class="label">Identifiant</label>
                <input id="user" type="text" class="input" name="username">
              </div>
              <div class="group">
                <label for="pass" class="label">Mot de passe</label>
                <input id="pass" type="password" class="input" data-type="pa" name="password">
              </div>
              <div class="group">
                <label for="pass" class="label">Addresse Email</label>
                <input id="pass" type="text" class="input" name="email">
              </div>
              <div class="group">
                <label for="pass" class="label">Numero telephone</label>
                <input id="pass" type="tel" class="input" name="tel">
              </div>
              <div class="group">
                <input type="submit" class="button" name="submit" value="S'inscrire">
              </div>
              <div class="foot-lnk">
                <label for="tab-1">Déja membre ?</a>
              </div>
              <div class="hr"></div>
			  </form>
<?php } ?>
</body>
</html>