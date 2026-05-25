<?php
require 'db.php';
require 'User.php';

// Connection
$database = new Database();
$db = $database->getConnection();

// Create a user
$user = new User($db);
$user->name = "Alice";
$user->email = "alice@test.com";
$user->create();

// Read users
$list = $user->read();
foreach ($list as $u) {
    echo $u['name'] . " - " . $u['email'] . "<br>";
}