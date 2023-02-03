<?php
//CONEXION A LA BASE DE DATOS
function connect(){//COnexion para el formulario
    $hostname="162.241.61.210";
    $usuariodb="jygnuest_root";
    $passworddb=")k?v&RG5Fmg&";
    $dbname="jygnuest_boda";
    
    //Conexion
    $conectar=mysqli_connect($hostname,$usuariodb,$passworddb,$dbname);
    return $conectar;
}
class DB{//Esta es la clase para la conexion del login
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host     = '162.241.61.210';
        $this->db       = 'jygnuest_boda';
        $this->user     = 'jygnuest_root';
        $this->password = ")k?v&RG5Fmg&";
        $this->charset  = 'utf8mb4';
    }
    function conectar(){
    
        try{
            
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);
    
            return $pdo;

        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }   
    }
}
?>