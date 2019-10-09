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
          <span class="indenter" style="padding-left: 0px;">
            <a href="#" title="Expand">&nbsp;</a>
          </span>  
          <td>Parent</td>
        </tr>
        <tr data-tt-id="2" data-tt-parent-id="1">
          <td>Child</td>
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


