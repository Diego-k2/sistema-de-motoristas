<?php


    include "../database.php";


    // $sql = "SELECT * FROM `caminhoneiros`";  
	$sql = "SELECT * FROM `ads_diego_controle_motoristas`"; 

    $resultado = mysqli_query($conexao, $sql);

?>

<!doctype html>
<html lang="pt-br">
  <head>
  	<title>Lista Caminhoneiros</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link type="image/png" sizes="32x32" rel="icon" href=".../icons8-caminhão-interestadual-32.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<span class="login100-form-title p-b-48">
						<img src="https://img.icons8.com/nolan/80/interstate-truck.png"/>
					</span>
					<h1 class="heading-section">Lista de caminhoneiros ativos</h1>
                </div>
			</div class="col-md-6 text-center mb-3">
            <div class="row justify-content-center">
                <div>
                    <a href="../cadastraCaminhoneiro.php" class="btn btn-info">Adicionar caminhoneiro</a>
					<a href="../index.php" class="btn btn-success">Sair</a>
                </div>
            </div>

			<div class="row mt-5">
				<div class="col-md-14">
					<div class="table-wrap">
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th>Identificador</th>
						      <th>Nome</th>
							  <th>CPF</th>
							  <th>CNH</th>
						      <th>Email</th>
						      <th>Telefone</th>
                              <th>Administrador</th>
						    </tr>
						  </thead>
						  <tbody>
                            <?php while ($dados = mysqli_fetch_array($resultado)){ ?>
						    <tr>
						      <th scope="row"><?php echo $dados['id']?></th>
						      <td><?php echo $dados['nome']?></td>
							  <td><?php echo $dados['cpf']?></td>
							  <td><?php echo $dados['cnh']?></td>
						      <td><?php echo $dados['email']?></td>
						      <td><?php echo $dados['telefone']?></td>
                              <td><a href="../editaCaminhoneiro.php?id=<?php echo $dados['id']?>" class="btn btn-warning">Editar</a></td>
                              <td><a href="../excluiCaminhoneiro.php?id=<?php echo $dados['id']?>" class="btn btn-danger">Excluir</a></td>
						    </tr>
                            <?php } ?>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

