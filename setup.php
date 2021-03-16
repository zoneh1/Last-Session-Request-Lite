	<?php 
	
	// Last Session Request Lite
	// GitHub TyphoonWeb https://github.com/typhoonweb
	// WARNING: Please send a notification to your users during use! Depending on where you live, this Last Session Request Lite may be prohibited by law. Be careful before use!
	
	include 'typhoonweb.php';
	if (!isset($_SESSION)) { session_start(); }
	if($_SESSION['last_session_request'] > time() - 2){ 
		header("location: /404/");
		exit;
	}
	$_SESSION['last_session_request'] = time();
	fclose($fp);
	
	?>
	