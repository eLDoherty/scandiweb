<?php
// Database wrapper
class Database {

    private $host = HOST;
    private $dbname = DBNAME;
    private $username = USERNAME;
    private $password = PASSWORD;

    // following php.net for connect db with PDO
    private $dbh; // Database Handler
    private $stmt; // Statement

    public function __construct() {
        // Data Source Name
        $dsn = 'mysql:host='. $this->host .';dbname=' . $this->dbname;
        // Optimation Connection to Database
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->dbh = new PDO( $dsn, $this->username , $this->password , $option );
        } catch( PDOException $e ) {
            die($e->getMessage());
        }
    }
    // method for query (CRUD) on parameter $query
    public function query($query) {
        $this->stmt = $this->dbh->prepare($query);
    }

    // Binding data
    // Make more secure from SQL Injection <== I read from some article when i got error in this class :D
    // Execution query after clear the string
    public function bind( $param , $value , $type = null) {
        if( is_null($type) ) {
            switch( true ){
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue( $param, $value , $type );
    }
    //  Execute the statement
    public function execute(){
        $this->stmt->execute();
    }
    // Method for Fetching Data
    public function resultSet() {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function rowCount() {
        return $this->stmt->rowCount();
    }
}