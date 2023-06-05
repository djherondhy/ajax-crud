

$('.modal').hide();//Esconde Popup

$('.close-btn').click(function(){
  $('.modal').fadeOut('slow');
});//Fecha Popup

//configura popup de notificação
function notify(message){
  $('.modal').fadeIn('slow');
  $('.message').remove('.message');
  $('.modal').append('<p class="message">'+message+'</p>');
}

//busca e popula os clientes
function getClientes(){

    $.ajax({
        url: "backend/select.php",
        type: "POST",
        data: {tabela: 'cliente'} ,
        dataType: "json",
        success: function(response) {
            console.log(response);

        
            //remove anteriores e permanece apenas a primeira tr
            $('#cliente-table tr').slice(1).remove();

            //popula dados na tabela
            for(var i = 0; i< response.length; i++){
                $("#cliente-table").append('<tr>'
                +'<td class="content">'+response[i].nome_cliente+'</td>'
                +'<td class="content">'+response[i].email_cliente+'</td>'
                +'<td class="content">'
                +'<button onclick = "remove('+response[i].id_cliente+')">Remover</button>'
                +'</td>'
                +'</tr>'
                );
            }
           
           
           
        },
        error: function(xhr, status, error) {
            console.log(error);
        }
    })
}

//remove elemento e atualiza lista
function remove(id_cliente){
   var dados = {
        'tabela': 'cliente',
        'id': id_cliente
   }
   var dadosJson = JSON.stringify(dados)
    $.ajax({
        url: 'backend/remove.php',
        data: {data: dadosJson},
        method: 'POST',
        dataType: 'json',
        success: function(response){
            notify(response.message);
            getClientes();
            console.log(response);
        },
    error: function(xhr, status, error){
        console.log(error);
    }
});
}


$('#busca').focusin(function(){
    $('#busca').keyup(function(){
        var str_busca = $(this).val();
        var dados = {
            'busca': str_busca,
            'tabela': 'cliente'
        };

        var dadosJson = JSON.stringify(dados);

        $.ajax({
            url: 'backend/selectWhere.php',
            data: {data: dadosJson},
            method: 'POST',
            dataType: 'json',
            success: function(response){
                console.log(response);
                $('#cliente-table tr').slice(1).remove();
                
                if(response.length == 0){
                    $("#cliente-table").append('<p>Nenhum Cliente Encontrado!</p>');
                    $('#cliente-table p').slice(1).remove();
                }else{
                    $('#cliente-table p').remove();
                }

                for(var i = 0; i< response.length; i++){
                    $("#cliente-table").append('<tr>'
                    +'<td class="content">'+response[i].nome_cliente+'</td>'
                    +'<td class="content">'+response[i].email_cliente+'</td>'
                    +'<td class="content">'
                    +'<button onclick = "remove('+response[i].id_cliente+')">Remover</button>'
                    +'</td>'
                    +'</tr>'
                    );
                }
            }
        });

    })
})
getClientes();