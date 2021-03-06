<?php
class rPartesConductas
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

    public function insertar_rPartesConductas($idParte,$idConducta)
    {
     try {
        $query = $this->dbh->prepare('insert into rpartesconductas (idParte,idConducta) values (?,?)');
        $query->bindParam(1, $idParte);
        $query->bindParam(2, $idConducta);
        $query->execute();
            //$this->dbh = null;
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
}
