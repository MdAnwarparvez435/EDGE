<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Management System - Contact Us</title>
    <link rel="stylesheet" href="contactus.css">
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

<section class="contact-us">
    <h2>Contact Us</h2>
    <p>If you have any questions or need assistance, feel free to reach out to us using the form below.</p>
    <form action="#" method="post">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Your Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
    </form>
</section>

<footer>
    <p>&copy; 2024 Developed by Md. Anwar Parvez</p>
</footer>

</body>
</html>
