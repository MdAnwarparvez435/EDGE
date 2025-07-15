<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Management System - Account Opening</title>
    <link rel="stylesheet" href="accountopening.css">
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
<section class="account-opening">
    <h2>Open a New Account</h2>
    <form action="#" method="post">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="nid">NID Number:</label>
        <input type="text" id="nid" name="nid" required>

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" required></textarea>

        <button type="submit">Submit</button>
    </form>
</section>

<footer>
    <p>&copy; 2024 Developed by Md. Anwar Parvez</p>
</footer>

</body>
</html>
