<?php
    $servername="localhost";
    $username="root";
    $password="";
    $data="reservation";
    
    //création de connexion 
    $conn= new mysqli($servername,$username,$password,$data);
    
    //test de connexion
    if($conn->connect_error){
    
        die("Connection failed :" .$conn->connect_error);
    }
    else{
        echo"connection réussi";
    }
       
    $code=$_POST['code'];
    $debut=$_POST['debut'];
    $fin=$_POST['fin'];
    $type=$_POST['type'];
    $commentaire=$_POST['commentaire'];
    $datecréation=$_POST['datecréation'];

if(isset($_POST['envoyer'])){

$sql='INSERT INTO reservation("","'.$code.'","'.$debut.'","'.$fin.'",
"'.$type.'","'.$commentaire.'","'.$datecréation.'")';
 
 if($conn->query($sql)=== TRUE){
    echo"Nouvel enregistrement créé avec succès";
}else{
    echo"Erreur :".$sql."<br>".$conn->error;
}

$conn->close();
}

?>