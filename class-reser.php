<?php
 
    class Reservation {
     
    public $code;
    public $debut;
    public $fin;
    public $type;
    public $commentaire;
    public $datecréation;
    }
      
    if(isset($_POST['envoyer'])){

    $sql='INSERT INTO reservation (code, debut,fin,type,commentaire,datecréation)
    VALUES ('" . $this->code . "','" . $this->debut . "','" . $this ->fin . "','" . $this->type . "','" . $this->commentaire . "','" . $this->datecréation . "')';
     
     if($conn->query($sql)=== TRUE){
        echo"Nouvel enregistrement créé avec succès";
    }else{
        echo"Erreur :".$sql."<br>".$conn->error;
    }

    $conn->close();
}
}   
?>