<?php
class Respuestas
{
    private static $instancia;
    private $dbh;

    private function __construct()
    {
    	try {
            $this->dbh = new PDO('mysql:host=localhost;dbname=sabiogc', 'root', '');
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

    public function get_respuestas($id)
    {
        try {
            $query = $this->dbh->prepare('select * from respuestas where idPregunta='.$id);
            $query->execute();

            $resultado=$query->fetchAll(PDO::FETCH_COLUMN, 1);

            return($resultado);
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function get_respuesta($id)
    {
        try {
            $query = $this->dbh->prepare('select * from respuestas where idPregunta='.$id.' order by valida desc');
            $query->execute();

            $resultado=$query->fetchAll();

            return($resultado);
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function get_id_respuestas($id)
    {
        try {
            $query = $this->dbh->prepare('select * from respuestas where idPregunta='.$id.' limit 1');
            $query->execute();

            $resultado=$query->fetchAll(PDO::FETCH_COLUMN, 2);

            return($resultado);
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function ins_respuesta($id,$respuesta,$valida)
    {
     try {
        $query = $this->dbh->prepare('insert into respuestas (respuesta,idPregunta,valida) values (?,?,?)');
        $query->bindParam(1, $respuesta);
        $query->bindParam(2, $id);
        $query->bindParam(3, $valida);
        $query->execute();
        //$this->dbh = null;
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
public function com_respuestas($id,$respuesta)
{
    try {
        $query = $this->dbh->prepare('select valida from respuestas where idPregunta='.$id.' and respuesta="'.$respuesta.'"');
        $query->execute();

        $resultado=$query->fetch(PDO::FETCH_ASSOC);

        return($resultado);
        $this->dbh = null;
    }catch (PDOException $e) {
        $e->getMessage();
    }
}
public function edita_respuesta($id,$nombre,$usuario,$password,$email)
{
    /*try {
        $query = $this->dbh->prepare('update expertos SET nombre = ?, usuario = ?, password = ?, email = ? WHERE id = ?');
        $query->bindParam(1, $nombre);
        $query->bindParam(2, $usuario);
        $query->bindParam(3, $password);
        $query->bindParam(4, $email);
        $query->bindParam(5, $id);
        $query->execute();
        $this->dbh = null;
    } catch (PDOException $e) {
        $e->getMessage();
    }*/
}
public function borrar_respuesta($id)
{
    try {
        $query = $this->dbh->prepare('delete from respuestas where idPregunta = ?');
        $query->bindParam(1, $id);
        $query->execute();
        //$this->dbh = null;
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
}
