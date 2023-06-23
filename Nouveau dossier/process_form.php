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
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Check if the password and confirm password match
if ($password !== $confirm_password) {
    echo "Error: Password and confirm password do not match.";
    exit();
}

// Convert date values to the proper format
$birthdat = date('Y-m-d', strtotime($birthdate));
$date_daumbauch = date('Y-m-d', strtotime($date_daumbauche));
$convertedValue = null;

require_once 'db_connection.php';

$sql = "INSERT INTO person (non, prenon, date_naissence, matricule, date_dembauche, SF, adresse, type, email, username, password) 
        OUTPUT INSERTED.ID_persson -- Retrieve the inserted ID
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$params = array($nom, $prenom, $birthdat, $matricule, $date_daumbauch, $SF, $address, $type, $email, $username, $password);
$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt === false) {
    echo "Error: " . print_r(sqlsrv_errors(), true);
} else {
    // Redirect the user to index.php
    header("Location: index.php");
    exit();
}

sqlsrv_close($conn);
// Redirect the user to the same page with the messages as query parameters
$redirectUrl = "index.html?messages=" . urlencode(json_encode($messages));
header("Location: " . $redirectUrl);
exit();
?>
