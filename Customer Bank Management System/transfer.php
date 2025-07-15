<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Management System - Transfer</title>
    <link rel="stylesheet" href="transfer.css">
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

<section class="transfer">
    <h2>Transfer</h2>
    <form action="#" method="post">
        <label for="account-name">Account Name:</label>
        <input type="text" id="account-name" name="account-name" required>  
        
        <label for="account-number">Account Number:</label>
        <input type="text" id="account-number" name="account-number" required>

        <label for="bank-name">Bank Name:</label>
        <input type="text" id="bank-name" name="bank-name" required>

        <label for="bank-address">Bank Address:</label>
        <input type="text" id="bank-address" name="bank-address" required>

        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" step="0.01" required>

        <label for="transfer-date">Date:</label>
        <input type="date" id="transfer-date" name="transfer-date" required>

        <button type="submit">Transfer</button>
    </form>
</section>

<footer>
    <p>&copy; 2024 Developed by Md. Anwar Parvez</p>
</footer>

</body>
</html>
