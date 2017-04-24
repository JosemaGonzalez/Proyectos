<?php
class Marcador
{
    private static $instancia;
    private $dbh;

    private function __construct()
    {
    	try {
            $this->dbh = new PDO('mysql:host=localhost;dbname=bdex_3ev', 'root', '');
            $this->dbh->exec("SET CHARACTER SET utf8");
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
        }
    }

    public static function singleton()
    {
        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        }
        return self::$instancia;
    }

    public function anadir_marcador($usuario,$marcador)
    {
        try {
            $query = $this->dbh->prepare('insert into ej2_marcadores (usuario,marcador) values (?,?)');
            $query->bindParam(1, $usuario);
            $query->bindParam(2, $marcador);
            $query->execute();
            //$this->dbh = null;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function getTodosMarcadores()
    {
        try {
            $query = $this->dbh->prepare('select * from ej2_marcadores');
            $query->execute();

            $resultado=$query->fetchAll();

            return($resultado);
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function getMarcadoresUsuario($usuario)
    {
        try {
            $query = $this->dbh->prepare('select * from ej2_marcadores where usuario=\''.$usuario.'\'');
            $query->execute();

            $resultado=$query->fetchAll();

            return($resultado);
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function getMarcadoresRecomendados($usuario)
    {
        try {
            $query = $this->dbh->prepare('SELECT marcador, count(*) FROM ej2_marcadores WHERE marcador NOT IN(SELECT marcador FROM ej2_marcadores WHERE usuario =\''.$usuario.'\') GROUP BY marcador HAVING count(*) > 1');
            $query->execute();

            $resultado=$query->fetchAll();

            return($resultado);
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
