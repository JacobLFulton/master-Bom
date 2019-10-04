<?php
  $nav_selected = "SETUP";
  $left_buttons = "NO";
  $left_selected = "";

  include("./nav.php");
  
 ?>
<html>
<body>
<form action="<?php
  $sql = "INSERT INTO preferences (preference,value) VALUES('min_date', x );";
  ?>" method="get">
  <h3>Date Range</h3>
  <p>from:</p>
  <input type="text" id="min_date" value="">
  <p>to:</p>
  <input type="text" id="max_date" value="">
  <h3>Release Status</h3>
  <input type="text" id="release_status" value="">
  <h3>Release Type</h3>
  <input type="text" id="release_type" value=""><br>
  <br>
  <input type="Submit" value="Apply Settings">

</form>


</body>
</html>
 <div class="right-content">
    <div class="container">

      <h3 style = "color: #01B0F1;">Setup (TO BE DONE LATER)</h3>

    </div>
</div>

<?php include("./footer.php"); ?>
