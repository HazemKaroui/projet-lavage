<!DOCTYPE html>
<html>
  <head>
    <title>DUMMY RESERVATION PAGE</title>
    <link href="sty.css" rel="stylesheet">
    </script>
  </head>
  <body>
    
    <?php
    if (isset($_POST["date"])) {
      require "2-reserve.php";
      if ($_RSV->save(
        $_POST["date"], $_POST["slot"], $_POST["name"],
        $_POST["email"], $_POST["tel"], $_POST["notes"])) {
        echo "<div class='ok'>Reservation saved.</div>";
      } else { echo "<div class='err'>".$_RSV->error."</div>"; }
    }
    ?>
    <h1>RESERVATION</h1>
    <form id="resForm" method="post" target="_self">
      <label for="res_name">Nom</label>
      <input type="text" required name="name" value="Saisie votre nom"/>

      <label for="res_email">Email</label>
      <input type="email" required name="email" value="Email"/>

      <label for="res_tel">Numéro telephone</label>
      <input type="text" required name="tel" value="+21623646870"/>

      <label for="res_notes">Objet </label>
      <input type="text" name="notes" value=""/>

      <?php
      $mindate = date("Y-m-d");
      ?>
      <label>Date de Reservation</label>
      <input type="date" required id="res_date" name="date"
             min="<?=$mindate?>">

      <label>Reservation Slot</label>
      <select name="slot">
        <option value="AM">AM</option>
        <option value="PM">PM</option>
      </select>
      <input type="submit" value="Reserver"/>
    </form>
  </body>
</html>
