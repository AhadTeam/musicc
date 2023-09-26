<?php
$servername = "localhost";
$username = "root";
$password = "6122002";
$database_name = "music";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database_name", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Log successful database connection
    $logMessage = date("Y-m-d H:i:s") . " - Database connection established.\n";
    file_put_contents('db_log.txt', $logMessage, FILE_APPEND);
} catch (PDOException $e) {
    //echo "Connection failed: " . $e->getMessage();
 // Handle database connection errors
    $errorMessage = "Database Connection Error: " . $e->getMessage() . "\n";

    // Log the error
    $logMessage = date("Y-m-d H:i:s") . " - $errorMessage";
    file_put_contents('db_log.txt', $logMessage, FILE_APPEND);
    die("Database Connection Error: " . $e->getMessage());
}
?>
