<form action="getusers_1.php" method='GET'>
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br>
  <input type="submit" value="Submit">
</form>
<?php
$servername = "localhost";
$username = "minhtran";
$dbname = "cyber";
$password = "vebragax123";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
   die("Connection failed: " . $conn->connect_error);
}

// Get data

if(isset($_GET['fname'])){
 $fname = $_GET['fname'];
echo $sql;
echo "<br>";
$result = $conn->query("SELECT * FROM users WHERE firstname='".$fname."' AND active=1");

// Table

echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Username</th>";
echo "<th>Email</th>";
echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th>Active</th>";
echo "</tr>";
if($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['username']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['firstname']."</td>";
    echo "<td>".$row['lastname']."</td>";
    echo "<td>".$row['active']."</td>";
    echo "</tr>";
}
}
else {
  echo "None found";
}
$conn->close();

}
else {
 $fname = "";
}
?>
