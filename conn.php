<?php
// Function to read users from JSON file
function readUsers() {
    $usersJson = file_get_contents('users.json');
    return json_decode($usersJson, true);
}

// Function to write users to JSON file
function writeUsers($users) {
    file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));
}
?>
