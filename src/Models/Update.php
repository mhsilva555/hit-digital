<?php


namespace App\Models;

use App\Core\Database;

class Update extends  Database
{
    public static function set($content)
    {
        try {

            self::getInstance();
            $update = self::$_pdo->prepare("UPDATE home_content SET content = ? WHERE id = '1'");
            $update->execute([$content]);
            header("Location: ../painel");

        } catch (\PDOException $e) {
            echo 'Erro ao atualizar dados'.$e->getMessage();
        }

    }

    public static function get()
    {
        try {

            self::getInstance();
            $read = self::$_pdo->prepare("SELECT content FROM home_content WHERE id = ?");
            $read->execute([1]);
            $content = $read->fetch(\PDO::FETCH_ASSOC);

            echo $content['content'];

        } catch (\PDOException $e) {
            echo 'Erro ao realizar a consulta'.$e->getMessage();
        }

    }
}
