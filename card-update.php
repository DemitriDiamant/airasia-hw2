
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Gift Card - AirAsia Rewards</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <header>
        <h1>AirAsia Rewards Redemption System</h1>
        <nav>
            <a href="card-list.php">Gift Cards</a>
            <a href="login.php">Logout</a>
        </nav>
    </header>

    <main class="container">
        <h2>Update Gift Card</h2>
        <p>Edit the gift card information below.</p>

        <form action="card-list.php" method="get" class="card-form">

            <label for="card-name">Card Name:</label>
            <input type="text" id="card-name"
                   name="card-name"
                   value="AirAsia Travel Gift Card" required>

            <label for="card-type">Card Type:</label>
            <select id="card-type" name="card-type" required>
                <option value="Travel" selected>Travel</option>
                <option value="Shopping">Shopping</option>
                <option value="Dining">Dining</option>
                <option value="Entertainment">Entertainment</option>
            </select>

            <label for="card-value">Card Value ($):</label>
            <input type="number" id="card-value"
                   name="card-value"
                   value="50.00" min="1" step="0.01" required>

            <label for="points-required">Points Required:</label>
            <input type="number" id="points-required"
                   name="points-required"
                   value="5000" min="1" step="1" required>

            <button type="submit">Update Gift Card</button>

            <a href="card-details.php" class="back-link">
                Cancel
            </a>

        </form>
    </main>

    <footer>
        <p>&copy; 2026 AirAsia Rewards</p>
    </footer>

</body>
</html>
