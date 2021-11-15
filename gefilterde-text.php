


<?php
include_once 'config/database.php';
// include_once 'product/read_all.php';
// include_once 'objects/scheldworden.php';
    $array = array();
    $query  = "SELECT * FROM `scheldworden` WHERE goedgekeurd = 0";
    $result = mysqli_query($con, $query);
    while($scheldwoorden = $result->fetch_assoc()) {
        array_push($array, $scheldwoorden["woord"]);
    }

    $scheldwoorden = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($con);
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$raw_text = 'jij bent een stomme pannekoek kanker jong ik haat jou met je kut kop ik hoop dat je dood gaat';

$bad_words  = $array;
replace_bad_words($raw_text, $bad_words);
// function replace_words($matches){
//     global $good_words;
//     return $matches[1].$good_words[rand(0, count($good_words)-1)].$matches[3];
// }


function replace_bad_words($raw_text, $bad_words) {
    // die("kroket");
    $filtered_text = str_replace($bad_words, "****", $raw_text);
    echo $filtered_text;

    return $filtered_text;
    
} 

?>
