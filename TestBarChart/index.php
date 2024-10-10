<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "salesdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Product, TotalSales FROM tblsales";
$result = $conn->query($sql);

$productNames = [];
$totalSales = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $productNames[] = $row['Product'];
        $totalSales[] = $row['TotalSales'];
    }
} else {
    echo "0 results";
}
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar Chart</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
</head>
<body>
    <div style="width: 50%; margin: auto;">
        <h2>Sales Data</h2>
        <canvas id="salesChart"></canvas>
    </div>

    <script>
        var ctx = document.getElementById('salesChart').getContext('2d');
        var salesChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($productNames); ?>,
                datasets: [{
                    label: 'Total Sales',
                    data: <?php echo json_encode($totalSales); ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>
