<!DOCTYPE html>
<html lang={{ 'pt_BR'|locale_name }}>
<head>
	<title>MVC Simples</title>
	<link href="app.css" />
</head>

<body>
	<h1>HOME</h1>
	<p>BEM VINDO AO MVC</p>
		<table>
			<tr>
				<th>Nome</th>
				<th>Email</th>
			</tr>
			<tr>
				<td>{{dados.nome}}</td>
				<td>{{dados.email}}</td>
			</tr>	
		</table>
<script src="app.js"></script>
</body>
</html>