<?php
// Retrieve the form data
$nom = $_POST['nom'];
$birthdate = $_POST['birthdate'];
$matricule = $_POST['matricule'];
$date_daumbauche = $_POST['date_daumbauche'];
$SF = $_POST['SF'];
$address = $_POST['adress'];
$type = $_POST['type'];
$prenom = $_POST['prenom'];
$voyage = $_POST['voyage'];
$session = $_POST['session'];

// Convert date values to the proper format
$birthdat = date('Y-m-d', strtotime($birthdate));
$date_daumbauch = date('Y-m-d', strtotime($date_daumbauche));
$convertedValue = null;

// Perform the conversion using a conditional statement for voyage
if ($voyage === "Turkey") {
    $convertedValue = 1;
} elseif ($voyage === "Spain") {
    $convertedValue = 2;
} elseif ($voyage === "Omra") {
    $convertedValue = 3;
}
// Perform the conversion using a conditional statement for session
if ($session === "from 20/07/2023 to 25/07/2023") {
    $session = 1;
} elseif ($session === "from 20/08/2023 to 25/08/2023") {
    $session = 2;
}

require_once 'db_connection.php';

$sql = "INSERT INTO person (non, prenon, date_naissence, matricule, date_dembauche, SF, adresse, type, id_voyage, id_session) 
        OUTPUT INSERTED.ID_persson -- Retrieve the inserted ID
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$params = array($nom, $prenom, $birthdat, $matricule, $date_daumbauch, $SF, $address, $type, $convertedValue, $session);
$stmt = sqlsrv_query($conn, $sql, $params);
$statut = "active";

if ($stmt === false) {
    echo "Error: " . print_r(sqlsrv_errors(), true);
} else {
    // Fetch the inserted ID
    if (sqlsrv_fetch($stmt) === false) {
        echo "Error: " . print_r(sqlsrv_errors(), true);
    } else {
        $id_person = sqlsrv_get_field($stmt, 0); // Get the value of the first column (index 0)

        // Prepare the SQL query to insert into the demende table
        $sql2 = "INSERT INTO demende (statut,id_persson, id_session, id_voyage) VALUES (?, ?, ?, ?)";

        $params2 = array($statut, $id_person, $session, $convertedValue);
        $stmt2 = sqlsrv_query($conn, $sql2, $params2);

        if ($stmt2 === false) {
            echo "Error: " . print_r(sqlsrv_errors(), true);
        } else {
            echo "Data inserted successfully";
        }
    }
}

sqlsrv_close($conn);
?>
