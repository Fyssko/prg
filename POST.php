// HTML Form
// <form method="POST" action="process.php">
//   <input type="text" name="username">
//   <input type="password" name="password">
//   <input type="submit">
// </form>

// PHP (process.php)
echo $_POST["username"]; // Vrátí hodnotu pole "username"
echo $_POST["password"]; // Vrátí hodnotu pole "password"
