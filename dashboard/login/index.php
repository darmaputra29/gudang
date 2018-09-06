<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-20" >

  <title>Login - Sistem Informasi Gudang Obat </title>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head >

<body>

<table width='200px'>
  <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>LOGIN</h1>
				<h3>Sistem Informasi Gudang Obat Rumah Sakit Prince Nayef Bin Abdul Aziz UNSYIAH<h3>
			</div>

			<form action="proses.php" method="post">
			<div class="login-form">
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="username" id="login-name" name="username">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="password" id="login-pass" name="password">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				
				<button type="submit" class="btn btn-primary btn-large btn-block" name="login">log in</button>
			</div>
			</form>
		</div>
	</div>
</table>
</body>

</body>

</html>