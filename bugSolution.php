The `mysql_*` functions should be replaced with the `mysqli_*` functions. This provides improved security and performance. Here's an updated version:
```php
<?php
$conn = new mysqli("localhost", "username", "password", "database_name");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// ... rest of the code using mysqli_* functions
$result = $conn->query("SELECT * FROM yourTable");
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    //process each row
  }
} else {
  echo "0 results";
}
$conn->close();
?>
```
Remember to replace placeholders like "localhost", "username", "password", and "database_name" with your actual database credentials.