<?php include_once("header/header.php");?>
<?php 

// Get the data from the datavbase
$dbData = $conn->getData("SELECT * FROM bestemmingen");

// Put all the data in an array
foreach($dbData as $obj) {
    $var[] = objToString($obj);
}

displayDestinations($var);


?>
<?php include_once("footer/footer.php");?>