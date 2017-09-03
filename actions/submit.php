<?php
const DB_HOST = "192.168.99.100";
const DB_PORT = 3306;
const DB_USER = "zac_wedding";
const DB_PASS = "budgie";
const DB_DB = "wedding2018";
const DB_RSVP_TABLE = "RSVP";

$firstName = $_POST["first-name"];
$lastName = $_POST["last-name"];
$email = $_POST["email"];
$coming = isset($_POST["coming"]);

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DB, DB_PORT);
$statement = $connection->prepare("INSERT INTO RSVP(first_name, last_name, email, coming) VALUES(?, ?, ?, ?)");
$statement->bind_param("sssi", $firstName, $lastName, $email, intval($coming));
$statement->execute();
$statement->close();

header("Location: /index.php?responded=1#rsvp");