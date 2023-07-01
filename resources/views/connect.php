<?php 
$server="localhost";
$username="root";
$password="";

$connect_db = mysqli_connect($server,$username,$password);

// check database connections
if(!$connect_db){
    die('connection failed with database due to'.mysqli_connect_error());
}
else{

    echo "<h1>success to db</h1>";
}

$sql_insert = "INSERT INTO `doctors`.`details` ( `name`, `type`, `bio`) VALUES ('tuhin', 'cardiologist', 'jakslfksdffksflkjfkjffasdfasdfasdfasdfasfsadfasd');";

if($connect_db -> query($sql_insert) == true){
    echo $sql_insert;
}
else{
    echo "something went wrong $connect_db->error";
}
$connect_db->close();
?>