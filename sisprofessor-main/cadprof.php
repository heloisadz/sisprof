<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadprof.css">
    <title>CADASTRO Professor</title>
</head>
<body>
  
   <div class="container">
  <form method="GET" action="crudprof.php">
    <label for="">Nome:</label>
     <input type="text" name="nome" required maxlength="100">

     <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" maxlength="11" required placeholder="Digite apenas números ex: 12345678912">
     
     <label for="">SIAPE:</label>
     <input type="text" name="SIAPE" required maxlength="10">

     <label for="">Idade:</label>
     <input type="text" name="idade" required maxlength="100">

     <label for="">Data de Nacimento</label>
     <input type="date" name="datanascimento" required>

     <label for="">Endereço:</label>
     <input type="text" name="endereco" required maxlength="100">

     <label for="">Status:</label>
     <select name="statusProf" id="" require>
     <option value="1">Ativo</option>
     <option value="0">Inativo</option>
     </select>

<div class="botao1">
     <input type="submit" name="cadastrar" value="cadastrar" class="botao">
     </div>
     </form>
     
     <div class="botao2">
     <button class="botaovoltar"><a href="index.php">voltar</a></button>
     </div>
     </div>

</body>
</html>