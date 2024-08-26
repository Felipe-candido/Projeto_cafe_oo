// SCRIPTS PARA EXIBIR AS SEÇÕES A PARTIR DA NAVBAR

// HOME
document.getElementById('forms_membros').addEventListener('click', function(event) {
    event.preventDefault();
    var formulario = document.querySelector('.forms');
    var home = document.querySelector('.home');
    var membros = document.querySelector('.membros');
    var editar = document.querySelector('.editar');

    // Esconder todas as seções
    home.style.display = 'none';
    membros.style.display = 'none';
    editar.style.display = 'none';

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

    // Esconder todas as seções
    membros.style.display = 'none';
    editar.style.display = 'none';
    formulario.style.display = 'none';
    
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

    // Esconder todas as seções
    editar.style.display = 'none';
    formulario.style.display = 'none';
    home.style.display = 'none';
    
    // Mostrar o formulário de membros
    membros.style.display = 'block';
});



// Editar membro
document.getElementById('editar_membro').addEventListener('click', function(event) {
    event.preventDefault();
    var formulario = document.querySelector('.forms');
    var home = document.querySelector('.home');
    var membros = document.querySelector('.membros');
    var editar = document.querySelector('.editar');
    
    // Esconder todas as seções
    formulario.style.display = 'none';
    home.style.display = 'none';
    membros.style.display = 'none';
    
    // Mostrar o formulário de membros
    editar.style.display = 'block';
});
