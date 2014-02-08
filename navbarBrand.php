<? include("koneksi.php");
	$query = mysql_query("select * from navbarbrand order by ID asc");
	$result = mysql_fetch_array($query);
	echo '<a class="brand" href="'.$result['LINK'].'">'.$result['TEXT'].'</a>';
?>