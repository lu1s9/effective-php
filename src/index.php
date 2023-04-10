<?php 
  include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning PHP</title>
</head>
<body>
  <h2>Welcome to Fakebook!</h2>
  <!-- Avoid Cross Site Scripting using 'htmlspecialchars' -->
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
  <label for="username">Username:</label>
  <input type="text" name="username" id="username">
  <label for="password">Password:</label>
  <input type="password" name="password" id="password">
  <input type="submit" value="Register">
  </form>
</body>
</html>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS); 
   $password = filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS); 

   if (empty($username) or empty($password)) {
    echo "Please fill in both fields";
   } else{
    $hash = password_hash($password,PASSWORD_DEFAULT);

    try {
    $sql= "INSERT INTO Users (user, password) VALUES ('$username', '$hash')";
    mysqli_query($conn, $sql);
    echo "You are now registered";
    } catch (mysqli_sql_exception) {
    echo "Could not register user";
    }
   }
  }

  mysqli_close($conn)
?>