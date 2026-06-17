<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "market_db"
);

if(!$conn){
    die("Database Connection Failed");
}

?>