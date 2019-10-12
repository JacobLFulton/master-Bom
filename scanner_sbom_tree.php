<?php
  $nav_selected = "SCANNER";
  $left_buttons = "YES";
  $left_selected = "SBOMTREE";

  include("./nav.php");
  
 ?>
 <div class="right-content">
    <div class="container">

      <h3 style = "color: #01B0F1;">Scanner --> BOM Tree</h3>

      <table id="testTable">
        <tr data-tt-id="1">
          <td>Quiz Master</td>
        </tr>
        <tr data-tt-id="2" data-tt-parent-id="1">
          <td>1.1</td>
        </tr>
        <tr data-tt-id="3" data-tt-parent-id="2">
          <td>Jquery</td>
        </tr>
        <tr data-tt-id="4" data-tt-parent-id="3">
          <td>4.3</td>
        </tr>
        <tr data-tt-id="5" data-tt-parent-id="1">
          <td>2.2</td>
        </tr>
      </table>

    </div>
</div>

<link href="./jquery.treetable.css" rel="stylesheet" type="text/css" />
<link href="./jquery.treetable.theme.default.css" rel="stylesheet" type="text/css" />
<script src="./jquery.treetable.js"></script>

<script>
$("#testTable").treetable({expandable: true});
</script>

<?php include("./footer.php"); ?>


