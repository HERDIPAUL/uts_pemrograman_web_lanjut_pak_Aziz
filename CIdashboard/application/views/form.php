<!DOCTYPE html>
<html>
<head>
	<title>halaman login</title>
	<style type="text/css">
		form{
			background-color: purple;
			text-align: center;
			padding-top: 20px;
			padding-bottom: 20px;

		}
		body{
			background-color: yellow;
		}
	</style>
</head>
<body>

	<form action="Overview/halamanmasuk" method="post">
			<font color="white">
		<li>
			<label for="username">username</label>
			<input type="type" name="username" id="username">
		</li>
		<br>
		<li>
			<label for="username">password</label>
			<input type="password" name="password" id="password">
		</li>
		<p>
		<li>
			<button type="submit" name="login">login</button></a>
			
		</p>
	</font>
	</form>
	<?php if (isset($_POST["login"])) : ?>
		<a href="<?php echo base_url('Overview/halamanmasuk') ?>"><script> alert('anda berhasil login'); </script></a>
		
	
		<?php endif; ?>


</body>
</html>