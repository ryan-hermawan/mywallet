<? session_start();
if($_GET['act']=='SignOut')
{
	include("koneksi.php");
	// echo $_SESSION['adminWallet'];
	// echo $_SESSION['currLogin'];
	$stringQuery = "update admin set LAST_LOGIN='".$_SESSION['currLogin']."' where ID='".$_SESSION['adminWallet']."'";
	$query = mysql_query($stringQuery);

	//////////////////////////////logging/////////////////////////////////
	// $_SESSION['query'] = $stringQuery;
	// $_SESSION['logAction'] = "User Sign Out";
	// include("prosesLogging.php");


	unset($_SESSION['adminWallet']);
	unset($_SESSION['currLogin']);
    setcookie("wallet", 1, time() - 1);
    header('Location: adminLogin');
}
?>