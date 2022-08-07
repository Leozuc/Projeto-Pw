<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Projeto - Léo e Rogerio</title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1"/> 
	<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
	<link rel="stylesheet icon" href=""/>
</head>
    
<body>
    
    <div class="abertura">
    <div id="registro">
    <div class="box">
    <form action="">
    <fieldset>
<legend><b>Registro do Usuário</b></legend><br>

<div class="inputGuarda">
<input type="text" rame="nome" id="nome" class="inputUser" required>
<label for="nome" class="labelinput"><span class="glyphicon glyphicon-home	">Nome</label>
</div><BR>

<div class="inputGuarda">
<input type="password" rame=senha" id="senha" class="inputUser" required>
<label for="senha" class="labelinput">Senha</label>
</div><br><br>

<label for="datnascimento"><b>Data de Nascimento:</b></label><br><br>
<input type="date" rame="datnascimento" id="datnascimento"  required>
<br><br>

<p>Sexo</p>
<input type="radio" id="feminino" name="genero" value="feminino" required>
<label for="feminino">Fem</label>

<input type="radio" id="masculino" name="genero" value="masculino" required>
<label for="masculino">Masc</label>

<input type="radio" id="outro" name="genero" value="outro" required>
<label for="outro">Outro</label><br><br><br>

<input type="submit" name="submite" id="submite" ><br>

    </fieldset>
    </form>
    </div>
    </div>
    </div>
    </body>
    </html>