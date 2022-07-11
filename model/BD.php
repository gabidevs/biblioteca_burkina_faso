<?php
require_once('config.php');

class BD {
    private static $pdo;

    public static function conectar() {
        if(self::$pdo == null) {
            try {
                self::$pdo = new PDO('mysql:host='.SERVIDOR.';dbname='.BANCO,USUARIO,SENHA);

                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $erro) {
                echo "Falha ao conectar com o banco de dados: ".$erro->getMessage();
            }
        }

        return self::$pdo;
    }

    public static function prepare($sql) {
        return self::conectar()->prepare($sql);
    }
}