<?php
//cabeçalhos


try{
    $conn = new PDO('mysql:host=localhost:3306;dbname=ajax-crud;','root','');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

    if($conn){
        $info = array (
            "error"=> false,
            "message"=> 'Conectado'
        );
       
    }else{
        $info = array (
            "error"=> true,
            "message"=> 'Conectado'
        );
       
    }
}catch(PDOException $e){
   
}
?>