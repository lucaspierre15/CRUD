<?php

    include "db_conn.php";

    if(isset($_GET['ID'])){
        $ID = $_GET['ID'];
        
        $query = "DELETE FROM clientes WHERE ID = '$ID'";
    }

    $result = mysqli_query($conn, $query);

    if(!$result){
        die("query failed" . mysqli_error($conn));
    }
    else{
     header('location:select.php?');
     exit;
    }

?>