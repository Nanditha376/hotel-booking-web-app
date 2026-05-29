<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "hotel_db"
);

if(!$conn){
    die("Connection failed");
}

echo "Database Connected";

?>