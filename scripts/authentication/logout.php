<?php


// 1. **Session Start:**
//    - Initiates the session.

// 2. **Check User Login:**
//    - Checks if the user is logged in by verifying the existence of the `username` session variable.

// 3. **Logout Process:**
//    - If the user is logged in:
//       - Unsets all session variables.
//       - Destroys the session.
//       - Redirects to the login page (`index.php`).
//       - Exits the script.

// 4. **Redirect If Not Logged In:**
//    - If the user is not logged in, it directly redirects to the login page without further actions.

// This code ensures that a logged-in user is properly logged out, destroying the session and redirecting to the login page. 
// If the user is not logged in, it still redirects to the login page as a precaution.


// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['full_name'])) {
    // Unset all the session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();


}
// Redirect to the login page or any other page you want
header("Location: ../../index.php");
exit();
