<?php
include('config/dbcon.php');
function getAllActive($table)
{
    global $con;
    $query = "SELECT * FROM $table ";
    return $query_run = mysqli_query($con, $query);
}
function getAllCategories() {
    global $con;
    $query = "SELECT * FROM categories";
    $result = mysqli_query($con, $query);
    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $categories;
}
?>