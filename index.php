<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <a href="index.php">Home</a> |
        <a href="contact.php">Contact</a> |
        <a href="about.php">About Us</a> |
        <a href="services.php">Services</a> |
        <a href="stakeholder.php">Stakeholders</a>
    </nav>
    <hr>

    <h1>Welcome to the Home Page</h1>

    <!-- Scroll-to-Top Button -->
    <button id="scrollTopBtn" onclick="scrollToTop()" style="display:none;position:fixed;bottom:20px;right:20px;">Top</button>

    <script>
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        document.getElementById("scrollTopBtn").style.display = (document.documentElement.scrollTop > 20) ? "block" : "none";
    }
    function scrollToTop() {
        document.documentElement.scrollTop = 0;
    }
    </script>
</body>
</html>
