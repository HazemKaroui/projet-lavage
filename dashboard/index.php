<?php

define('TITLE', "Home");
include '../assets/layouts/header.php';
check_verified();

?>


<main role="main" class="container">

    <div class="row">
        <div class="col-sm-3">

            <?php include('../assets/layouts/profile-card.php'); ?>

        </div>
        <div class="col-sm-9">

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

        </div>
    </div>
</main>




    <?php

    include '../assets/layouts/footer.php'

    ?>