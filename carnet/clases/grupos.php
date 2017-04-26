<?php
class Grupos
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

    public function get_grupos()
    {
        try {
            $query = $this->dbh->prepare('select * from grupos');
            $query->execute();
            $resultado=$query->fetchAll();
            return $resultado;
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
