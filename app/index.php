<?php
$hostname = gethostname();
$serverIP = $_SERVER['SERVER_ADDR'] ?? 'Unknown';
$version = "2.0";

?>

<!DOCTYPE html>
<html>
<head>
    <title>My Kubernetes DevOps Project</title>
    <style>
        body {
            background: #eef2f7;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 60px;
        }

        .container {
            background: white;
            padding: 35px;
            border-radius: 12px;
            max-width: 650px;
            margin: auto;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        h1 {
            color: #2563eb;
        }

        .info {
            background: #f1f5f9;
            padding: 15px;
            margin: 12px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Welcome to My DevOps Project!</h1>

    <p>Nginx + PHP Application</p>

    <div class="info">
        <strong>Application Version:</strong>
        <?php echo $version; ?>
    </div>

    <div class="info">
        <strong>Server Hostname:</strong>
        <?php echo htmlspecialchars($hostname); ?>
    </div>

    <div class="info">
        <strong>Server IP:</strong>
        <?php echo htmlspecialchars($serverIP); ?>
    </div>

    <div class="info">
        <strong>Technology:</strong>
        Docker + Kubernetes
    </div>

</div>

</body>
</html>
