<!DOCTYPE html>

<?php         
  
$servername = "127.0.0.1";      
$username = "root";          
$password = "";              
$dbname = "test";            

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);   
}
?> 

<html>
    <head>
         <title>Affiche</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="cs/style.css"/>
    </head>
    <body>
    <form method="POST" >
         <input type="submit" name="afficher" value="Affiche Réservation"> 
    </form>
        <?php
           if(isset($_POST['afficher'])){ 
           $sql ="SELECT * FROM `reservations` ";            
           $res = mysqli_query($conn,$sql);    
        }
            $conn->close();        
            ?>
     <br> <br>
     <fieldset>
     <legend>Tableaux Reservations</legend>
      <table width="1000px">
        <tr  >
            <td>Name</td>
            <td>Email</td>
            <td>Telefone</td>
            <td>Notes</td>
            <td>Date</td>
            <td>Slot</td>
        </tr>
        <?php if(isset($_POST['afficher'])){
        while($ligne= mysqli_fetch_array($res)) {?> 
        <tr> 
        <td> <?php echo $ligne['res_name']; ?> </td>
        <td> <?php echo $ligne['res_email']; ?> </td>
        <td> <?php echo $ligne['res_tel']; ?> </td>
        <td> <?php echo $ligne['res_notes']; ?> </td>
        <td> <?php echo $ligne['res_date']; ?> </td>
        <td> <?php echo $ligne['res_slot']; ?> </td>
        </tr>
        <?php } }?>
      </table>

     </fieldset>
    </body>

</html>