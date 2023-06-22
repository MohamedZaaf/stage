<?php
require_once 'db_connection.php';

$sql = "SELECT * FROM demende";

// Execute query
$result = sqlsrv_query($conn, $sql);

// Check if there are results
if ($result !== false) {
    // Generate HTML table structure
    echo "<table>";
    echo "<tr><th>ID demande</th><th>Statut</th><th>ID person</th><th>ID session</th><th>ID voyage</th></tr>";

    // Loop through the rows and construct the table rows
    while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["id_demende"] . "</td>";
        echo "<td>" . $row["statut"] . "</td>";
        echo "<td>" . $row["ID_persson"] . "</td>";
        echo "<td>" . $row["id_session"] . "</td>";
        echo "<td>" . $row["id_voyage"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}
?>
