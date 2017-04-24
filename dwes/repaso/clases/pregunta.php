<?php
class Pregunta
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

    public function get_pregunta($id)
    {
        try {
            $query = $this->dbh->prepare('select * from ej1_preguntas where id='.$id);
            $query->execute();

            $resultado=$query->fetch(PDO::FETCH_ASSOC);

            return($resultado);
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function get_preguntas()
    {
        try {
            $query = $this->dbh->prepare('select * from ej1_preguntas');
            $query->execute();

            $resultado=$query->fetchAll();

            return($resultado);
            //$this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function sel_pregunta_max()
    {
        try {
            $query = $this->dbh->prepare('select MAX(id) as id from ej1_preguntas');
            $query->execute();

            $resultado=$query->fetch();
            return($resultado);
            //$this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
