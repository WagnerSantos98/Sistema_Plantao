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



//FullCalendar
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      locale: 'pt-br',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth'
      },
      initialDate: '2023-01-12',
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectMirror: true,
      select: function(arg) {
        var title = prompt('Event Title:');
        if (title) {
          calendar.addEvent({
            title: title,
            start: arg.start,
            end: arg.end,
            allDay: arg.allDay
          })
        }
        calendar.unselect()
      },
      eventClick: function(arg) {
        if (confirm('Are you sure you want to delete this event?')) {
          arg.event.remove()
        }
      },
      editable: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2023-01-01'
        },
        {
          title: 'Long Event',
          start: '2023-01-07',
          end: '2023-01-10'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2023-01-09T16:00:00'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2023-01-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2023-01-11',
          end: '2023-01-13'
        },
        {
          title: 'Meeting',
          start: '2023-01-12T10:30:00',
          end: '2023-01-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2023-01-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2023-01-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2023-01-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2023-01-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2023-01-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2023-01-28'
        }
      ]
    });

    calendar.render();
});

