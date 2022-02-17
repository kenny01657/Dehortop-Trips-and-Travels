<?php 
include_once("Database/db.php");
include_once("functions.php");
if(!isset($conn)) {
    $conn = new db();
    $conn->connect();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600;700;800;900&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <title>Dehort Trips an Travels</title>
</head>

<body>
    <div class="container">
        <header class="header">
            <div class="logo">Dehort reizen</div>
            <nav class="nav">
                <a href="index.php" class="nav-link">Home</a>
                <a href="bestemmingOverzicht.php" class="nav-link">Bestemmingen</a>
                <a href="#" class="nav-link">Reizen</a>
                <a href="#" class="nav-link">Registreer</a>
                <a href="#" class="nav-link">Inloggen</a>
            </nav>
        </header>