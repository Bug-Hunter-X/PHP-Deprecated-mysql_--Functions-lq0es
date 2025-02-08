This code uses the `mysql_*` functions, which are deprecated and have been removed from PHP 7.0 onwards.  Attempting to use them will result in errors.
```php
<?php
$conn = mysql_connect("localhost", "username", "password");
if (!$conn) {
die("Connection failed: " . mysql_error());
}
mysql_select_db("database_name", $conn);
// ... rest of the code using mysql_* functions
?>
```