<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Services</title>
</head>
<body>
    <h1>Our Services</h1>

    <button onclick="showInfo()">Show More Info</button>
    <p id="extraContent">Click the button to see more information about our services.</p>

    <button onclick="goHome()">Back to Home</button>

    <script>
        function showInfo() {
            document.getElementById("extraContent").innerHTML = "This is additional information about our services.";
        }

        function goHome() {
            document.getElementById("extraContent").innerHTML = "Returning to home page...";
        }
    </script>
</body>
</html>
