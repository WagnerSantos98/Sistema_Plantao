<?php 

include_once('../db/conexao.php');
session_start();
error_reporting(0);


if (isset($_POST['btn_acessar'])) {
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$sql = "SELECT * FROM tb_usuarios WHERE email = '$email' AND senha_temp = '$senha'";
	$result = mysqli_query($con, $sql);
	if ($result->num_rows > 0) {
		header("Location: acesso.php");
	} else {
		echo "<script>alert('Ooops! E-mail ou senha incorretos. ')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Compilação CSS - Materialize-->
    <link rel="stylesheet" href="../assets/libs/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="../assets/css/login.css">

    <!--Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Compilação JS Materialize-->
    <script src="../assets/libs/materialize/js/materialize.min.js"></script>

    <title>Document</title>
</head>
<body>
    <!--Login-->
    <div id="login-page" class="row">
        <div class="col s12 z-depth-6 card-panel">
          <form action="" class="login-form" method="POST">
            <div class="row">
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">mail_outline</i>
                <input class="validate" id="email" type="email" name="email" value="<?php echo $email ?>">
                <label for="email" data-error="wrong" data-success="right">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">lock_outline</i>
                <input id="senha" type="password" name="senha" value="<?php echo $senha; ?>">
                <label for="senha">Senha</label>
              </div>
            </div>
            <div class="row">          
              <div class="input-field col s12 m12 l12  login-text">
                  <input type="checkbox" id="remember-me" />
                  <label for="remember-me">Lembrar de mim</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
              <button class="btn waves-effect waves-light col s12" name="btn_acessar">Acessar</button>
              </div>
            </div>
            <div class="row">
              <div class="input-field">
                  <p class="margin right-align medium-small"><a href="#modal-esqueci" class="modal-trigger">Esqueceu a senha?</a></p>
              </div>          
            </div>
          </form>
        </div>

        <div id="modal-esqueci" class="modal modal-esqueci">
          <div class="modal-content">
            <h4>Esqueci a senha</h4>
            <form action="">
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">mail_outline</i>
                  <input class="validate" id="email" type="email">
                  <label for="email" data-error="wrong" data-success="right">Email</label>
                </div>
              </div>
              <div class="row">
              <button class="btn waves-effect waves-light col s12">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>

<!--Script's-->
<script src="../assets/js/initialize.js"></script>

</body>
</html>