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
      <table id="sbomTable">
      <?php
      /*
      $appArray = array();
      
      $sql =  "SELECT app_id,app_name,app_version FROM sbom ORDER BY app_name,app_version ASC;";
      $result = $db->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
          if(!in_array($row["app_id"],$appArray)){
            $appArray[] = $row["app_id"];
          }  
        }    
      }

      $result->close();

      foreach($appArray as $app){
        $sql = "SELECT * FROM sbom WHERE app_id = '".$app."' ORDER BY cmp_name ASC;";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
          for($i = 0; $i < $result->num_rows; $i++){
            $row = $result->fetch_assoc();
            if($i == 0){
              echo '<tr data-tt-id="'.$row["app_id"].'">
                <td>'.$row["app_name"].' '.$row["app_version"].'</td>
                </tr>';
            }
            echo'<tr data-tt-id="'.$row["cmp_name"].'" data-tt-parent-id="'.$row["app_id"].'">
                <td>'.$row["cmp_name"].' '.$row["cmp_version"].'</td>
                </tr>';
          }
        }
      }
      
      $result->close();
      */
      
      $sql =  "SELECT app_id,app_name,app_version,cmp_id,cmp_name,cmp_version FROM sbom ORDER BY app_id,app_name,app_version,cmp_id,cmp_name,cmp_version ASC;";
      //$sql =  "SELECT * FROM sbom ORDER BY row_id ASC;";
          $result = $db->query($sql);

          if ($result->num_rows > 0) {
          // output data of each row
              while($row = $result->fetch_assoc()) {
                  if($pid != $row["app_id"]){
                    echo '<tr data-tt-id="'.$row["app_id"].'">
                            <td>'.$row["app_name"].' '.$row["app_version"].'</td>
                          </tr>';       
                  $pid = $row["app_id"];
                }
                
                echo'<tr data-tt-id="'.$row["cmp_name"].'" data-tt-parent-id="'.$row["app_id"].'">
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
$("#sbomTable").treetable({expandable: true});
</script>

<?php include("./footer.php"); ?>


