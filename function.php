<?php
session_start();
$con = mysqli_connect('localhost','root','','myschool') or die ("Try Again");

function insert($table,$data){
    global $con;
    $col = implode(",",array_keys($data));
    $rows = implode("','",array_values($data));
    
   return $query = mysqli_query($con,"insert into $table($col) value ('$rows')");
}

function check($table,$cond){
    global $con;
    $query = mysqli_query($con,"select * from $table where $cond");
    $count = mysqli_num_rows($query);
    if($count == 1){
        echo "Worng Data";
    }
}

function viewProfile($table,$cond){
    global $con;
    $query = mysqli_query($con,"select * from $table where $cond");
    $count = mysqli_fetch_array($query);
    return $count;
}

//calling data as array from mysqli database
function calling($table,$order_by){
    
    global $con;
    $dabba = [];
    $query = mysqli_query($connect,"select * from $table $order_by");
    while($glass = mysqli_fetch_array($query)){
        $dabba [] = $glass;
    }
    return $dabba;
}
?>