<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
	<h2>Patient Login</h2>
</div>
<form method="post" action="login.php">

	<?php include ('../datalayer/errors.php')?>

	<div class="container">
	<div class="input-group">
		<label>User ID</label>
		<input type="text" name="UserID" placeholder="Enter Your User Id">
	</div>
	<div class="input-group">
		<label>Password</label>
		<div class="password-input-container">
		<input type="password" id="password" name="password">
        <button type="button" id="togglePassword" class="toggle-button">Show/Hide Password</button>
    </div>
		<button type="submit" name="Login" class="btn"> Login</button> 
		<button id="clear-btn" type="reset">Clear</button>	
	<div id="sign-up-refer">
	<p>
		Not a member? <a href="1st.php">Sign Up </a>
	</p>
</div>
</div>
</form>
<div id="logoutDiv" class="hidden">
      <h2>Welcome, <span id="loggedInUser"></span>!</h2>
      <button id="logoutBtn">Logout</button>
    </div>

	<!-- Password Show And Hide Button -->
    <script>
    document.getElementById('togglePassword').addEventListener('click', function() {
      const passwordInput = document.getElementById('password');
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
      } else {
        passwordInput.type = 'password';
      }
    });
  </script>
</body>
</html>