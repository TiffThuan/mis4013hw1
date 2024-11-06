<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
</head>
<body>
    <h1>About Us</h1>
    <button onclick="showAlert()">Show Welcome Alert</button>

    <script>
    function showAlert() {
        alert("Welcome to the About Us page!");
    }

    function goBackHome() {
        window.location.href = "index.php"; // Redirects to the homepage
    }
    </script>

    <!-- Back to Home button -->
    <button onclick="goBackHome()">Back to Home</button>

</body>
</html>
