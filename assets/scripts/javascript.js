// SCRIPTS PARA EXIBIR AS SEÇÕES A PARTIR DA NAVBAR

// HOME
document.getElementById('forms_membros').addEventListener('click', function(event) {
    event.preventDefault();
    var formulario = document.querySelector('.forms');
    var home = document.querySelector('.home');
    var membros = document.querySelector('.membros');
    var editar = document.querySelector('.editar');
    var apagar = document.querySelector('.apagar');

    // Esconder todas as seções
    home.style.display = 'none';
    membros.style.display = 'none';
    editar.style.display = 'none';
    apagar.style.display = 'none';

    // Mostrar o formulário de membros
    formulario.style.display = 'block';
});


// REGISTRO DE MEMBROS
document.getElementById('home').addEventListener('click', function(event) {
    event.preventDefault();
    var formulario = document.querySelector('.forms');
    var home = document.querySelector('.home');
    var membros = document.querySelector('.membros');
    var editar = document.querySelector('.editar');
    var apagar = document.querySelector('.apagar');

    // Esconder todas as seções
    membros.style.display = 'none';
    editar.style.display = 'none';
    formulario.style.display = 'none';
    apagar.style.display = 'none';
    
    // Mostrar o formulário de membros
    home.style.display = 'block';
});


// Exibir membro
document.getElementById('carregar_membros').addEventListener('click', function(event) {
    event.preventDefault();
    var formulario = document.querySelector('.forms');
    var home = document.querySelector('.home');
    var membros = document.querySelector('.membros');
    var editar = document.querySelector('.editar');
    var apagar = document.querySelector('.apagar');

    // Esconder todas as seções
    editar.style.display = 'none';
    formulario.style.display = 'none';
    home.style.display = 'none';
    apagar.style.display = 'none';
    
    // Mostrar os membros
    membros.style.display = 'block';
});



// Editar membro
document.getElementById('editar_membro').addEventListener('click', function(event) {
    event.preventDefault();

    // Selecionando as seções
    var formulario = document.querySelector('.forms');
    var home = document.querySelector('.home');
    var membros = document.querySelector('.membros');
    var editar = document.querySelector('.editar');
    var apagar = document.querySelector('.apagar');
    
    // Esconder todas as seções
    formulario.style.display = 'none';
    home.style.display = 'none';
    membros.style.display = 'none';
    
    // Mostrar o formulário para editar e apagar membros
    editar.style.display = 'block';
    apagar.style.display = 'block';
});


// APAGAR MEMBRO
// document.getElementById('apagar_membro').addEventListener('submit', function(event){
//     event.preventDefault();
//     var formulario = document.querySelector('.forms');
//     var home = document.querySelector('.home');
//     var membros = document.querySelector('.membros');
//     var editar = document.querySelector('.editar');
//     var apagar = document.querySelector('apagar');

//     // Esconder todas as seções
//     formulario.style.display = 'none';
//     home.style.display = 'none';
//     membros.style.display = 'none';
//     editar.style.display = 'none';

//     // Mostrar o formulário para apagar
//     apagar.style.display = 'block';

// });