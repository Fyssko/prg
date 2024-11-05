session_start(); // Spustí/obnoví relaci
$_SESSION["username"] = "JohnDoe"; // Uloží hodnotu do session
echo $_SESSION["username"]; // Vrátí "JohnDoe"
