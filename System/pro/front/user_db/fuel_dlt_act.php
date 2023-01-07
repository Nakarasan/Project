<?php
    require_once'../user_db/db_connection.php';

if($_POST) {
    $id = $_POST['id'];
    
    $sql= "Delete FROM fuel_tbl WHERE id = {$id}";
    
if($conn->query($sql)===TRUE)
{
    echo "<p>Records Successfully Deleted!<p>";
    
    header("Location: ../user/station_table_fue.php");
    exit();
    // echo "<a href='../front/table.php'><button type='button'>View</button></a>";
} 
else
{
    echo "Error while deleting record : ".$sql.''.$conn->connect_error;  
}

$conn->close();    
    
}


?>