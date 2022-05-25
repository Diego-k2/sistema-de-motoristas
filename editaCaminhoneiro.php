<?php 

        include_once "database.php";


        $id = $_GET["id"];

        $sql = "SELECT * FROM ads_diego_controle_motoristas WHERE id = $id";


        $resultado = mysqli_query($conexao, $sql);
        
        $dados = mysqli_fetch_array($resultado);

?>


<?php require_once "head.php";?>

<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="updateCaminhoneiro.php" method="POST">
					<span class="login100-form-title p-b-26">
						Editar Caminhoneiro
					</span>
					<span class="login100-form-title p-b-48">
						<img src="https://img.icons8.com/dotty/80/000000/add-administrator.png"/>
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Digite seu nome">
                        <label class="form-label">Identificador</label>
						<input class="input100" type="text" name="id" value="<?php echo $dados['id']?>" readonly>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Digite seu nome">
                        <label class="form-label">Nome</label>
						<input class="input100" type="text" name="nome" value="<?php echo $dados['nome']?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Digite seu CPF">
                        <label class="form-label">CPF</label>
						<input class="input100" type="text" name="cpf" value="<?php echo $dados['cpf']?>">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Digite sua CNH">
                        <label class="form-label">CNH</label>
						<input class="input100" type="text" name="cnh" value="<?php echo $dados['cnh']?>">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Um email válido é: exemplo@exemplo.com">
                        <label class="form-label">Email</label>
						<input class="input100" type="email" name="emailCami" value="<?php echo $dados['email']?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Um telefone válido é (11)9999-9999">
                        <label class="form-label">Telefone</label>
						<input class="input100" type="text" name="telefone" value="<?php echo $dados['telefone']?>">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Faça as alterações
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Tem uma conta?
						</span>

						<a class="txt2" href="index.php">
							Acesse aqui
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>


	<?php require_once "script.php";?>

</body>
</html>