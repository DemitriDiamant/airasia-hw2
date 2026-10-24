
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AirAsia Rewards</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <header>
        <h1>AirAsia Rewards Redemption System</h1>
    </header>

    <main class="login-container">
        <h2>Login</h2>
        <p>Welcome to AirAsia Rewards!</p>

        <form action="card-list.php" method="get">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2026 AirAsia Rewards</p>
    </footer>

</body>
</html>
