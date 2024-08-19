
        // MOSTRA O FORMULÁRIO AO CLICAR NO BOTÃO DA NAVBAR
        document.getElementById('forms_membros').addEventListener('click', function(event) {
            event.preventDefault();
            var formulario = document.querySelector('.forms');
            var membros = document.querySelector('.membros');
            var editar = document.querySelector('.editar');
            // var form_editar = document.querySelector('.form_editar');
            if(formulario.style.display == 'block'){
                formulario.style.display = 'none';
            }
            else{
                // form_editar.style.display = 'none';
                editar.style.display = 'none';
                membros.style.display = 'none';
                formulario.style.display = 'block';
            }  
        });

        // EXIBE A TABELA DE PARTICIPANTES AO CLICAR NO BOTÃO DA NAVBAR
        document.getElementById('carregar_membros').addEventListener('click', function(event) {
            event.preventDefault();
            var formulario = document.querySelector('.forms');
            var membros = document.querySelector('.membros');
            var editar = document.querySelector('.editar');
            // var form_editar = document.querySelector('.form_editar');
            if(membros.style.display == 'block'){
                membros.style.display = 'none';
            }
            else{
                // form_editar.style.display = 'none';
                editar.style.display = 'none';
                formulario.style.display = 'none';
                membros.style.display = 'block';
            }  
        });


        // EXIBE O FORMULÁRIO PARA EDITAR MEMBRO AO CLICAR NO BOTÃO DA NAVBAR
        document.getElementById('editar_membro').addEventListener('click', function(event) {
            // event.preventDefault();
            var editar = document.querySelector('.editar');
            var formulario = document.querySelector('.forms');
            var membros = document.querySelector('.membros');
            var form_editar = document.querySelector('.form_editar');
            if(editar.style.display == 'block'){
                editar.style.display = 'none';
            }
            else{
                editar.style.display = 'block';
                formulario.style.display = 'none';
                membros.style.display = 'none';
                form_editar.style.display = 'none';
            }  
        });


        // EXIBE O FORMULÁRIO PARA EDITAR UM MEMBRO
        document.getElementById('editar2').addEventListener('click', function(event){
            // event.preventDefault();
            var form_editar = document.querySelector('.form_editar');
            var editar = document.querySelector('.editar');
            editar.style.display = 'none';
            form_editar.style.display = 'block';
        });


        // SCRIPT PARA ENVIAR O ID DO MEMBRO A SER EDITADO VIA AJAX
    