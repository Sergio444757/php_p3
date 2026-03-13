<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "p3_games";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT * FROM games";
  $stmt = $conn->query($sql);
  $games = $stmt->fetchAll(PDO::FETCH_ASSOC);

//   echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<ul>
<?php
foreach ($games as $game) {
    echo "<li>" . $game['title'] . "</li>";
}
?>
</ul>
</body>
</html>