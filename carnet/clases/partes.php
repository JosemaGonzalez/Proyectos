<?php
class Partes
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
     public function get_UltimoParte()
    {
        try {
            $query = $this->dbh->prepare('select id from partes ORDER BY id DESC LIMIT 1');
            $query->execute();

            $resultado=$query->fetch();

            return($resultado);
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function get_partes($id)
    {
        try {
            $query = $this->dbh->prepare('select fecha,descripcion,observaciones,puntos from partes where idAlumno="'.$id.'"');
            $query->execute();
            $resultado=$query->fetchAll();
            return($resultado);
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function get_partesAlumnoSancion($id)
    {
        try {
            $query = $this->dbh->prepare('select partes.fecha, partes.descripcion, partes.observaciones, partes.puntos, partes.estado, partes.tipo, partes.id, profesores.nombre, profesores.apellido1, profesores.apellido2  from partes, profesores, usuarios where partes.idAlumno=usuarios.id AND partes.idProfesor=profesores.id AND usuarios.id='.$id);
            $query->execute();

            $resultado=$query->fetchAll();

            return($resultado);
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function insertar_parte($fecha,$fechaComunicacion,$fechaConfirmacion,$descripcion,$tareas,$horaSalidaAula,$horaLlegadaJefatura,$horaLlegadaAulaConvivencia,$formato,$observaciones,$puntos,$estado,$tipo,$idAlumno,$idProfesor){
       try {
            $query = $this->dbh->prepare('insert into partes (fecha,fechaComunicacion,fechaConfirmacion,descripcion,tareas,horaSalidaAula,horaLlegadaJefatura,horaLlegadaAulaConvivencia,formato,observaciones,puntos,estado,tipo,idAlumno,idProfesor) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
            $query->bindParam(1, $fecha);
            $query->bindParam(2, $fechaComunicacion);
            $query->bindParam(3, $fechaConfirmacion);
            $query->bindParam(4, $descripcion);
            $query->bindParam(5, $tareas);
            $query->bindParam(6, $horaSalidaAula);
            $query->bindParam(7, $horaLlegadaJefatura);
            $query->bindParam(8, $horaLlegadaAulaConvivencia);
            $query->bindParam(9, $formato);
            $query->bindParam(10, $observaciones);
            $query->bindParam(11, $puntos);
            $query->bindParam(12, $estado);
            $query->bindParam(13, $tipo);
            $query->bindParam(14, $idAlumno);
            $query->bindParam(15, $idProfesor);
            $query->execute();
            //$this->dbh = null;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

}
