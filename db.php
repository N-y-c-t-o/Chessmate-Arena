<?php
    $db_server="localhost";
    $db_user="root";
    $db_password="";
    $db_name="chess_ai";
    $conn="";
    try{
        $conn=mysqli_connect($db_server,$db_user,$db_password,$db_name);
    }catch(mysqli_sql_exception){
        echo "Could Not Connect!!";
    }
    
?>