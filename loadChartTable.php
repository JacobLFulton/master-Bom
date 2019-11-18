<?php
    require_once('database.php');
  
    $db = db_connect();
    $errors = array();
    $config = array();

    $chart;
    $slice;

    if(isset($_POST["targetChart"])){
        $chart = $_POST["targetChart"];
    }
    
    if(isset($_POST["targetSliceName"])){
        $slice = $_POST["targetSliceName"];
    }
    
    $dbTableName = "sbom";

    // Populate table headers.
    $sql = "SHOW columns FROM " . $dbTableName . ";";
    $result = $db->query($sql);

    echo "<table id='info' class='table table-bordered table-hover'>";
    if($result->num_rows > 0){
        echo "<thead>";
        echo "<tr>";
        while($row = $result->fetch_assoc()){
            
            echo "<th scope='col'>" . $row['Field'] . "</th>";
            
        }
        echo "</tr>";
        echo "</thead>";
    }

    // Populate table body.
    if(isset($chart)) {
        $sql = "SELECT * FROM sbom WHERE " . $chart . " = '" . $slice . "';";
    } else {
        $sql = "SELECT * FROM sbom;";
    }
    $result = $db->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<tr scope='row'>";
            foreach($row as $rowItem){
                echo "<td>" . $rowItem . "</td>";
            }
            echo "</tr>";
        }
    }
    echo "</table>";
    
    mysqli_close($db);
?>

<script type="text/javascript" language="javascript">
    $(document).ready( function () {
        
        $('#info').DataTable( {
            dom: 'lfrtBip',
            buttons: [
                'copy', 'excel', 'csv', 'pdf'
            ] }
        );

        $('#info thead tr').clone(true).appendTo( '#info thead' );
        $('#info thead tr:eq(1) th').each( function (i) {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    
            $( 'input', this ).on( 'keyup change', function () {
                if ( table.column(i).search() !== this.value ) {
                    table
                        .column(i)
                        .search( this.value )
                        .draw();
                }
            } );
        } );
    
        var table = $('#info').DataTable( {
            orderCellsTop: true,
            fixedHeader: true,
            retrieve: true
        } );
        
    } );

</script>