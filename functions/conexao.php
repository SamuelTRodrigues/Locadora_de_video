<?php
function conectarBanco(){
    define("HOST", "localhost");
    define("BD", "locadora");
    define("USER", "root");
    define("PASS", "");
    try{
        $dsn ="mysql:host=".HOST. ";dbname=".BD;
        $pdo = new PDO($dsn, USER, PASS,);
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    
    
    }catch(PDOException $e){
        echo "Erro: ".$e->getMessage(); 


    }
    return $pdo;

}

?>