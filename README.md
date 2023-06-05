# CRUD Clientes com PHP e AJAX

Este é um projeto de CRUD (Create, Read, Update, Delete) de Clientes desenvolvido utilizando PHP e AJAX para realizar as requisições sem refresh na página.
![image](https://github.com/djherondhy/ajax-crud/assets/35778998/d41a4dd2-3e2c-4f7d-a50d-dd6a16062516)


## :rocket: Funcionalidades

As Funcionalidades deste simples projeto incluem:
- Listagem de Clientes
- Cadastro de Cliente (Nome e Email)
- Exclusão de Clientes
- Busca de Clientes

## 🛠️ Tecnologias

- PHP
- JQuery/ Ajax
- HTML
- CSS
- Javascript
- MySQL

## 🔧 Configuração do Banco de Dados

Para rodar em máquina local é necessário a instalação de um servidor para rodar o MySQL.
Para configurar a conexão:
1. Crie o banco de dados para o projeto.
2. Importe a tabela do arquivo ajax-crud.sql
3. Altere o nome do banco de dados no arquivo de conexão.

```php
<?php
// connection.php
 $conn = new PDO('mysql:host=localhost:3306;dbname=nome_do_banco;','root','');
```

## ⚙️Executanto
Siga as etapas abaixo para executar o projeto em seu ambiente local:

1. Clone este repositório para o seu diretório de projetos.
2. Certifique-se de ter o PHP e um servidor web instalados em seu ambiente.
3. Configure as informações de conexão com o banco de dados, conforme explicado anteriormente.
4. Inicie o servidor web e acesse o projeto no navegador.
