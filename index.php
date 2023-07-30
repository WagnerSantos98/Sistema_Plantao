<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Compilação CSS - Materialize-->
    <link rel="stylesheet" href="assets/libs/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="assets/css/menu.css">
    <!--Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Compilação JS Materialize-->
    <script src="assets/libs/materialize/js/materialize.min.js"></script>

    <!-- Importe o jQuery (necessário para o Materialize) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <title>Document</title>

    
</head>
<body>

    <!--Navbar - Menu Principal-->
    <nav>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">Logo</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.html" class="active">Dashboard</a></li>
            <li><a href="content/plantao.html">Plantões</a></li>
            <li><a href="content/equipe.html">Equipes</a></li>
            <li><a href="#!">Relatórios</a></li>
            <li><a href="content/administrador.html">Configurações</a></li>
            <li><a href="#modal-usuario" class="modal-trigger"><i class="material-icons">person</i></a></li>
            <li><a href="routes/logout.php"><i class="material-icons">logout</i></a></li>
          </ul>
        </div>
      </nav>
      <!--Navbar-->

    <!--Sidenav-->
    <ul id="slide-out" class="sidenav">
        <li><div class="user-view">
          <div class="background">
            <img src="assets/libs/materialize/img/office.jpg">
          </div>
          <a href="#user"><img class="circle" src="assets/libs/materialize/img/yuna.jpg"></a>
          <a href="#name"><span class="white-text name">John Doe</span></a>
          <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
        </div></li>
        <div class="menu">
            <li><a href="index.html"><i class="material-icons">apps</i> Dashboard</a></li>
            <li><a href="content/plantao.html"><i class="material-icons">calendar_month</i> Plantões</a></li>
            <li><a href="content/plantao.html"><i class="material-icons">groups</i>Equipes</a></li>
            <li><a href="#!"><i class="material-icons">query_stats</i>Relatórios</a></li>
            <li><a href="#modal-usuario" class="modal-trigger"><i class="material-icons">person</i>Usuário</a></li>
            <li><a href="content/administrador.html"><i class="material-icons">settings</i>Configurações</a></li>
            <li class="divider"></li>
            <div class="menu-exit">
                <li><a href="routes/logout.php"><i class="material-icons">logout</i>Logout</a></li>
            </div>
        </div>
      </ul>
     <!--Sidenav--> 
      
     <!--Cards-->
      <div class="main">
        <div class="container container-cards">
          <div class="row row-cards">
            <!--Card - Local de trabalho-->
            <div class="col s12 m6">
              <div class="card darken-1">
                <div class="card-content black-text">
                  <span class="card-title"><i class="material-icons"></i> Locais de Trabalho</span>
                  <div class="collection">
                    <a href="#!" class="collection-item"><span class="badge">1</span>UPA - Vila Davi</a>
                    <a href="#!" class="collection-item"><span class="badge">1</span> Santa Casa</a>
                  </div>
                </div>
              </div>
            </div><!--Card - Local de trabalho-->

            <!--Card - Equipe-->
            <div class="col s12 m6">
              <div class="card darken-1">
                <div class="card-content black-text">
                  <span class="card-title">Equipes</span>
                  <ul class="collapsible">
                    <li>
                      <div class="collapsible-header">
                        <i class="material-icons">groups</i>
                        <span>Plantonistas</span>
                        <span class="badge"><i class="material-icons">expand_more</i></span>
                      </div>
                      <div class="collapsible-body">
                        <table class="centered">
                          <thead>
                            <tr>
                              <th>Equipes</th>
                              <th>Qtde</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Plantonistas</td>
                              <td>1</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </li>
                    <li>
                      <div class="collapsible-header">
                        <i class="material-icons">groups</i>
                        <span>Enfermeiros</span>
                        <span class="badge"><i class="material-icons">expand_more</i></span>
                      </div>
                      <div class="collapsible-body">
                        <table class="centered">
                          <thead>
                            <tr>
                              <th>Equipes</th>
                              <th>Qtde</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Enfermeiros</td>
                              <td>1</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--Modal usuário-->
      <div id="modal-usuario" class="modal">

        <div class="modal-content">
          <h4>Perfil</h4>
          <a href="#user"><img class="circle" src="../assets/libs/materialize/img/yuna.jpg"></a>
          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="Placeholder" id="nome" type="text" class="validate">
                  <label for="nome">Nome</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <input placeholder="Placeholder" id="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
                <div class="input-field col s6">
                  <input id="contato" type="text" class="validate">
                  <label for="contato">Contato</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="cpf" type="text" class="validate">
                  <label for="cpf">CPF</label>
                </div>
                <i class="material-icons">lock</i><a href="#!" id="btnAlter">Alterar senha</a>
              </div>
            </form>
          </div>       

          <!--Div - oculta para alteração de senha-->
          <div class="row row-oculta" id="alterPassword">
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
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
      </div>

   

      <script src="assets/js/initialize.js"></script>
<script>
//Perfil usuário - ocultar e exibir div para alteração de senha
document.getElementById("btnAlter").addEventListener("click", function(){
  var divOculta = document.getElementById("alterPassword");
  if(divOculta.style.display === "none"){
    divOculta.style.display = "block";
  }else{
    divOculta.style.display = "none";
  }
});

 
</script>
</body>
</html>