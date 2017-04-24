<?php
class UsuarioPerfiles
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
    public function anadir_usuario_perfiles($usuario,$perfil)
    {

        try {
            $query = $this->dbh->prepare('insert into usuarioperfiles values(?,?)');
            $query->bindParam(1, $usuario);
            $query->bindParam(2, $perfil);

            $query->execute();
            //$this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function get_usuario_perfiles($usuario)
    {

        try {
            $query = $this->dbh->prepare('select * from usuarioperfiles where usuario= ?');
            $query->bindParam(1, $usuario);
            $query->execute();
            $resultado=$query->fetchAll();
            return($resultado);
            //$this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }


}
