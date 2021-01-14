<?php

$serverName = "MSI"; //serverName\instanceName

// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.
$connectionInfo = array( "Database"=>"Projekti");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
    //	echo "Connection established.<br />";
}else{
    // print_r( sqlsrv_errors(), true));
}

?>