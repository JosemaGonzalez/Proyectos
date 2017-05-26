<?php
class rPartesSanciones
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
    public function insertar_rPartesSanciones($idParte,$idSancion)
    {
     try {
        $query = $this->dbh->prepare('insert into rpartessanciones (idParte,idSancion) values (?,?)');
        $query->bindParam(1, $idParte);
        $query->bindParam(2, $idSancion);
        $query->execute();
            //$this->dbh = null;
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
}
