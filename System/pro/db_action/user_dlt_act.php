<?php
    require_once'../db_action/db_connection.php';

if($_POST) {
    $id = $_POST['id'];
    
    $sql= "Delete FROM user_tbl WHERE id = {$id}";
    
if($conn->query($sql)===TRUE)
{
    echo "<p>Records Successfully Deleted!<p>";
    //echo "<a href='../front/table.php'><button type='button'>View</button></a>";
    header("Location: ../front/table_user.php");
    exit();
} 
else
{
    echo "Error while deleting record : ".$sql.''.$conn->connect_error;  
}

$conn->close();    
    
}


?>