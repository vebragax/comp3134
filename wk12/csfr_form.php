<?php
session_start();
$_SESSION['confirmation'] = 'undefined';
?>

<body onload="sendData()">
    <form action="csfr.php" method="POST">
        <label for="fname">Username:</label><br>
        <input type="text" name="uname" value="host"><br>
        <label for="lname">Password:</label><br>
        <input type="text" name="psw" value="pass"><br><br>
        <button id ="submit" type="submit" value="Submit">
      </form>
</body>
<script>
function sendData() {
    document.getElementById("submit").click();
  }
</script>

