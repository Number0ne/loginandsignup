<?php
require "DataBase.php";
$db = new DataBase(); // a constructor of database and it will call the function login created in Database
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        if ($db->logIn("users", $_POST['username'], $_POST['password'])) {
            echo "Login Success";
        } else echo "Username or Password wrong";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
