<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Services</title>
</head>
<body>
    <h1>Our Services</h1>
    <button onclick="toggleContent()">Show More Info</button>
    <p id="extraContent" style="display:none;">This is additional information about our services.</p>

    <script>
    function toggleContent() {
        const content = document.getElementById("extraContent");
        content.style.display = content.style.display === "none" ? "block" : "none";
    }
    </script>
        <button onclick="window.location.href='index.php'">Back to Home</button>

</body>
</html>
