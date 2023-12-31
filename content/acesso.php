<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Adicione os links para os arquivos CSS do Materialize -->
  <link rel="stylesheet" href="../assets/libs/materialize/css/materialize.min.css">
  <link rel="stylesheet" href="../assets/css/menu.css">

  <!-- Importe o jQuery (necessário para o Materialize) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Importe os arquivos JS do Materialize -->
  <script src="../assets/libs/materialize/js/materialize.min.js"></script>
    <title>Document</title>
</head>
<body>
    <!-- Estrutura básica da modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
          <h4>Alterar senha</h4>
          <form class="col s12">
            <div class="row">
              <p>A nova senha deve ter os seguintes requisitos:</p>
              <li>Pelo menos um número <div class="box-barra" id="barra_number"></div></li>
              <li>Pelo menos 8 caracteres <div class="box-barra" id="barra_caracter"></div></li>
              <li>Pelo menos um caracter maiúsculo <div class="box-barra" id="barra_maiuscula"></div></li>
              <li>Pelo menos um caracter minúsculo <div class="box-barra" id="barra_minuscula"></div></li>
              <li>Pelo menos um caracter não alfanuméricos <div class="box-barra" id="barra_especial"></div></li>      
              <div class="input-field col s6">
                <input id="senha_atual" type="password" class="validate">
                <label for="senha_atual">Senha atual</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input id="nova_senha" type="password" class="validate">
                <label for="nova_senha">Nova senha</label>
              </div>
              <div class="input-field col s6">
                <input id="confirm_senha" type="password" class="validate">
                <label for="confirm_senha">Confirmar senha</label>
              </div>
            </div>
          </form>
        </div>
      </div>
      
  

      <script>
        // Inicializa a modal
  $(document).ready(function(){
    $('.modal').modal();
  });

  // Abre a modal automaticamente quando o documento for carregado
  $(window).on('load', function() {
    $('#myModal').modal('open');
  });
      
  $(document).ready(function(){
    $('.modal').modal({
      dismissible: false // Impede que a modal seja fechada clicando fora dela
    });
  });

  // Função para alterar a senha
  function alterarSenha() {
    // Obter os valores dos campos de senha
    var currentPassword = $('#currentPassword').val();
    var newPassword = $('#newPassword').val();
    var confirmPassword = $('#confirmPassword').val();

    // Verificar se a nova senha e a confirmação são iguais
    if (newPassword !== confirmPassword) {
      alert('A nova senha e a confirmação devem ser iguais.');
      return;
    }
    var senhaAtualizadaComSucesso = true;
    
    if (senhaAtualizadaComSucesso) {
      alert('Senha alterada com sucesso!');
      
      // Fechar a modal após a alteração de senha bem-sucedida
      $('#myModal').modal('close');
    } else {
      alert('Falha ao alterar a senha. Tente novamente.');
    }
  }
      </script>
      
      <script src="../assets/js/initialize.js"></script> 
</body>
</html>