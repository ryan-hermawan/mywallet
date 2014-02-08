<? session_start();
$cek = sha1(md5("wallet-login"));
if ($_POST['token'] == $cek)
{
	// $_SESSION['success'] = "Cek token success";
	include("koneksi.php");
	if(isset($_POST['btnLoginAdminWallet']))
	{
		$stringQuery = "select * from admin where STATUS = 'aktif' and USERNAME='".$_POST['txtUsernameWallet']."' and PASSWORD='".md5($_POST['txtPasswordWallet'])."'";
		$query=mysql_query($stringQuery);
		// $query=mysql_query("select * from admin where STATUS = 'aktif' and USERNAME='".$_POST['txtUsernameWallet']."' and PASSWORD='".md5($_POST['txtPasswordWallet'])."'");
		if(mysql_num_rows($query) == 1)
		{
	        setcookie("wallet", 1, time()+3600);
			$row=mysql_fetch_array($query);
			$_SESSION['adminWallet'] = $row['ID'];

			//////////////////////////////logging/////////////////////////////////
			// $_SESSION['logAction'] = "User Sign In";
			// $_SESSION['query'] = $stringQuery;
			// include("prosesLogging.php");

			$_SESSION['currLogin'] = date('Y-m-d H:i:s');
			// $_SESSION['success'] = "Login success";
			$_SESSION['welcome'] = 1;
			unset($_SESSION['token']);
			unset($_SESSION['peringatan']);
			header('location: adminHome');
		}
		else
		{
			$_SESSION['peringatan']="Username or password is incorrect";
			setcookie("wallet", 1, time() - 1);
			header("location: adminLogin");
		}
	}
}
else 
{
	$_SESSION['error'] = "You have not license to access this site!";
	header('Location: adminLogin');
}
?>