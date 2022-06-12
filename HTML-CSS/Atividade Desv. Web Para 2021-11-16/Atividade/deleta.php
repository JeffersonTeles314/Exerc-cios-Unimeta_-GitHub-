<?php
//CONEXÃO COM O BANCO DADOS
require 'conexao.php';

//DELETA LEITOR
if(isset($_POST['deleta_aluno'])){
	$nome_aluno = $_POST['nome_aluno'];

$delete ="DELETE FROM aluno WHERE nome_aluno=:nome_aluno";
		try{
		  $result = $conexao->prepare($delete);
		  $result->bindparam(':nome_aluno', $nome_aluno, PDO::PARAM_INT);
		  $result->execute();
		  $contar = $result->rowCount();
		  if($contar>0){
             echo "<script>alert('Aluno excluído com Sucesso!');</script>";
             ?>

<script> window.location.href = "lista.php";
		</script>

		<?php

		  }else{
		  	 echo "<script>alert('Não foi possível excluir o Aluno!');</script>";
		  }        
		}catch(PDOException $e){
		     echo "ERROR: ".$e;
		}
}




?>