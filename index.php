<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
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

