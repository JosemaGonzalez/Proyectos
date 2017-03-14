<?php
class Experto
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

    public function get_experto($id)
    {
        try {
            $query = $this->dbh->prepare('select * FROM expertos where id='.$id);
            $query->execute();

            $array=$query->fetch(PDO::FETCH_ASSOC);

            return $array;
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function get_expertos($usuario,$password)
    {
        try {
            $query = $this->dbh->prepare('select id from expertos where usuario="'.$usuario.'" and  password="'.$password.'" and validada=1');
            $query->execute();
            $resultado=$query->fetch();
            return($resultado);
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function get_todos_expertos()
    {
        try {
            $query = $this->dbh->prepare('select * FROM expertos');
            $query->execute();

            $array=$query->fetchAll();

            return $array;
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function anadir_experto($nombre,$usuario,$password,$email)
    {
        try {
            $query = $this->dbh->prepare('insert into expertos values(null,?,?,?,?,0)');
            $query->bindParam(1, $nombre);
            $query->bindParam(2, $usuario);
            $query->bindParam(3, $password);
            $query->bindParam(4, $email);

            $query->execute();
            //$this->dbh = null;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function get_ultimo_experto(){
       try {
        $query = $this->dbh->prepare('select MAX(id) as id FROM expertos;');
        $query->execute();

        $array=$query->fetch();

        return $array;
        //$this->dbh = null;
    }catch (PDOException $e) {
        $e->getMessage();
    }
}
public function anadir_experto_categoria($id,$categorias)
{

    try {
        $query = $this->dbh->prepare('insert into expcategorias values(null,?,?);');
        $query->bindParam(1, $id);
        $query->bindParam(2, $categorias);

        $query->execute();
        //$this->dbh = null;
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
public function validar_exp($id)
{
    try {
        $query = $this->dbh->prepare('update expertos SET validada = 1 WHERE id = ?');
        $query->bindParam(1, $id);
        $query->execute();
        $this->dbh = null;
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
public function validar_cam_exp($id,$valido)
{
    try {
        $query = $this->dbh->prepare('update expertos SET validada = ? WHERE id = ?');
        $query->bindParam(1, $valido);
        $query->bindParam(2, $id);
        $query->execute();
        $this->dbh = null;
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
public function edita_exp($id,$nombre,$usuario,$password,$email)
{
    try {
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
    }
}
public function borrar_exp($id)
{
    try {
        $query = $this->dbh->prepare('delete from expertos where id = ?');
        $query->bindParam(1, $id);
        $query->execute();
        $this->dbh = null;
    } catch (PDOException $e) {
        $e->getMessage();
    }
}

}
