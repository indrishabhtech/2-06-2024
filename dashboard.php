<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>This is your dashboard</h1>
    <div class="container mt-5">
        <div class="alert alert-success" role="alert">
            <?php echo 'Welcome, ' . htmlspecialchars($_SESSION['']) . '!'; ?>
        </div>
        <a href="logout.php" class="btn btn-primary">Logout</a>
    </div>
   
</body>
</html>