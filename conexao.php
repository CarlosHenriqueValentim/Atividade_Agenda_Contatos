<?php

class Conexao{

    public static $conn;
    public static $senha = "root";
    public static $user = "root";

    public static function getConexao(){
        if(!isset(self::$conn)){
            self::$conn = new PDO(
                'mysql:host=localhost;dbname=bd_agenda_contatos;charset=utf8',
                self::$user,
                self::$senha
            );
        }
        return self::$conn;
    }
}

?>