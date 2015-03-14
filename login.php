<?php

session_start();

?>

<html>
<head>
	<title>Login</title>	
<?php

include "css_includes.php"

?>
</head>
<body>
<?php

include "header.php";

?>

<div class = "container">
	
	<h2>Login</h2>
	
	<form id="login" method="post">
	  <div class="form-group">
	    <label for="username">Username</label>
	    <input type="username" class="form-control" id="username" placeholder="Enter username">
	  </div>
	  <div class="form-group">
	    <label for="password">Password</label>
	    <input type="password" class="form-control" id="password" placeholder="Password">
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>

	<div id="alertbox"></div>

</div>

<?php

include "js_includes.php";

?>
<script src="login.js"></script>
</body>
</html> 