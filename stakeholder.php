<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stakeholders</title>
    <script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <a href="index.php">Home</a> |
        <a href="about.php">About Us</a> |
        <a href="services.php">Services</a> |
        <a href="contact.php">Contact</a> |
        <a href="stakeholders.php">Stakeholders</a>
    </nav>

    <!-- Main Content -->
    <h1>Stakeholder Information</h1>
    <div id="radarChart" style="width: 600px; height: 400px;"></div>

    <script>
        const radarChart = echarts.init(document.getElementById('radarChart'));
        const radarOption = {
            title: { text: 'Stakeholder Engagement' },
            radar: {
                indicator: [
                    { name: 'Transparency', max: 100 },
                    { name: 'Communication', max: 100 },
                    { name: 'Trust', max: 100 },
                    { name: 'Satisfaction', max: 100 },
                    { name: 'Commitment', max: 100 }
                ]
            },
            series: [{ type: 'radar', data: [{ value: [80, 90, 85, 70, 95], name: 'Stakeholder A' }] }]
        };
        radarChart.setOption(radarOption);
    </script>
</body>
</html>
