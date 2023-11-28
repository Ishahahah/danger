<?php
// Clear the username cookie to log the user out
setcookie('username', '', time() - 3600); // Expire the cookie

// Redirect back to index.php after logout
header('Location: index.php');
?>
