// definir un classe/objet qui représente une réservation. Par suite, ce classe est importé dans les autres scripts php
<?php
 
class Reservation {
     
    public $code;
    public $debut;
    public $fin;
    public $type;
    public $commentaire;
    public $date-création;
     
     
    public function inserer() {
 
        $conn= new mysqli($servername,$username,$password,$data);
     
    $conn->exec("INSERT INTO reservation (code, debut, fin, type,commentaire,date-création)
    VALUES ('" . $this->code . "','" . $this->debut . "','" . $this ->fin . "','" . $this->type . "','" . $this->commentaire . "','" . $this->date-création . "')");
    }  
}
 
?>