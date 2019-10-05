<?php
  $nav_selected = "SETUP";
  $left_buttons = "NO";
  $left_selected = "";

  include("./nav.php");
  global $db;
 ?>



<html>
<body>

  <?php
  if( isset($_GET['submit'])){
    $min_date = $_GET["min_date"];
    $max_date = $_GET["max_date"];
    $status = $_GET["release_status"];
    $type = $_GET["release_type"];
    //TODO: add the queries to update other setting values (currently just "min date")
    $sql1 = "UPDATE preferences SET value = $min_date where preference = 'min_date'";
    $db->query($sql1);
    $db->close();

    //testing single file
  }
  ?>
  
<form action="" method="get">
  <h3>Date Range</h3>
  <p>from:</p>
  <input type="text" name="min_date" >
  <p>to:</p>
  <input type="text" name="max_date" >
  <h3>Release Status</h3>
  <input type="text" name="release_status" >
  <h3>Release Type</h3>
  <input type="text" name="release_type"><br>
  <br>
  <input type="Submit" name="submit" value="Apply Settings">

</form>


</body>
</html>
 <div class="right-content">
    <div class="container">

      <h3 style = "color: #01B0F1;">Setup (TO BE DONE LATER)</h3>

    </div>
</div>

<?php include("./footer.php"); ?>
