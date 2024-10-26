<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us</h1>

    <form onsubmit="return validateForm()">
        <label>Name:</label><input type="text" id="name"><br><br>
        <label>Email:</label><input type="email" id="email"><br><br>
        <button type="submit">Submit</button>
    </form>

    <script>
    function validateForm() {
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        if (name === "" || email === "") {
            alert("Please fill in both fields.");
            return false;
        }
        alert("Form submitted!");
        return true;
    }
    </script>

        <button onclick="window.location.href='index.php'">Back to Home</button>

</body>
</html>
