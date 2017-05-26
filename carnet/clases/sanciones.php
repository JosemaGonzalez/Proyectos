<?php
class Sanciones
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
    public function insertar_sancion($fecha,$fechaComunicacion,$fechaConfirmacion,$fechaInicio,$fechafinal,$sancion,$observaciones,$evaluacion,$puntosRecuperados,$tipo,$estado,$idAlumno)
    {
     try {
        $query = $this->dbh->prepare('insert into sanciones (fecha,fechaComunicacion,fechaConfirmacion,fechaInicio,fechafinal,sancion,observaciones,evaluacion,puntosRecuperados,tipo,estado,idAlumno) values (?,?,?,?,?,?,?,?,?,?,?,?)');
        $query->bindParam(1, $fecha);
        $query->bindParam(2, $fechaComunicacion);
        $query->bindParam(3, $fechaConfirmacion);
        $query->bindParam(4, $fechaInicio);
        $query->bindParam(5, $fechafinal);
        $query->bindParam(6, $sancion);
        $query->bindParam(7, $observaciones);
        $query->bindParam(8, $evaluacion);
        $query->bindParam(9, $puntosRecuperados);
        $query->bindParam(10, $tipo);
        $query->bindParam(11, $estado);
        $query->bindParam(12, $idAlumno);
        $query->execute();
            //$this->dbh = null;
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
    public function get_sancionesAlumno($id)
    {
        try {
            $query = $this->dbh->prepare('select sanciones.fecha, sanciones.sancion, sanciones.observaciones, sanciones.puntosRecuperados, sanciones.estado, sanciones.tipo from sanciones, usuarios where sanciones.idAlumno=usuarios.id AND  usuarios.id='.$id);
            $query->execute();

            $resultado=$query->fetchAll();

            return($resultado);
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
public function get_UltimaSancion()
{
    try {
        $query = $this->dbh->prepare('select id from sanciones ORDER BY id DESC LIMIT 1');
        $query->execute();

        $resultado=$query->fetch();

        return($resultado);
        $this->dbh = null;
    }catch (PDOException $e) {
        $e->getMessage();
    }
}

}
