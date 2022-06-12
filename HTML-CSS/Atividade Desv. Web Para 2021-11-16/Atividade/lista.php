<table border="1">
	<thead>
		<tr>
		     <th>Nome do Aluno</th> 
			 <th>CPF do Aluno</th>
			 <th>Endereco do Aluno</th> 
			 <th>Email do Aluno</th> 
			 <th>Senha do Aluno</th>         
  
			 <th class="text-center">Editar</th>      
			 <th class="text-center">Deletar</th>  
		</tr>
	</thead>
	<tbody>
<?php  
require 'conexao.php';
$select = "SELECT * FROM aluno ORDER BY nome_aluno DESC";
try{
	$result = $conexao->prepare($select);
	$result->execute();
	$contar = $result->rowCount();
	while($mostra=$result->FETCH(PDO::FETCH_OBJ)){
?>
	<tr>
	 <td><?php echo $mostra->nome_aluno; ?></td> 
	 <td><?php echo $mostra->cpf_aluno; ?></td>
	 <td><?php echo $mostra->endereco_aluno; ?></td>   
	 <td><?php echo $mostra->email_aluno; ?></td>   
	 <td><?php echo $mostra->senha_aluno; ?></td>     

     <td class="text-center">
     	<form action="edita-aluno.php" method="post">
			<input type="hidden" name="nome_aluno" value="<?php echo $mostra->nome_aluno; ?>">
			<button type="submit" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</button>
		</form>
	</td>
	 <td class="text-center">
		 <form action="deleta.php" method="post">	
	  	 <input type="hidden" name="nome_aluno" value="<?php echo $mostra->nome_aluno; ?>">
	 	<button type="submit" name="deleta_aluno" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar esse registro?'); return false;"><i class="glyphicon glyphicon-trash"></i> Deletar</button>
	  </form>
	  </td>    
	</tr>

<?php			
	}

}catch(PDOException $e){
      echo "ERROR: ".$e;
}
?>
</tbody>
</table>