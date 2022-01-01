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
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	if($rows==1){
	    $_SESSION['username'] = $username;
      header("Location: reservation.php");
	   
	}else{
    header("Location: index.php");
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
                <label for="pass" class="label">Répeter mot de passe</label>
                <input id="pass" type="password" class="input" data-type="Password">
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
if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'], $_REQUEST['password_retype'], $_REQUEST['tel'])){
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username); 
	// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);

	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
  $password_retype = stripslashes($_REQUEST['password_retype']);
	$password_retype = mysqli_real_escape_string($conn, $password_retype);

  $tel= stripslashes($_REQUEST['tel']);
	$tel = mysqli_real_escape_string($conn, $tel);
	//requéte SQL + mot de passe crypté

    $query = "INSERT into `users` (username, tel, email, password_retype, password)
              VALUES ('$username', '$tel', '$email', '".hash('sha256', $password)."','".hash('sha256', $password)."')";
	// Exécute la requête sur la base de données
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
                <label for="pass" class="label">Répeter mot de passe</label>
                <input id="pass" type="password" class="input" data-type="Password" name="password_retype">
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