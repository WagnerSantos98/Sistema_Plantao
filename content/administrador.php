<?php
  include_once('../config/db/conexao.php');
  session_start();

  $sql_funcao_return = "SELECT idFuncao, nome_funcao FROM tb_funcoes";
  $result_funcao = mysqli_query($con, $sql_funcao_return);

  $sql_trabalho_return = "SELECT idLocal, nome_local FROM tb_locais";
  $result_trabalho = mysqli_query($con, $sql_trabalho_return);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Compilação CSS - Materialize-->
    <link rel="stylesheet" href="../assets/libs/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="../assets/css/menu.css">
    <!--Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Compilação JS Materialize-->
    <script src="../assets/libs/materialize/js/materialize.min.js"></script>

    <!--JQuery - ViaCEP-->
    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    
    <title>Document</title>

    
</head>
<body>

    <!--Navbar-->
    <nav>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">Logo</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#!">Dashboard</a></li>
            <li><a href="#!">Plantões</a></li>
            <li><a href="#!">Equipes</a></li>
            <li><a href="#!">Relatórios</a></li>
            <li><a href="#!" class="active">Administrador</a></li>
            <li><a href="#!"><i class="material-icons">logout</i></a></li>
          </ul>
        </div>
      </nav>
      <!--Navbar-->

    <!--Sidenav-->
    <ul id="slide-out" class="sidenav">
        <li><div class="user-view">
          <div class="background">
            <img src="../assets/libs/materialize/img/office.jpg">
          </div>
          <a href="#user"><img class="circle" src="../assets/libs/materialize/img/yuna.jpg"></a>
          <a href="#name"><span class="white-text name">John Doe</span></a>
          <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
        </div></li>
        <div class="menu">
            <li><a href="#!"><i class="material-icons">apps</i> Dashboard</a></li>
            <li><a href="#!"><i class="material-icons">calendar_month</i> Plantões</a></li>
            <li><a href="#!"><i class="material-icons">groups</i>Equipes</a></li>
            <li><a href="#!"><i class="material-icons">query_stats</i>Relatórios</a></li>
            <li><a href="#!" class="active"><i class="material-icons">settings</i>Administrador</a></li>
            <li class="divider"></li>
            <div class="menu-exit">
                <li><a href="#!"><i class="material-icons">logout</i>Logout</a></li>
            </div>
        </div>
      </ul>
     <!--Sidenav--> 
      
     <!--Tabs-->
      <div class="main">
        <div class="container">
            <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s6">
                      <input placeholder="Pesquisar usuários" id="first_name" type="text" class="validate">
                    </div>
                  </div>
                </form>
              </div>
            <div class="row">
                <div class="col s12">
                  <ul class="tabs">
                    <li class="tab col s3"><a href="#usuarios">Usuários</a></li>
                    <li class="tab col s3"><a href="#configuracoes">Configurações</a></li>
                  </ul>
                </div>

                <!--Lista de Uusários-->
                <div id="usuarios" class="col s12">
                    <table>
                        <thead>
                          <tr>
                             <th><label>
                                <input type="checkbox"/>
                                <span></span>
                                </label></th>
                              <th>Nome</th>
                              <th>Email</th>
                              <th>
                                <div class="input-field col s6">
                                    <select>
                                        <option selected>Todos</option>
                                        <option>Colaborador</option>
                                        <option>Administrador</option>
                                        <option>Plantonista</option>
                                        <option>Enfermeiro</option>
                                      </select>
                                      <label>Função</label>
                                </div>
                              </th>
                              <th>
                                <label>Status</label>
                                <div class="switch">
                                <label>
                                  Inativo
                                  <input type="checkbox" checked>
                                  <span class="lever"></span>
                                  Ativo
                                </label>
                              </div></th>
                              <th><a href="#!"><i class="material-icons btn-edit">edit</i></a></th>
                              <th><a href="#!"><i class="material-icons btn-delete">delete</i></a></th>
                          </tr>
                        </thead>
                
                        <tbody>
                          
                        </tbody>
                      </table><br>
                      
                      <ul class="pagination">
                        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                        <li class="active selected-option"><a href="#!">1</a></li>
                        <li class="waves-effect"><a href="#!">2</a></li>
                        <li class="waves-effect"><a href="#!">3</a></li>
                        <li class="waves-effect"><a href="#!">4</a></li>
                        <li class="waves-effect"><a href="#!">5</a></li>
                        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                      </ul>
                </div>

                <!--Configurações-->
                <div id="configuracoes" class="col s12">Configurações</div>
            </div>

            <!--Floatingbuttons - Inserção de novos usuários, locais de trabalho e função-->
            <div class="fixed-action-btn horizontal click-to-toggle spin-close">
              <a class="btn-floating btn-large blue"> 
              <i class="material-icons">apps</i>
              </a>
              <ul>
              <li title="Local de Trabalho"><a class="waves-effec waves-light btn-floating red modal-trigger" href="#modal-local"><i class="material-icons">business</i></a></li>
              <li title="Usuário"><a class="waves-effec waves-light btn-floating green modal-trigger" href="#modal-usuario"><i class="material-icons">add</i></a></li>
              <li title="Equipe"><a class="waves-effec waves-light btn-floating yellow darken-1 modal-trigger" href="#modal-funcao"><i class="material-icons">group_add</i></a></li>
              </ul>
            </div>

            
            
        </div>
      </div>
    <!--Tabs-->

    <!--Modal de cadastro de usuário-->
    <div id="modal-usuario" class="modal">
        <div class="modal-content">
        <h5 class="title">Novo usuário</h5>
        <div class="row">
            <form action="../config/db/cadastro.php" method="POST">
              <div class="row">
                <div class="input-field col s8">
                  <input id="nome" name="nome" type="text" class="validate">
                  <label for="nome">Nome completo*</label>
                </div>
                <div class="input-field col s4">
                  <input id="email" name="email" type="email" class="validate">
                  <label for="email">Email*</label>
                </div>
                <div class="input-field col s4">
                  <select name="funcao">
                    <option value="" selected disabled>Selecione</option>
                    <?php
                    while($row = mysqli_fetch_assoc($result_funcao)){
                      echo "<option value=" . $row['idFuncao'] . "'>" . $row['nome_funcao'] . "</option>";
                    }
                    ?>
                  </select>
                    <label>Função</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <select name="local_trabalho">
                    <option value="" selected disabled>Selecione</option>
                    <?php
                    while($row = mysqli_fetch_assoc($result_trabalho)){
                      echo "<option value=" . $row['idLocal'] . "'>" . $row['nome_local'] . "</option>";
                    }
                    ?>
                  </select>
                  <label>Local de Trabalho*</label>
                </div>
                <div class="input-field col s6">
                  <input id="identificador" name="identificador" type="text" class="validate">
                  <label for="identificador">Identificador interno*</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s3">
                    <input id="contato" name="contato" type="text" class="validate">
                    <label for="contato">Contato*</label>
                  </div>
                  <div class="input-field col s3">
                    <input id="cpf" name="cpf" type="text" class="validate">
                    <label for="cpf">CPF*</label>
                  </div>
                  <div class="input-field col s3">
                    <input id="generatedSenha" name="senha_temp" type="text" class="validate">
                    <labe>Senha Temporária*</label>
                  </div>
                  <div class="input-field col s3">
                    <a class="waves-effect waves-light btn" onclick="generateSenha()"><i class="material-icons">lock</i></a>
                  </div>
              </div>
              <div class="row">
                <button type="submit" class="waves-effect waves-green btn blue btn-save" name="btn_salvar_usuario">Salvar</button>
                <a href="#!" class="modal-close waves-effect waves-light btn-flat btn-cancel" >Cancelar</a>
              </div>
            </form>
          </div>
        </div>
        
        
    </div>

    <!--Modal - Adicionar função-->
        <div id="modal-funcao" class="modal">
            <div class="modal-content">
            <h4>Nova função</h4>
            
            <div class="row">
              <form action="../config/db/cadastro.php" method="POST">
                <div class="input-field col s12">
                    <input id="funcao" name="nome_funcao" type="text" class="validate">
                    <label for="funcao">Nome da função</label>
                </div>
                <div class="row">
                    <button type="submit" class="waves-effect waves-green btn blue btn-save" name="btn_salvar_funcao">Salvar</button>
                    <a href="#!" class="modal-close waves-effect waves-light btn-flat btn-cancel" >Cancelar</a>
                </div>
              </form>
            </div>
            </div>
            
        </div>

        <!--Modal - Adicionar Local de trabalho-->
        <div id="modal-local" class="modal">
            <div class="modal-content">
            <h4>Local de trabalho</h4>
            <div class="row">
              <form action="../config/db/cadastro.php" method="POST">
              <div class="row">
                  <div class="input-field col s8">
                      <input id="nome_local" name="nome_local" type="text" class="validate">
                      <label for="nome_local">Nome do local de trabalho</label>
                  </div>
                  <div class="input-field col s3">
                      <input id="cep" name="cep" type="text" class="validate" maxlength="9">
                      <label for="cep">CEP</label>
                  </div>
              </div>
              <div class="row">
                  <div class="input-field col s8">
                      <input id="rua" name="rua" type="text" class="validate">
                  </div>
                  <div class="input-field col s4">
                      <input id="bairro" name="bairro" type="text" class="validate">
                  </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                    <input id="cidade" name="cidade" type="text" class="validate">
                </div>
                <div class="input-field col s1">
                    <input id="uf" name="uf" type="text" class="validate">
                </div>
                <div class="input-field col s3">
                  <input id="numero" name="numero" type="text" class="validate">
                  <label for="numero">Número</label>
                </div>
              </div>
              <div class="row">
                <button type="submit" class="waves-effect waves-light btn blue btn-save" name="btn_salvar_local">Salvar</button>
                <a href="#!" class="modal-close waves-effect waves-green btn-flat btn-cancel">Cancelar</a>
              </div>
            </form>
            </div>            
        </div>

<!--Script's-->
<script src="../assets/js/initialize.js"></script>
<script src="../assets/js/viacep.js"></script>
</body>
</html>