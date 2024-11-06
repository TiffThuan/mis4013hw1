<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stakeholders</title>
</head>
<body>
    <h1>Stakeholder Information</h1>
    <form>
        <label for="stakeholderName">Name:</label><input type="text" id="stakeholderName"><br><br>
        <label for="stakeholderEmail">Email:</label><input type="email" id="stakeholderEmail"><br><br>
        <button type="button" onclick="autoFill()">Auto-Fill</button>
    </form>

    <script>
    function autoFill() {
        document.getElementById("stakeholderName").value = "Tiffany";
        document.getElementById("stakeholderEmail").value = "tiffthuan@email.com";
    }

    function goBackHome() {
        window.location.href = "index.html"; // Redirects to the homepage
    }
    </script>

    <!-- Back to Home button -->
    <button onclick="goBackHome()">Back to Home</button>

</body>
</html>
