<html>
<body>
<?php
    $min_date = $_GET["min_date"];
    $max_date = $_GET["max_date"];
    $status = $_GET["release_status"];
    $type = $_GET["release_type"];
    $sql1 = "INSERT INTO preferences (preference,value)
            VALUES ("start_date",min_date);";
    query($sql1)
?>
</html>
</body>