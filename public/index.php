<?php
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Local PHP Server</title>
</head>
<body>
  <h1>Website working on <?php echo htmlspecialchars($host); ?></h1>
  <p>Haddii aad aragto boggan, server-ka PHP ayaa si guul leh u socdaa.</p>
</body>
</html>