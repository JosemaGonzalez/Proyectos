<?php
class Usuario
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
    public function anadir_usuario($nombre,$psw)
    {
        try {
            $query = $this->dbh->prepare('insert into usuarios values("'.$nombre.'@gamil.com",?,PASSWORD(?))');
            $query->bindParam(1, $nombre);
            $query->bindParam(2, $psw);


            $query->execute();
            //$this->dbh = null;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function get_usuarios($usuario,$pass)
    {
        try {
            $query = $this->dbh->prepare('select * from usuarios where usuario="'.$usuario.'" and pwd=PASSWORD("'.$pass.'")');
            $query->execute();

            $resultado=$query->fetch();

            return($resultado);
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
