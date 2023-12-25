<?php

include('config/dbcon.php');


function getAllTrend()
{
    global $con;
    $query = "SELECT * FROM products WHERE trending='1'";
    return $query_run = mysqli_query($con, $query);
}

?>
