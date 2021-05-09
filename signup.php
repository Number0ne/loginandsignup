<?php
require "DataBase.php";
$db = new DataBase(); // a constructor of database and it will call the function login created in Database
if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['number']) && isset($_POST['genre']) && isset($_POST['loggedin']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        if ($db->signUp("users", $_POST['email'], $_POST['name'], $_POST['number'], $_POST['genre'], $_POST['loggedin'], $_POST['password'])) {
            echo "Sign Up Success";
        } else echo "Sign up Failed";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
