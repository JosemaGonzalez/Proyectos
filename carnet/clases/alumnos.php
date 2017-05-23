<?php
class Alumnos
{
    private static $instancia;
    private $dbh;

    private function __construct()
    {
    	try {
            $this->dbh = new PDO('mysql:host=localhost;dbname=cnv', 'root', '');
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
    public function get_alumnosgrupo($id)
    {
        try {
            $query = $this->dbh->prepare('select id,nombre,apellido1,apellido2 from alumnos where grupo="'.$id.'"');
            $query->execute();
            $resultado=$query->fetchAll();
            return($resultado);
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function get_alumno_DNI($id)
    {
        try {
            $query = $this->dbh->prepare('select id,grupo from alumnos where nie="'.$id.'"');
            $query->execute();

            $resultado=$query->fetch();

            return($resultado);
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function get_alumno($id)
    {
        try {
            $query = $this->dbh->prepare('select nombre,apellido1,apellido2,foto,puntos,grupo from alumnos where id='.$id);
            $query->execute();
            $resultado=$query->fetch();

            return($resultado);
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
