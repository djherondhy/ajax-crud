<?php
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.7.0.min.js"></script>
    <title>CRUD CLient</title>
</head>

<body>
    <div class="modal">
        <div class="modal-header">
            <p>Nova Mensagem</p>
            <button class="close-btn">x</button>
        </div>
        <p class="message">Cadastrado com Sucesso</p>
    </div>
    <section>
        <h2>Cadastro de Clientes</h2>
        <form action="" method="post" class="cliente-form" id="cliente-form">
            <div class="input-agroup">
                <label for="">Nome</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div class="input-agroup">
                <label for="">E-mail</label>
                <input type="text" name="email" id="email" required>
            </div>
            <div class="input-agroup">
                <input type="submit" value="Salvar">
            </div>

        </form>
    </section>
    <section >
        <h2>Listagem</h2>
        <div class="busca">
            <input type="text" id="busca" placeholder="Digite um nome para Busca">
        </div>
        <table id="cliente-table">
            <tr>
                <td>Nome</td>
                <td>E-mail</td>
                <td>Ações</td>
            </tr>
            
        </table>
    </section>
    <script src="backend/js/gets.js"></script>
    <script src="backend/js/requests.js"></script>
   
</body>

</html>