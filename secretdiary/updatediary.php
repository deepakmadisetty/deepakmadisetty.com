<?php

    session_start();

    include("connection.php");

    $query = "UPDATE `users` SET diary='".mysqli_real_escape_string($conn, $_POST['diary'])."' WHERE id='".$_SESSION['id']."' LIMIT 1";

    mysqli_query($conn, $query);

?>

<form method="post">
    
    <input name="diary" />
    <input type="submit" />

</form>