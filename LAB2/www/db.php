<?php

try{
    $mysqli = new mysqli("localhost","root","test","myDB");
    echo "Connected !!!";
}
catch(Exception $e){
    echo $e->getMessage();
    echo "Error !!!";
}