<?php
  $nav_selected = "SCANNER";
  $left_buttons = "YES";
  $left_selected = "SBOMTREE";
  global $db;
  global $pid;
  include("./nav.php");
  
 ?>
 <div class="right-content">
    <div class="container">

      <h3 style = "color: #01B0F1;">Scanner --> BOM Tree</h3>
      <table id="testTable">
      <?php
      $sql =  "SELECT * FROM sbom ORDER BY row_id ASC;";
          $result = $db->query($sql);

          if ($result->num_rows > 0) {
          // output data of each row
              while($row = $result->fetch_assoc()) {
                  if($pid != $row["app_id"] && $row["app_name"] != "DB_Layer"){
                    echo '<tr data-tt-id="'.$row["app_id"].'">
                            <td>'.$row["app_name"].' '.$row["app_version"].'</td>
                          </tr>';       
                  $pid = $row["app_id"];
                }
                    echo'<tr data-tt-id="'.$row["cmp_id"].'" data-tt-parent-id="'.$row["app_id"].'">
                          <td>'.$row["cmp_name"].' '.$row["cmp_version"].'</td>
                         </tr>';
                  
              }//end while
          }//end if
          else {
              echo "0 results";
          }//end else

       $result->close();
      ?>
      

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


