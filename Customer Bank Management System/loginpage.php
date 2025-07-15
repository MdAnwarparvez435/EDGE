<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form - Bank Management System</title>
    <link rel="stylesheet" href="loginpage.css">
</head>
<body>
    <!-- Header Section with Navigation Links -->
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
<section class="background">
    <!-- Login Form Section -->
    <center><div class="login-container">
               <h2>Login</h2>
        <form action="#" method="POST" class="login-form">
            
            <!-- Email Input -->
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email">
            </div>
            <!-- Password Input -->
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required placeholder="Enter your password">
            </div>
            <!-- Submit Button -->
            <button type="submit">Login</button>
            <!-- Signup Link -->
            <p>Don't have an account? <a href="registrationform.php">Sign-up</a></p>
            
        </form>
        
    </div></center>
</section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Developed by Md. Anwar Parvez</p>
    </footer>
</body>
</html>






