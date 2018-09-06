<?php

session_start();

	include("../fungsi/koneksi.php");

if(isset($_POST['login'])){
$username = $_POST['username'];
$password = $_POST['password'];

	if(empty($username)or empty($password))
	{
		?>
			<script>
				alert("Username dan Password Kosong");
				document.location='index.php'
				</script>
		
		<?php
	}else
	{
	
	
		$sql=mysql_query("select * from admin where username='$username' and password='$password'")or die (mysql_error());
		$r=mysql_num_rows($sql);
		$row=mysql_fetch_array($sql);
		
		if($r!=1){
			
			?>
				<script>
				alert("Password Salah");
				document.location='index.php'
				</script>
		
		<?php
		}
		else
		{
			$_SESSION['user']= $row['username'];
			header ("Location: ../dashboard");
			
		}
	}
			
			
}
	?>
	