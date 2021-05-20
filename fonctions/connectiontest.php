<!-- test db orienté objet -->
<!-- a ne pas supprimé -->

<?php 
class DB{

    private $host = 'localhost';   
    private $username = 'admin';   
    private $password = '0000';   
    private $database = 'admin';
    private $db;

    public function __construct($host = null, $username = null, $password = null, $database = null){
        if($host != null){
            $this -> host = $host;
            $this -> username = $username;
            $this -> password = $password;
            $this -> database = $database;

        }

        try{
            $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, $this->password, array(
                PDO::MYSQL_ATTR_INIT_COMMAND   => 'SET NAMES UTD8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
            ));
        }catch(PDOException $e){
            die('Impossible de se connecter à la base de donnée');
        }
    }
    public function query($sql){
        $req  =$this->db->prepare($sql);
        $req->execute();
        return $req->fetchAll();

    }

}

