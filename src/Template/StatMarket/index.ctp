
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
		<table>
			<tr>
				<th>Type de donnée</th>
				<th>Nombre</th>
				<th>Details</th>
			</tr>
			<tr>
				<td>Nombre de validation de cgu</td>
				<td><?= $nbcgu ?></td>
				<td><a href="/StatMarket/DetailsCgu">+ d'infos</a></td>
			</tr>
			<tr>
				<td>Nombre d'ouverture de l'application</td>
				<td><?= $nblaunch ?></td>
				<td><a href="/StatMarket/DetailsCgu">+ d'infos</a></td>
			</tr>
			<tr>
				<td>Nombre d'ouverture de la page résultat</td>
				<td><?= $nbresult ?></td>
				<td><a href="/StatMarket/DetailsCgu">+ d'infos</a></td>
			</tr>
			<tr>
				<td>Nombre de test réalisé jusqu'à la derniere Question</td>
				<td><?= $nbendTest ?></td>
				<td><a href="/StatMarket/DetailsCgu">+ d'infos</a></td>
			</tr>
		</table>
	</div>
</body>