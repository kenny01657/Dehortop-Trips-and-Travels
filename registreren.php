<?php include_once("header/header.php") ?>

<h2>Registreren</h2>

<form action="" method="post" class="register-form">
    <div class="form-item">
        <label for="voorletters">Voorletters: </label>
        <input type="text" name="voorletters">
    </div>
    <div class="form-item">
        <label for="voorvoegsel">Voorvoegsel: </label>
        <input type="text" name="voorvoegsel">
    </div>
    <div class="form-item">
        <label for="achternaam">Achternaam: </label>
        <input type="text" name="achternaam">
    </div>
    <div class="form-item">
        <label for="adres">Adres: </label>
        <input type="text" name="adres">
    </div>
    <div class="form-item">
        <label for="postcode">Postcode: </label>
        <input type="text" name="postcode">
    </div>
    <div class="form-item">
        <label for="plaats">Plaats: </label>
        <input type="text" name="plaats">
    </div>
    <div class="form-item">
        <label for="telefoonnummer">Telefoonnummer: </label>
        <input type="text" name="telefoonnummer">
    </div>
    <div class="form-item">
        <input type="submit" name="submit">
    </div>
</form>

<?php 

if(isset($_POST['submit'])) {
    $voorletters = $_POST['voorletters'];
    $voorvoegsel = $_POST['voorvoegsel'];
    $achternaam = $_POST['achternaam'];
    $adres = $_POST['adres'];
    $postcode = $_POST['postcode'];
    $plaats = $_POST['plaats'];
    $telefoonnummer = $_POST['telefoonnummer'];
    
    $conn->insert("INSERT INTO klanten (Voorletters, Voorvoegsel, Naam, Adres, Postcode, Plaats, Telefoonnummer) VALUES ('$voorletters', '$voorvoegsel', '$achternaam', '$adres', '$postcode', '$plaats', '$telefoonnummer')");
}

?>

<?php include_once("footer/footer.php") ?>