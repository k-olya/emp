<?php
echo "<body style=\"font-family: monospace\"><p><b>PHP works!</b></p>";
$conn = @new mysqli(getenv("MYSQL_HOST"), getenv("MYSQL_USER"), getenv("MYSQL_PASSWORD"), getenv("MYSQL_DATABASE"));

    if ($conn->connect_error) {
        echo "<p style='color:red;'>Connection failed: " . htmlspecialchars($conn->connect_error) . "</p>";
    } else {
      echo "<p style='color:green;'>MySQL connection successful!</p><p>You can use <i>mysqli(</i><b>\"".getenv("MYSQL_HOST")."\"</b>, \"MYSQL_USER\", \"MYSQL_PASSWORD\", \"MYSQL_DATABASE\"<i>)</i> to connect to the database.</p><p>Variables are available  via <i>getenv(</i>\"VARIABLE NAME\"</i>)</i>, but are not exposed here in case you've already connected your setup to the internet.</p>";
      echo "<p>Have fun!</p>";
        $conn->close();
    }

echo "<p>PHP version ".phpversion()."</p></body>";
