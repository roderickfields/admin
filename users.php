<?php
include 'conn.php';

// Function to read users from JSON file
function readUsers() {
    $usersJson = file_get_contents('users.json');
    return json_decode($usersJson, true);
}

// Function to write users to JSON file
function writeUsers($users) {
    file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));
}

// Add user
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $users = readUsers();
    $newUser = array(
        'name' => $_POST['name'],
        'type' => $_POST['type'],
        'email' => $_POST['email'],
        'classes' => explode(',', $_POST['classes'])
    );
    $users[] = $newUser;
    writeUsers($users);
}

// Display users
$users = readUsers();
echo '<h2>Users</h2>';
echo '<ul>';
foreach ($users as $user) {
    echo '<li>';
    echo 'Name: ' . $user['name'] . ', Type: ' . $user['type'] . ', Email: ' . $user['email'] . ', Classes: ' . implode(',', $user['classes']);
    echo '</li>';
}
echo '</ul>';
?>

<a href="index.php">Back to Admin Page</a>
