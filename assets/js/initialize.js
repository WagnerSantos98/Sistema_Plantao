//Inicialização sidenav do menu responsivo
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
});

//Inicialização tabs página de configuraçãoes e afins que se utilizam deste recurso
document.addEventListener('DOMContentLoaded', function(){
  var elems = document.querySelectorAll('.tabs');
  var instances = M.Tabs.init(elems);
});

//Inicialização modal
document.addEventListener('DOMContentLoaded', function(){
  var elems = document.querySelectorAll('.modal');
  var instances = M.Modal.init(elems);
});

//Inicialização select
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('select');
  var instances = M.FormSelect.init(elems);
});

//Inicialização collapsible
document.addEventListener('DOMContentLoaded', function(){
  var elems = document.querySelectorAll('.collapsible');
  var instances = M.Collapsible.init(elems);
});
//Inicialização floating action - tela equipe
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.fixed-action-btn');
  var instances = M.FloatingActionButton.init(elems, {
    direction: 'top',
    hoverEnabled: false
  });
});

//Inicializar dropdwn
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.dropdown-trigger');
  var instances = M.Dropdown.init(elems, options);
});

//Colorização dos requisitos minimos para senha
document.addEventListener("DOMContentLoaded", function(){

  document.forms[0].onsubmit = function(e){
     return val(e);
  }
  
  nova_senha.oninput = function(e){
     val(e);
  }
  
  function val(){
     v = nova_senha.value,
     cor = "#ffb5b5",
     filledColor = "#D8FFCD"
  
     // verifica se tem 6 caracteres ou mais
     if(v.match(/.{8,}/)){
        barra_caracter.style.backgroundColor = filledColor;
     }else{
        barra_caracter.style.backgroundColor = cor;
     }
  
     // verifica se tem ao menos uma letra maiúscula
     if(v.match(/[A-Z]{1,}/)){
        barra_maiuscula.style.backgroundColor = filledColor;
     }else{
        barra_maiuscula.style.backgroundColor = cor;
     }
      
    // verifica de tem ao menos uma letra minúscula
     if(v.match(/[a-z]{1,}/)){
        barra_minuscula.style.backgroundColor = filledColor;
     }else{
        barra_minuscula.style.backgroundColor = cor;
     }
  
     // verifica de tem ao menus um número
     if(v.match(/[0-9]{1,}/)){
        barra_number.style.backgroundColor = filledColor;
     }else{
        barra_number.style.backgroundColor = cor;
     }
    
    // verifica de tem ao menus um número
     if(v.match(/[~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<]/)){
        barra_especial.style.backgroundColor = filledColor;
     }else{
        barra_especial.style.backgroundColor = cor;
     }
  }
  });

//Adicionar imagem - tela administrar
const customButton = document.getElementById('customButton');
        const imageInput = document.getElementById('imageInput');
        const previewImage = document.getElementById('previewImage');

        // Ao clicar no botão personalizado, aciona o clique no campo de seleção de arquivo
        customButton.addEventListener('click', function() {
            imageInput.click();
        });

        imageInput.addEventListener('change', function() {
            const file = imageInput.files[0];
            if (file) {
                const reader = new FileReader();

                reader.addEventListener('load', function() {
                    previewImage.src = reader.result;
                    previewImage.style.display = 'inline'; // Exibe a imagem
                });

                reader.readAsDataURL(file);
            }
        });

//Gerador de senha aleatória
function generateRandomPassword(length){
  const caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+~`|}{[]:;?><,./-=';
  let senha = '';
  for(let i = 0; i < length; i++){
    const randomIndex = Math.floor(Math.random() * caracteres.length);
    senha += caracteres.charAt(randomIndex);
  }
  return senha;
}

function generateSenha(){
  const generateRandomPasswordInput = document.getElementById('generatedSenha');
  generateRandomPasswordInput.value = generateRandomPassword(12);
}





