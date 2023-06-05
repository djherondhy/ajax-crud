<?php
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Origin: *");

    require_once 'config/conection.php';

    //recebe os dados JSON
    $jsonData = $_POST['data'];

    //decodifica os dados
    $data = json_decode($jsonData,true);

    $nome = $data['nome'];
    $email = $data['email'];

    //Insere dados na Base de Dados
    $sql = "INSERT INTO `cliente` (`nome_cliente`, `email_cliente`) VALUES (:nome, :email)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $res =  $stmt->execute();
    if($res){

        $response = array(
            "error" => false,
            "message"=> "Cadastrado com Sucesso"
        );
        echo json_encode($response);
    }else{
        $response = array(
            "error" => true,
            "message"=> "Erro ao cadastrar"
        );
        echo json_encode($response);
    }
    
  

?>