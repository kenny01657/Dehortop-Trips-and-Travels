<?php 

// turns objects into strings
function objToString($dbData) {
    $var = [];
    foreach($dbData as $item) {
        if(is_string($item)) {
            $var[] = $item . "</br>";
        } else {
            objToString($item);
        }
    }
    return $var;
}


// Display's all destinations
function displayDestinations($destinations) {
    echo "
    <div class='destinations'>
    <ul class='destination-list'>
        <form class='destination-item' action='' method='post'>
            <input class='order-btn' name='code' type='submit' value='Code'>
            <input class='order-btn' name='plaats' type='submit' value='Plaats'>
            <input class='order-btn' name='land' type='submit' value='Land'>
            <input class='order-btn' name='werelddeel' type='submit' value='Werelddeel'>
        </form>
    ";

    foreach($destinations as $var) {
    echo "
    <li class='destination-item'>
        <p>$var[0]</p>
        <p>$var[1]</p>
        <p>$var[2]</p>
        <p>$var[3]</p>
    </li>
    ";
    }

    echo "
    </ul>
    </div>
    ";
}

?>