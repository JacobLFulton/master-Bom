<?php
  $nav_selected = "SCANNER";
  $left_buttons = "YES";
  $left_selected = "SBOMTREE";

  include("./nav.php");
  
 ?>

 <script src="https://cdnjs.com/libraries/jquery-treetable"></script>

 <div class="right-content">
    <div class="container">

      <h3 style = "color: #01B0F1;">Scanner --> BOM Tree</h3>

      <table>
        <tr data-tt-id="1">
          <td>Parent</td>
        </tr>
        <tr data-tt-id="2" data-tt-parent-id="1">
          <td>Child</td>
        </tr>
      </table>

    </div>
</div>

<?php include("./footer.php"); ?>


