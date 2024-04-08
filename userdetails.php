<?php include 'header.php'; ?>
<?php include 'conn.php'; ?>

<nav>
    <div class="container">
        <a href="index.php">Back to User List</a>
        <a href="adduser.php">Add User</a>
    </div>
</nav>

<div class="container">
    <?php
    if (isset($_GET['name'])) {
        $name = urldecode($_GET['name']);
        $users = readUsers();
        foreach ($users as $user) {
            if ($user['name'] === $name) {
                echo '<h2>User Details</h2>';
                echo '<p>Name: ' . $user['name'] . '</p>';
                echo '<p>Type: ' . $user['type'] . '</p>';
                echo '<p>Email: ' . $user['email'] . '</p>';
                echo '<p>Classes: ' . implode(', ', $user['classes']) . '</p>';
                break;
            }
        }
    } else {
        echo '<p>User not found.</p>';
    }
    ?>
</div>
<?php include 'footer.php'; ?>