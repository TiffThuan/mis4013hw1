<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Our Website</title>
</head>
<body>

<!-- Navigation -->
<nav>
    <a href="index.php">Home</a> |
    <a href="about.php">About Us</a> |
    <a href="services.php">Services</a> |
    <a href="contact.php">Contact</a> |
    <a href="stakeholder.php">Stakeholders</a>
</nav>

<!-- Hero Section -->
<h1>Welcome to Our Website</h1>
<p>We offer the greatest Vietnamese coffee leading in the USA.</p>
<button onclick="showMessage()">Learn More About Us</button>

<!-- Additional message section -->
<p id="demo"></p> <!-- Element to update -->

<!-- Services Section -->
<h2>Our Services</h2>
<div>
    <h4>Service 1</h4>
    <p>Great quality and fast delivery</p>
</div>
<div>
    <h4>Service 2</h4>
    <p>Reliable, trustworthy, and innovative.</p>
</div>
<div>
    <h4>Service 3</h4>
    <p>Our 24/7 expertise.</p>
</div>

<!-- Why Choose Us Section -->
<h2>Why Choose Us?</h2>
<div>
    <h4>Experience</h4>
    <p>Over 20 years of instant and roasted coffee.</p>
</div>
<div>
    <h4>Quality</h4>
    <p>Uniqueness with affordable price.</p>
</div>
<div>
    <h4>Commitment</h4>
    <p>Your satisfaction is our priority.</p>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Our Website | All rights reserved.</p>
</footer>

<script>
    function showMessage() {
        // This function shows a popup message
        alert("Find out more about us on our About page!");
        
        // This line updates the 'demo' element with new content
        document.getElementById("demo").innerHTML = "Welcome to our services.";
    }
</script>

</body>
</html>
