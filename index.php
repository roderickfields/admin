<?php include 'header.php'; ?>
<?php include 'conn.php'; ?>

<nav>
    <div class="container">
        <h2>Users</h2>
        <a href="adduser.php">Add User</a>
    </div>
</nav>

<div class="container">
    <ul>
        <?php
        $users = readUsers();
        foreach ($users as $user) {
            echo '<li><a href="userdetails.php?name=' . urlencode($user['name']) . '">' . $user['name'] . '</a></li>';
        }
        ?>
    </ul>
</div>
<?php include 'footer.php'; ?>