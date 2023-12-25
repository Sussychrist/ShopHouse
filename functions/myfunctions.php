<?php

session_start();
include('../config/dbcon.php');

function getAll($table)
{
    global $con;
    $query = "SELECT * FROM $table";
    return $query_run = mysqli_query($con, $query);
}
function getId($table,$id)
{
    global $con;
    $query = "SELECT * FROM $table WHERE id ='$id'";
    return $query_run = mysqli_query($con, $query);
}
function getAllActive($table)
{
    global $con;
    $query = "SELECT * FROM $table WHERE status='0'";
    return $query_run = mysqli_query($con, $query);
}
function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location: '.$url);
    exit();
}
function getAllOrder()
{
    global $con;
    $query = "SELECT * FROM orders  WHERE status='0'";
    return $query_run = mysqli_query($con, $query);
}
function getOrderHistory()
{
    global $con;
    $query = "SELECT * FROM orders  WHERE status != '0'";
    return $query_run = mysqli_query($con, $query);
}
function getAllCategories() {
    global $con;
    $query = "SELECT * FROM categories";
    $result = mysqli_query($con, $query);
    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $categories;
}
function checkTrackingNoValid($trackingNo)
{
    global $con;
    $userId = $_SESSION['auth_user']['user_id'];

    $query = "SELECT*FROM orders WHERE tracking_no = '$trackingNo' AND user_id = '$userId'";
    return mysqli_query($con, $query);
}
?>
