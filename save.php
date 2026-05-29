<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "hotel_db"
);

$name = $_POST['name'];
$room = $_POST['room'];
$checkin = $_POST['checkin'];

$sql = "INSERT INTO bookings
(name, room_type, check_in)
VALUES
('$name','$room','$checkin')";

if(mysqli_query($conn,$sql)){
    echo "Booking Saved";
}else{
    echo "Error";
}

?>