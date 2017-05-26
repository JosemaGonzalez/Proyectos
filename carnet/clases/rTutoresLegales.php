<?php
class RTutoresLegales
{
    private static $instancia;
    private $dbh;

    private function __construct()
    {
    	try {
            $this->dbh = new PDO('mysql:host=localhost;dbname=2daw1617_gopejo', '2daw1617_gopejo', 'ies_0955');
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
    public function get_alumnostutor($id)
    {
        try {
            $query = $this->dbh->prepare('select a.id, a.nombre, a.apellido1, a.apellido2 from alumnos a,tutoreslegales t,rtutoreslegalesalumnos r where a.id = r.IdAlumno and t.id = r.idTutorLega and t.idUsuario="'.$id.'"');
            $query->execute();
            $resultado=$query->fetchAll();
            return($resultado);
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
