
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
	<div class="login">
		<h1>Ciconia plateforme</h1>
		<div class="buttonChoice">
			<form method="post" action="statMarket">
				<button type="submit" action="/statMarket">Statistique Marketing</button>
			</form>
			<form method="post" action="statClient">
				<button>Statistique Reponses App</button>
			</form>
			<form method="post" action="BackApp">
				<button>Gestion back application</button>
			</form>
		</div>
	</body>