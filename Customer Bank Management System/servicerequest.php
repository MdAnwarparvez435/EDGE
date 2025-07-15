<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Management System - Service Request</title>
    <link rel="stylesheet" href="servicerequest.css">
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

<section class="service-request">
    <h2>Service Request</h2>
    <form action="#" method="post">
        <label for="request-id">Request ID:</label>
        <input type="text" id="request-id" name="request-id" required>

        <label for="request-type">Request Type:</label>
        <select id="request-type" name="request-type" required>
            <option value="account-opening">Account Opening</option>
            <option value="loan-application">Loan Application</option>
            <option value="transaction-issue">Transaction Issue</option>
            <option value="other">Other</option>
        </select>

        <label for="request-date">Request Date:</label>
        <input type="date" id="request-date" name="request-date" required>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="pending">Pending</option>
            <option value="in-progress">In Progress</option>
            <option value="resolved">Resolved</option>
        </select>

        <button type="submit">Submit</button>
    </form>
</section>

<footer>
    <p>&copy; 2024 Developed by Md. Anwar Parvez</p>
</footer>

</body>
</html>
