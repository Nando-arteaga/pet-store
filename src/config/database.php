<?php
    $host       = "localhost";
    $port       = "5432";
    $dbname     = "petstore";
    $user       = "postgres";
    $password   = "postgres";

    $data_connection = "
        host=$host
        port=$port
        dbname=$dbname
        user=$user
        password=$password
    ";
    
    $conn = pg_connect($data_connection);

    if(!$conn){
        echo "Connection error";
    }else{
        echo "Success !!!";
    }

    //pg_close($conn);
?>