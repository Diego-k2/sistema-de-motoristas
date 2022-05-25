
<?php require_once "head.php";?>


<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="loginUser.php" method="POST">
					<span class="login100-form-title p-b-26">
						Bem vindo
					</span>
					<span class="login100-form-title p-b-48">
						<img src="https://img.icons8.com/dotty/80/000000/order-on-the-way.png"/>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Um email válido é: exemplo@exemplo.com">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="senha" name="pass">
						<span class="focus-input100" data-placeholder="Senha"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Você não tem uma conta?
						</span>

						<a class="txt2" href="cadastro.php">
							Crie uma
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