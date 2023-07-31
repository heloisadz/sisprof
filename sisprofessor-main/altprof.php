<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    require_once('conexao.php');

   $idProf = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM Professor where idProf= :idProf";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':nome',$nome, PDO::PARAM_STR);
   $retorno->bindParam(':cpf',$cpf, PDO::PARAM_STR);
   $retorno->bindParam(':SIAPE',$SIAPE, PDO::PARAM_STR);
   $retorno->bindParam(':idade',$idade, PDO::PARAM_INT);
   $retorno->bindParam(':datanascimento',$datanascimento, PDO::PARAM_INT);
   $retorno->bindParam(':endereco',$endereco, PDO::PARAM_STR);
   $retorno->bindParam(':statusProf',$statusProf, PDO::PARAM_BOOL);
   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nome = $array_retorno['nome'];
   $cpf = $array_retorno['cpf'];
   $SIAPE = $array_retorno['SIAPE'];
   $idade = $array_retorno['idade'];
   $datanascimento = $array_retorno['datanascimento'];
   $endereco = $array_retorno['endereco'];
   $statusProf = $array_retorno['statusProf'];
   
?>

  <form method="POST" action="crudprof.php">
  <label for="">Nome</label>
        <input type="text" name="nome" id="" required  value=<?php echo $idProf?>>

        <label for="">Nome</label>
        <input type="text" name="nome" id="" required  value=<?php echo $nome?>>

        <label for="">CPF:</label>                                        
        <input type="text" name="cpf" id="" required  value=<?php echo $cpf ?>>

        <label for="">SIAPE</label>
        <input type="text" name="SIAPE" id="" required value=<?php echo $SIAPE ?>>

        <label for="">Idade</label>
        <input type="text" name="idade" id="" required value=<?php echo $idade ?>>

        <label for="">Data de Nascimento</label>
        <input type="text" name="datanascimento" id="" required value=<?php echo $datanascimento ?>>

        <label for="">Endereço:</label>
        <input type="text" name="endereco" id="" required value=<?php echo $endereco ?>>

        <label for="">status</label>
        <select name="statusProf" id="" value=<?php echo $statusProf?> required >
        <option value="1">Ativado</option>
       <option value="0">Desativado</option>
      </select>
        
        <input type="submit" name="update" value="Alterar">
  </form>
</body>
</html>