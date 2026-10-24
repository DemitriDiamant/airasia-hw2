
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift Cards - AirAsia Rewards</title>
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
        <h2>Available Gift Cards</h2>
        <p>Choose a gift card to redeem your rewards points.</p>

        <a href="card-add.php" class="button">+ Add Gift Card</a>

        <section class="card-grid">

            <article class="gift-card">
                <a href="card-details.php">
                    <img src="images/gift-card.png"
                         alt="AirAsia Gift Card">
                    <h3>AirAsia Travel Gift Card</h3>
                </a>
                <p>Points Required: 5,000</p>
            </article>

            <article class="gift-card">
                <a href="card-details.php">
                    <img src="images/gift-card.png"
                         alt="Shopping Gift Card">
                    <h3>Shopping Gift Card</h3>
                </a>
                <p>Points Required: 3,000</p>
            </article>

            <article class="gift-card">
                <a href="card-details.php">
                    <img src="images/gift-card.png"
                         alt="Dining Gift Card">
                    <h3>Dining Gift Card</h3>
                </a>
                <p>Points Required: 2,500</p>
            </article>

        </section>

    </main>

    <footer>
        <p>&copy; 2026 AirAsia Rewards</p>
    </footer>

</body>
</html>
