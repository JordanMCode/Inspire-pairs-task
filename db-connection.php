<?php

try{
    $db = new PDO("mysql:host=localhost;dbname=inspire-pairedproject", "root", "");
} catch (Exception $e){
    echo $e->getMessage();
}

?>