

$('#cliente-form').submit(function(event){
    
    event.preventDefault();
    var dados = {
        nome: $('#nome').val(),
        email: $('#email').val()
    }

    function limpar(){
      $('#nome').val('');
      $('#email').val('');
    }

    var dadosJson = JSON.stringify(dados);
  

    $.ajax({
        url: "backend/insert.php",
        type: "POST",
        data: {data: dadosJson} ,
        dataType: "json",
        success: function(response) {
          console.log(response);
          notify(response.message);
          limpar();
          getClientes();
        },
        error: function(xhr, status, error) {
            console.log(error);
        }
      });

})