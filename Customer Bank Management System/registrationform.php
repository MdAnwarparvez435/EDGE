<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Bank Management System</title>
    <link rel="stylesheet" href="registrationform.css">
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
    <!-- Signup Form Section -->
    <center>
        <div class="signup-container">
          <h2>Registration Form</h2>
          <form action="#" method="POST" class="signup-form">
             <!-- Name Input -->
              <div class="input-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required placeholder="Enter your full name">
              </div>
             <!-- Email Input -->
               <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email">
               </div>
               <!-- Phone Number Input -->
              <div class="input-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required placeholder="Enter your phone number">
              </div>
              <!-- Address Input -->
              <div class="input-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" required placeholder="Enter your address"></textarea>
              </div>
              <!-- Password Input -->
              <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required placeholder="Enter your password">
            </div>
              <!-- Signup Button -->
             <button type="submit">Sign-up</button>
             <!-- Login Link -->
             <p>Already have an account? <a href="loginpage.php">Login</a></p>
            </form>
        </div>
     </center>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Developed by Md. Anwar Parvez</p>
    </footer>
</body>
</html>
