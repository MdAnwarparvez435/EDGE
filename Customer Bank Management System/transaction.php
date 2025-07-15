<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Management System - Transaction</title>
    <link rel="stylesheet" href="transaction.css">
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

<section class="transaction">
    <h2>Transaction Details</h2>
    <form action="#" method="post">
        <label for="transaction-id">Transaction ID:</label>
        <input type="text" id="transaction-id" name="transaction-id" required>

        <label for="transaction-type">Transaction Type:</label>
        <select id="transaction-type" name="transaction-type" required>
            <option value="deposit">Deposit</option>
            <option value="withdrawal">Withdrawal</option>
            <option value="transfer">Transfer</option>
        </select>

        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" step="0.01" required>

        <label for="transaction-date">Date:</label>
        <input type="date" id="transaction-date" name="transaction-date" required>

        <button type="submit">Submit</button>
    </form>
</section>

<footer>
    <p>&copy; 2024 Developed by Md. Anwar Parvez</p>
</footer>

</body>
</html>
