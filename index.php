<!DOCTYPE html>
<html>

<head>
    <title>Hotel Booking</title>

    <style>
    body{
        font-family: Arial;
        padding: 40px;
    }

    input,button{
        padding:10px;
        margin:10px;
    }
    </style>

</head>

<body>

<h1>Hotel Booking Form</h1>

<form action="save.php" method="POST">

    Name:
    <input type="text" name="name"><br><br>

    Room Type:
    <input type="text" name="room"><br><br>

    Check In:
    <input type="date" name="checkin"><br><br>

    <button type="submit">
        Book Now
    </button>

</form>

</body>
</html>