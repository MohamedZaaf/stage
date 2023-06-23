<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once 'db_connection.php';

    // Prepare the query
    $sql = "SELECT * FROM person WHERE username = ? AND password = ?";
    $params = array($username, $password);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    // Check if a matching user was found
    if (sqlsrv_fetch($stmt) === true) {
        // Authentication successful
        header("Location: index.php");
    exit();
    } else {
        // Authentication failed
        echo "Invalid username or password";
        
    }

    // Close the statement and connection
    sqlsrv_free_stmt($stmt);
    sqlsrv_close($conn);

    

?>

