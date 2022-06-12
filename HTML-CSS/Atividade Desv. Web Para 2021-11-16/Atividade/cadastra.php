<?php
require 'conexao.php';

//CADASTRO DE Aluno
if(isset($_POST['cadastra_aluno'])){
 $nome_aluno = trim(strip_tags($_POST['nome_aluno']));
 $cpf_aluno       = trim(strip_tags($_POST['cpf_aluno']));
 $endereco_aluno       = trim(strip_tags($_POST['endereco_aluno']));
 $email_aluno       = trim(strip_tags($_POST['email_aluno']));
 $cpf_aluno       = trim(strip_tags($_POST['senha_aluno']));
 

 $insert = "INSERT INTO aluno(nome_aluno, cpf_aluno, endereco_aluno, email_aluno, senha_aluno) VALUES (:nome_aluno,:cpf_aluno,:endereco_aluno ,:email_aluno ,:senha_aluno)";

 try{
 	 $result = $conexao->prepare($insert);
 	 $result->bindparam(':nome_aluno', $nome_aluno, PDO::PARAM_STR);
	 $result->bindparam(':cpf_aluno', $cpf_aluno, PDO::PARAM_STR);
	 $result->bindparam(':endereco_aluno', $endereco_aluno, PDO::PARAM_STR);
	 $result->bindparam(':email_aluno', $email_aluno, PDO::PARAM_STR);
	 $result->bindparam(':senha_aluno', $senha_aluno, PDO::PARAM_STR);
	 $result->execute();
	 
	 $contar = $result->rowCount();
	 if($contar>0){
	 	echo "<script>alert('Aluno Cadastrado com Sucesso!')</script>";
	 }else{
	 	echo "<script>alert('Não foi possível cadastrar o Aluno!')</script>";
	 }
 }catch(PDOException $e){
      echo "ERROR: ".$e;
 }

}
