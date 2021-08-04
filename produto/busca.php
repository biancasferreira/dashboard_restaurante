<?php
  
  //$conexao = mysqli_connect('127.0.0.1','root','','aulaphp');
  include_once("conexao.php");
  
  if($_POST['codigo']!=''){
	  $cod=$_POST['codigo'];
	  
	  $procura_dados= mysqli_query($conexao,"select * from pessoas where codigo=$cod");
	  
	  if(mysqli_num_rows($procura_dados)== 1){
		  while($dados = $procura_dados -> fetch_array()){
			  $nome=$dados['nome'];
			  $email=$dados['email'];
			  $idade=$dados['idade'];
			?>  
			  <h3>Nome.....: <?php echo $nome;?><br>
			  <h3>Email.....: <?php echo $email;?><br>
			  <h3>Idade.....: <?php echo $idade;?><br>
			<?php
		  }
	  }
	  else{
		  echo("Código não encontrado !!!");
	  }
  }
  else{
	  echo ("Campo Código vazio !!!");
  }
  ?>
	  