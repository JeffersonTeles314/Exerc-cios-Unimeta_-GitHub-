<?php
//CONEXÃO
require 'conexao.php';

//EDITA LEITOR  
if(isset($_POST['edita_aluno'])){
 $nome_aluno = trim(strip_tags($_POST['nome_aluno']));
 $cpf_aluno         = trim(strip_tags($_POST['cpf_aluno']));
 $endereco_aluno         = trim(strip_tags($_POST['cpf_aluno']));
 $email_aluno         = trim(strip_tags($_POST['cpf_aluno']));
 $senha_aluno         = trim(strip_tags($_POST['cpf_aluno']));

 
 $update = "UPDATE aluno SET nome_aluno=:nome_aluno, cpf_aluno=:cpf_aluno, endereco_aluno=:endereco_aluno, email_aluno=:email_aluno, senha_aluno=:senha_aluno WHERE cpf_aluno=:cpf_aluno";
try{
 	 $result = $conexao->prepare($update);
 	 $result->bindparam(':nome_aluno', $nome_aluno, PDO::PARAM_STR);
	 $result->bindparam(':cpf_aluno', $cpf_aluno, PDO::PARAM_STR);
	 $result->bindparam(':endereco_aluno', $cpf_aluno, PDO::PARAM_STR);
	 $result->bindparam(':email_aluno', $cpf_aluno, PDO::PARAM_STR);
	 $result->bindparam(':senha_aluno', $cpf_aluno, PDO::PARAM_STR);
	 $result->execute();

	 $contar = $result->rowCount();

	 if($contar>0){
	 	echo "<script>alert('Aluno Atualizado com Sucesso!')</script>";
	 	?><script> window.location.href = "lista.php";
		</script>
		<?php
	 }else{
	 	echo "<script>alert('Não foi possível Atualizar o Aluno!')</script>";
	 }
 }catch(PDOException $e){
      echo "ERROR: ".$e;
      }
}
?>