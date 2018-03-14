
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"/>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<style>
body {
	width: 100%;
	margin-top: 30px;
}
h1{
	color: #609297;
	text-align: center;
}
.login{
	width: 90%;
	margin: auto;
}
input{
	max-width: 150px;
	text-align: center;
}
form{
	margin: auto;
	margin-left: 20px;
	display: inline-block;
}
</style>

<body>
	<?php
		if ($_SESSION['login'] == 'admin' && $_SESSION['passwd'] == 'admin') 
		{ ?>
			toto
		<?php
		}
	else { ?>
<div class="login">
	<h1>Ciconia plateforme</h1>
	<form method="post" action="/api/login">
		<label>login</label><input type="text" name="login" placeholder="login">
		<label>password</label><input type="password" name="password" placeholder="password">
		<button type="submit">Valider</button>
	</form>
</div>

<?php

} ?>
</body>