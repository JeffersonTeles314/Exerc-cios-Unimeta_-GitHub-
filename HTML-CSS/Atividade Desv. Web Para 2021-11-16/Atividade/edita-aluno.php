<?php
if(!isset($_POST['id_aluno'])) { echo "<script>window.location.href='index.php?page=lista-leitor';</script>"; exit; }
//if(!isset($_POST['id_leitor'])) { header("Location: index.php?page=lista-leitor"); exit; }
$cpf_aluno = $_POST['cpf_aluno'];
require 'conexao.php';
$select = "SELECT * FROM aluno WHERE cpf_aluno=:cpf_aluno";

try{
	$result = $conexao->prepare($select);
	$result->bindParam(':cpf_aluno', $cpf_aluno, PDO::PARAM_INT);
	$result->execute();
	$contar = $result->rowCount();
	if($contar>0){
		while($mostra=$result->FETCH(PDO::FETCH_OBJ)){
		 $nome_aluno = $mostra->nome_aluno;
		 $cpf_aluno         = $mostra->cpf_aluno;
		}
		}else{
		echo '<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Aviso!</strong> Não nenhum Leitor cadastrado com esse ID em nosso Banco de Dados.
			  </div>'; 
	}
}catch(PDOException $e){
      echo "ERROR: ".$e;
}
?>
 <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
  <div class="row" id="main" >
      <div class="col-sm-12 col-md-12 well" id="content">

<form action="edita.php" method="post">
	<legend><i class="glyphicon glyphicon-file"></i> Cadastro de Aluno</legend>
	<input type="hidden" name="id_aluno" value="<?php echo $id_aluno; ?>">
	<div class="form-group">
		<label>Nome:</label>
			<input type="text" class="form-control" name="nome_aluno" value="<?php echo $nome_aluno; ?>">
	</div>
	
	<div class="form-group">
		<label>CPF:</label>
			<input type="text" class="form-control" name="cpf_aluno" value="<?php echo $cpf_aluno; ?>">
	</div>
	
	<div class="form-group">
	<button type="submit" class="btn btn-warning" name="edita_aluno"><i class="glyphicon glyphicon-edit"></i> Editar</button>
</div>
</form>

