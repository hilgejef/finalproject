<?php

session_start();

?>

<html>
<head>
	<title>Memesavr - Submit meme</title>	
<?php

include "css_includes.php"

?>
</head>
<body>
<?php

include "header.php";

?>

<div class = "container form-container">
	
	<h2>Submit a meme</h2>
	
	<div id="formdiv">
		<form id="submit_meme" method="post" enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="title">Title</label>
		    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
		  </div>
		  <div class="form-group">
		    <label for="meme">Meme to upload (PNG, JPG, JPEG or GIF only &lt; 5mb) </label>
		    <input type="file" id="meme" name="meme">
		  </div>
		  <button type="submit" class="btn btn-default">Submit meme</button>
		</form>
	</div>

	<div id="alertbox"></div>

</div>

<?php

include "js_includes.php";

?>
<script src="submit.js"></script>
</body>
</html> 