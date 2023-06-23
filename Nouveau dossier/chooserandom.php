<?php
require_once 'db_connection.php';

// Query to select two random winners
$sql = "SELECT TOP 2 d.*, p.non, p.prenon, p.date_naissence, p.matricule, p.SF, p.adresse, p.type
        FROM demende d
        INNER JOIN person p ON d.id_persson = p.ID_persson
        WHERE d.id_voyage = 1 AND d.id_session = 1
        ORDER BY NEWID()";

$stmt = sqlsrv_query($conn, $sql);

if ($stmt === false) {
    echo "Error: " . print_r(sqlsrv_errors(), true);
} else {
    echo "Winner for sission 1";
    echo "<br>";
    echo "<br>";


    // Fetch the winners' details
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $id_persson = $row['ID_persson'];
        $non = $row['non'];
        $prenon = $row['prenon'];
     
        // Display the winner's details
        echo "Winner ID: " . $id_persson . "<br>";
        echo "Winner Name: " . $non . " " . $prenon . "<br>" ;
        echo "<br>";
   
    }
}
$sql2 = "SELECT TOP 2 d.*, p.non, p.prenon, p.date_naissence, p.matricule, p.SF, p.adresse, p.type
        FROM demende d
        INNER JOIN person p ON d.id_persson = p.ID_persson
        WHERE d.id_voyage = 1 AND d.id_session = 2
        ORDER BY NEWID()";

$stmt2 = sqlsrv_query($conn, $sql2);

if ($stmt2 === false) {
    echo "Error: " . print_r(sqlsrv_errors(), true);
} else {
    echo "Winner for session 2";
    echo "<br>";
    echo "<br>";

    // Fetch the winners' details
    while ($row = sqlsrv_fetch_array($stmt2, SQLSRV_FETCH_ASSOC)) {
        $id_persson = $row['ID_persson'];
        $non = $row['non'];
        $prenon = $row['prenon'];
    
        
        // Display the winner's details
        echo "Winner ID: " . $id_persson . "<br>";
        echo "Winner Name: " . $non . " " . $prenon . "<br>" ;
        echo "<br>";
   
    }
}
// la liste en attente 
echo "en attente";
echo "<br>";
echo "<br>";

$sql3 = "SELECT TOP 2 d.*, p.non, p.prenon, p.date_naissence, p.matricule, p.SF, p.adresse, p.type
        FROM demende d
        INNER JOIN person p ON d.id_persson = p.ID_persson
        WHERE d.id_voyage = 1 AND d.id_session = 1
        ORDER BY NEWID()";

$stmt3 = sqlsrv_query($conn, $sql3);

if ($stmt3 === false) {
    echo "Error: " . print_r(sqlsrv_errors(), true);
} else {
    echo "Winner for sission 1";
    echo "<br>";
    echo "<br>";

    // Fetch the winners' details
    while ($row = sqlsrv_fetch_array($stmt3, SQLSRV_FETCH_ASSOC)) {
        $id_persson = $row['ID_persson'];
        $non = $row['non'];
        $prenon = $row['prenon'];
    
        
        // Display the winner's details
        echo "Winner ID: " . $id_persson . "<br>";
        echo "Winner Name: " . $non . " " . $prenon . "<br>" ;
        echo "<br>";
   
    }
}
$sql4 = "SELECT TOP 2 d.*, p.non, p.prenon, p.date_naissence, p.matricule, p.SF, p.adresse, p.type
        FROM demende d
        INNER JOIN person p ON d.id_persson = p.ID_persson
        WHERE d.id_voyage = 1 AND d.id_session = 2
        ORDER BY NEWID()";

$stmt4 = sqlsrv_query($conn, $sql4);

if ($stmt4 === false) {
    echo "Error: " . print_r(sqlsrv_errors(), true);
} else {
    echo "Winner for session 2";
    echo "<br>";
    echo "<br>";


    // Fetch the winners' details
    while ($row = sqlsrv_fetch_array($stmt4, SQLSRV_FETCH_ASSOC)) {
        $id_persson = $row['ID_persson'];
        $non = $row['non'];
        $prenon = $row['prenon'];
        
        // Display the winner's details
        echo "Winner ID: " . $id_persson . "<br>";
        echo "Winner Name: " . $non . " " . $prenon . "<br>" ;
        echo "<br>";
   
    }
}



sqlsrv_close($conn);
?>
