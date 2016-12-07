
<body>

	<?php
 
		$_SESSION['authuser']=0;
		$_SESSION['user']=0;
		session_destroy();
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
	?>	


</body>