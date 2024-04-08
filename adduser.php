<?php include 'header.php'; ?>
<?php include 'conn.php'; ?>

<nav>
    <div class="container">
        <h2>Add User</h2>
        <a href="index.php">Back to User List</a>
    </div>
</nav>

<div class="container">
    <form action="index.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="type">Type:</label><br>
        <input type="text" id="type" name="type" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="classes">Classes:</label><br>
        <input type="text" id="classes" name="classes" required><br>
        <br>
        <input type="submit" value="Add User">
    </form>
</div>
<?php include 'footer.php'; ?>