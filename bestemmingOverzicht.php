<?php include_once("header/header.php");?>
<?php 

$orderBy = "";
if(isset($_POST["code"])){
    $orderBy = " ORDER BY bestemmingcode";
} else if(isset($_POST["plaats"])) {
    $orderBy = " ORDER BY Plaats";
} else if(isset($_POST["land"])) {
    $orderBy = " ORDER BY Land";
} else if(isset($_POST["werelddeel"])) {
    $orderBy = " ORDER BY Werelddeel";
}

// Get the data from the datavbase
$dbData = $conn->retrieve("SELECT * FROM bestemmingen" . $orderBy);

// Put all the data in an array
foreach($dbData as $obj) {
    $var[] = objToString($obj);
}

displayDestinations($var);

?>
<?php include_once("footer/footer.php");?>