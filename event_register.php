<?php
    session_start();
    include 'connect.php';
    if(isset($_POST['submit']))
    {
        $query="INSERT INTO `events` (name,description,date,organizer,type,location,seating) VALUES ('".$_POST['name']."','".$_POST['description']."','".$_POST['datetime']."','".$_SESSION['username']."','".$_POST['type']."','".$_POST['location']."',".$_POST['seating'].")";
        mysqli_query($conn,$query);
    }


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Event Registration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div>
        <form method="post" action="event_register.php">
                    <input name="name"/>
        <textarea name="description"></textarea>
        <input type="datetime-local" name="datetime"/>
        <select name="type">
            <option value="virtual">Virtual</option>
            <option value="offline">Offline</option>
        </select>
        <input type="text" name="location"/>
        <input name="seating"/>
        <input type="submit" name="submit" value="Add Event"/>
        </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>