<?php
define('HOST','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DATABASE','php_validation');

// Create connection
$con = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>