<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Management System - Deposit</title>
    <link rel="stylesheet" href="deposit.css">
</head>
<body>

<header>
    <h1>Bank Management System</h1>
    <nav>
        <a href="homepage.php">Home</a>
        <a href="contactus.php">Contact Us</a>
        <a href="aboutus.php">About Us</a>
        <a href="loginpage.php">Login</a>
        <a href="registrationform.php">Sign-Up</a>
        <a href="dashboard.php">Dashboard</a>
    </nav>
</header>

<section class="deposit">
    <h2>Deposit</h2>
    <form action="#" method="post">
        <label for="account-number">Account Number:</label>
        <input type="text" id="account-number" name="account-number" required>

        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" step="0.01" required>

        <label for="deposit-date">Date:</label>
        <input type="date" id="deposit-date" name="deposit-date" required>

        <button type="submit">Deposit</button>
    </form>
</section>

<footer>
    <p>&copy; 2024 Developed by Md. Anwar Parvez</p>
</footer>

</body>
</html>
