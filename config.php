<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'rm-d9j597s5o40fhrxn066060.mysql.ap-southeast-5.rds.aliyuncs.com';
$databaseName = 'crud_db';
$databaseUsername = 'admin_halalpedia';
$databasePassword = 'Admin_123';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

?>