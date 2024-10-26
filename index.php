<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Website</title>
    <!-- Bootstrap CSS for styling -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .hero {
            background-image: url('https://via.placeholder.com/1920x600'); /* Replace with an actual image */
            background-size: cover;
            color: #fff;
            padding: 100px 0;
            text-align: center;
        }
        .hero h1 {
            font-size: 3.5rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.25rem;
        }
        .section {
            padding: 60px 0;
        }
    </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Our Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="stakeholder.php">Stakeholders</a></li>
        </ul>
    </div>
</nav>

<!-- Hero Section -->
<div class="hero">
    <h1>Welcome to Our Website</h1>
    <p>We offer the greatest Vietnamese coffee leading in the USA.</p>
    <a href="about.php" class="btn btn-primary btn-lg mt-3">Learn More About Us</a>
</div>

<!-- Featured Sections -->
<div class="container section text-center">
    <h2 class="mb-4">Our Services</h2>
    <div class="row">
        <div class="col-md-4">
            <h4>Service 1</h4>
            <p>Great quality and fast delivery</p>
        </div>
        <div class="col-md-4">
            <h4>Service 2</h4>
            <p>Reliable, trustworthy, and innovative.</p>
        </div>
        <div class="col-md-4">
            <h4>Service 3</h4>
            <p>Our 24/7 expertise.</p>
        </div>
    </div>
</div>

<div class="container section text-center bg-light">
    <h2 class="mb-4">Why Choose Us?</h2>
    <div class="row">
        <div class="col-md-4">
            <h4>Experience</h4>
            <p>Over 20 years of instant and roasted coffee.</p>
        </div>
        <div class="col-md-4">
            <h4>Quality</h4>
            <p> Uniqueness with affordable price.</p>
        </div>
        <div class="col-md-4">
            <h4>Commitment</h4>
            <p>Your satisfaction is our priority.</p>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4">
    <p>&copy; <?php echo date("Y"); ?> Our Website | All rights reserved.</p>
</footer>

<!-- Bootstrap and jQuery JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
