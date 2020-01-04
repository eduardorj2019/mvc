<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Tela de login</title>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
	<link href="assets/css/login.min.css" rel="stylesheet" />
</head>
<body>
	<div class="container">
		<div class="images"><i class="fa fa-user"></i></div>
		{% if with %}
		<div class="msg">
				<div class="alert alert-{{with.type}}">{{with.message}}</div>
		</div>
		{% endif %}
		<div class="box">
			<h1>Tela de Login</h1>	
			<form method="post">
				<div class="form-group">
					<label for="usuario">Usuário:</label>
					<input type="email" name="email" id="usuario" value="{{email}}" placeholder="usuario@exemplo.com">
					<span class="fas fa-envelope"></span>
				</div>
				<div class="form-group">
					<label for="senha">Senha:</label>
					<input type="password" name="senha" id="senha" placeholder="Senha">
					<span class="fa fa-key"></span>
					{% if input %}
					<div class="danger">{{input}}</div>
					{%endif%}
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success">Enviar</button>
				</div>	
			</form>
		</div>		
	</div>
</body>
</html>