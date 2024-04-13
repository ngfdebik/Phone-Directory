<?php

if (isset($_POST["btn"])) { 
    $res = json_decode(file_get_contents("dictionary.json"), true);
    
    unset($res[(int)$_POST["btn"]]);
    file_put_contents("dictionary.json", json_encode($res));
}