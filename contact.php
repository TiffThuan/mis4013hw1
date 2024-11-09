<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <a href="index.php">Home</a> |
        <a href="about.php">About Us</a> |
        <a href="services.php">Services</a> |
        <a href="contact.php">Contact</a> |
        <a href="stakeholder.php">Stakeholders</a>
    </nav>

    <!-- Main Content -->
    <h1>Contact Us</h1>
    <div id="scatterChart" style="width: 600px; height: 400px;"></div>

    <script>
        const scatterChart = echarts.init(document.getElementById('scatterChart'));
        const scatterOption = {
            title: { text: 'Customer Feedback Trends' },
            xAxis: { type: 'category', data: ['Timeliness', 'Satisfaction', 'Clarity'] },
            yAxis: { type: 'value' },
            series: [{ symbolSize: 20, data: [[0, 90], [1, 80], [2, 70]], type: 'scatter' }]
        };
        scatterChart.setOption(scatterOption);
    </script>
</body>
</html>
