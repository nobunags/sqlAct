<?php
// DB connection info
$host = "tcp:z9wkanxj2d.database.windows.net,1433";
$user = "joseph@z9wkanxj2d";
$pwd = "ie804tmng3!";
$db = "register";
try{
    $conn = new PDO( "sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = "CREATE TABLE register_tbl(
    id INT NOT NULL IDENTITY(1,1) 
    PRIMARY KEY(id),
    name VARCHAR(30),
    email VARCHAR(30),
    date DATE)";
    $conn->query($sql);
}
catch(Exception $e){
    die(print_r($e));
}
echo "<h3>Table created.</h3>";
?>