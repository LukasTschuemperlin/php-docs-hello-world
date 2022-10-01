<?php


// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "CloudSA35e4d3de", "pwd" => "VK2FcjiLcYhXG5j", "Database" => "testdb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:txl.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if( $conn ) {
    echo "Connection established.<br />";
}else{
    echo "Connection could not be established.<br />";
    die( print_r( sqlsrv_errors(), true));
}


echo "Hello World neu!";
