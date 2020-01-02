<!DOCTYPE html>
<html lang={{ 'pt_BR'|locale_name }}>
<head>
	<title>MVC Simples</title>
	<link href="assets/css/app.min.css" rel="stylesheet" />
</head>

<body>
	<h1>HOME</h1>
	<p>BEM VINDO AO MVC</p>
		<table>
			<tr>
				<th>Nome</th>
				<th>Email</th>
			</tr>
			{% for usuario in dados %}
			<tr>
				<td>{{usuario.nome}}</td>
				<td>{{usuario.email}}</td>
			</tr>
			{% endfor %}	
		</table>
<script src="assets/js/app.min.js"></script>
</body>
</html>