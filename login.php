<?php
// Start a session
session_start();

// Database connection details
$servername = "localhost"; // Update this with your server
$username = "root";        // Update this with your database username
$password = "";            // Update this with your database password
$dbname = "universal_ticket_management_system"; // Update this with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $Password = $_POST['Password'];

  // Sanitize inputs
  $email = $conn->real_escape_string($email);
  $Password = $conn->real_escape_string($Password);
  // $Customer_ID = $conn->real_escape_string($Customer_ID);

  // Query to check the user
  $sql = "SELECT * FROM customer WHERE Email = '$email' AND Password = '$Password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // User found
    $_SESSION['logged_in'] = true;
    $_SESSION['Password'] = $Password;
    echo file_get_contents('./customer/customer-profile.php');
  } else {
    // User not found
    echo "Invalid email or Password.";
  }
}

$conn->close();
?>


<!DOCTYPE html>
<html>

<head>
  <title>LogIn - UTMS</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.4.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body class="text-white">
  <div class="w-full h-full bg-[#18191a] pb-10">
    <!-- navbar -->
    <div class="navbar bg-[#242526] shadow-2xl">
      <div class="flex-1">
        <a class="btn btn-ghost text-xl">UTMS</a>
      </div>
      <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
          <li><a href="./Login.php">LogIn</a></li>
          <li><a href="./Register.php">SignUp</a> </li>
        </ul>
      </div>
    </div>

    <!-- body -->
    <div class="w-[80%] mx-auto flex flex-col justify-center items-center pt-20">
      <div class="text-center lg:text-left">
        <h1 class="text-5xl font-bold mb-5">LogIn Your Account</h1>
      </div>
      <div class="card flex-shrink-0 w-[45%] mx-auto shadow-2xl bg-base-100">
        <div class="card-body">
          <form method="POST" action="">
            <label for="email">Email:</label>
            <input class="input input-bordered" type="email" id="email" name="email" required><br><br>
            <label for="Password">Password:</label>
            <input class="input input-bordered" type="password" id="Password" name="Password" required><br><br>
            <button class="btn w-[80%] mx-auto bg-[#1bd1a4] text-white" type="submit">Login</button>
            <!-- create account directly -->
            <hr class="my-5">
            <div class="media-options mb-3">
              <a href="#"
                class="field google flex flex-row gap-3 items-center border px-3 py-2 rounded-lg bg-base-200 justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google"
                  viewBox="0 0 16 16">
                  <path
                    d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z" />
                </svg>
                <span>Login with Google</span>
              </a>
            </div>
            <div class="media-options">
              <a href="#"
                class="field google flex flex-row gap-3 items-center border px-3 py-2 rounded-lg bg-base-200 justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook"
                  viewBox="0 0 16 16">
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                </svg>
                <span>Login with Facebook</span>
              </a>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>
</body>

</html>