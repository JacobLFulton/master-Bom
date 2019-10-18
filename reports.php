<?php
  $nav_selected = "REPORTS";
  $left_buttons = "NO";
  $left_selected = "";

  include("./nav.php");

  /*
  Application Report based on the Status (app_status report)
  Component Report based on the Status (cmp_status report)
  Request Report based on the Status (request_status report)
  Request Step Report based on the Step (request_step report)
  */
  $appStatus = array();
  $cmpStatus = array();
  $requestStatus = array();
  $requestStep = array();
  
  $sql = "SELECT * from sbom;";
  $result = $db->query($sql);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      
    }
  }
?>

<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(
        function(){
          drawChartOne();
          drawChartTwo();
          drawChartThree();
          drawChartFour();
        }
      );
      
      //Chart one code.
      function drawChartOne() {

        var dataSetOne = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var optionsSetOne = {
          title: 'Application Report'
        };

        var chartOne = new google.visualization.PieChart(document.getElementById('piechartOne'));

        chartOne.draw(dataSetOne, optionsSetOne);
      }

      //Chart two code.
      function drawChartTwo() {

        var dataSetTwo = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var optionsSetTwo = {
          title: 'Component Report'
        };

        var chartTwo = new google.visualization.PieChart(document.getElementById('piechartTwo'));

        chartTwo.draw(dataSetTwo, optionsSetTwo);
      }

        //Chart three code.
      function drawChartThree() {

        var dataSetThree = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var optionsSetThree = {
          title: 'Request Report'
        };

        var chartThree = new google.visualization.PieChart(document.getElementById('piechartThree'));

        chartThree.draw(dataSetThree, optionsSetThree);
      }

      //Chart four code.
      function drawChartFour() {

        var dataSetFour = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var optionsSetFour = {
          title: 'Request Step Report'
        };

        var chartFour = new google.visualization.PieChart(document.getElementById('piechartFour'));

        chartFour.draw(dataSetFour, optionsSetFour);
      }

    </script>
</head>

 <div class="right-content">
    <div class="container">
      <div  class="row">
        <div id="piechartOne" class="col-lg-6" style="width: 50%; height: 300px;"></div>
        <div id="piechartTwo" class="col-lg-6" style="width: 50%; height: 300px;"></div>
      </div>
      <div class="row">
        <div id="piechartThree" class="col-lg-6" style="width: 50%; height: 300px;"></div>
        <div id="piechartFour" class="col-lg-6" style="width: 50%; height: 300px;"></div>
      </div>
      <div class="row">
        <div id="tableData" class="col-lg-12">
          
        </div>
      </div>
      

    </div>
</div>

<?php include("./footer.php"); ?>
