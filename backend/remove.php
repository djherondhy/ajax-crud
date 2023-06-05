<?php
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Origin: *");

    require_once 'config/conection.php';

    $dataJson = $_POST['data'];
    $data = json_decode($dataJson, true);

    $tabela = $data['tabela'];
    $id = $data['id'];

    $sql = "DELETE FROM `$tabela` WHERE `id_cliente` = $id";
    $stmt = $conn->prepare($sql);

    if($stmt->execute()){
        $response = array(
            "error"=> false,
            "message" => "Excluido com Sucesso"
        );
        echo json_encode($response);
    }else{
        $response = array(
            "error"=> true,
            "message" => "Falha ao excluir"
        );
        echo json_encode($response);
    }

?>