<?php
class Respuesta
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

    public function sel_respuesta_max()
    {
        try {
            $query = $this->dbh->prepare('select MAX(id) as id from ej1_respuestas');
            $query->execute();

            $resultado=$query->fetch();
            return($resultado);
            //$this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function ins_respuesta($id,$idpregunta,$respuesta)
    {
       try {
            $query = $this->dbh->prepare('insert into ej1_respuestas (id,idpregunta,respuesta) values (?,?,?)');
            $query->bindParam(1, $id);
            $query->bindParam(2, $idpregunta);
            $query->bindParam(3, $respuesta);
            $query->execute();
            //$this->dbh = null;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function get_respuesta($id)
    {
        try {
            $query = $this->dbh->prepare('select * from ej1_respuestas where idpregunta='.$id);
            $query->execute();

            $resultado=$query->fetch(PDO::FETCH_ASSOC);

            return($resultado);
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function get_respuestas()
    {
        try {
            $query = $this->dbh->prepare('select * from ej1_respuestas');
            $query->execute();

            $resultado=$query->fetchAll();

            return($resultado);
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
