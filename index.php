<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h2>User Registration</h2>
        <form action="submit.php" method="POST">
            <label for="fullname">Full Name:</label>
            <input type="text" name="fullname" maxlength="40" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="username">Username (string followed by number):</label>
            <input type="text" name="username" required>

            <label for="password">Password (min 9 characters):</label>
            <input type="password" name="password" required>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
