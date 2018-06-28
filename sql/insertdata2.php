<?php
$servername = "localhost";
$username = "root";
$password = "1";
$dbname = "myDBPDO";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$data = '';
$start =microtime(true);
for($i = 1; $i < 1000; $i++){
  
$sql = "INSERT INTO user (firstname, lastname, age, email) VALUES ('hainguyen', 'hoang', '22', 'hainguyen@gmail.com')";
if (mysqli_multi_query($conn, $sql)) {
    
} else {
    echo "Error: " . $sql . "<br/>" . mysqli_error($conn);
}
}
$end = microtime(true);
            echo "Thoi gian thuc hien: ";
            echo $end -$start . 's'; // in seconds




mysqli_close($conn);