<? session_start();
	include("koneksi.php");

	$idUser=$_SESSION['adminWallet'];
	$action=$_SESSION['logAction'];
	$date = date('Y-m-d H:i:s');
	$stringQuery= str_replace("'", "", $_SESSION['query']);

	// $logQuery = "insert into datalog(ID_USER, DATE_LOG, ACTIONS, QUERIES) values('".$idUser."', '".$date."', '".$action."', '".$stringQuery."')";
	$logQuery = mysql_query("insert into datalog(ID_USER, DATE_LOG, ACTIONS, QUERIES) values('".$idUser."', now(), '".$action."', '".$stringQuery."')");


	// $_SESSION['error'] = $logQuery;
	unset($_SESSION['logAction']);
	unset($_SESSION['query']);
?>