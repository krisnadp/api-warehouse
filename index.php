<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "YukCetak-warehouse";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset('utf8');

    $sql = "select * from bahan_baku";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($rows);
    } else {
        echo "no results found";
    }
?>
