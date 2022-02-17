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
        <li class='destination-item'>
            <p><strong>Code</strong></p>
            <p><strong>Plaats</strong></p>
            <p><strong>Land</strong></p>
            <p><strong>werelddeel</strong></p>
        </li>
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