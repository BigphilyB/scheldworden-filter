<?php
include_once 'config/database.php';
include_once 'product/read_all.php';

    $query  = "SELECT * FROM `scheldworden` WHERE id=$id";
    $result = mysqli_query($con, $query);
    $scheldwoord   = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($con);
   

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$input_string = 'This Could be interesting but should it be? Perhaps this \'would\' work; or couldn\'t it?';

$bad_words  = array( $scheldwoord['woord']);
$good_words = "*";
function replace_words($matches){
    global $good_words;
    return $matches[1].$good_words[rand(0, count($good_words)-1)].$matches[3];
}
echo preg_replace_callback('/(^|\b|\s)('.implode('|', $bad_words).')(\b|\s|$)/i', 'replace_words', $input_string);