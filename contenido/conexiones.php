<?php

$user = "igoreslein";

$pass = "";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=appTodo', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
