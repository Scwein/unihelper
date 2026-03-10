<?php 

class Db
{
    private $conn;
    private $stmt;

    public static $instance = null;

    private function __construct() {}
    private function __clone() {}
    public function __wakeup() {}

    public static function getInstance()
    {
        if (self::$instance === null)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConn(array $db_config)
    {
        if ($this->conn instanceof PDO) {
            return $this;
        }
        $dsn = "mysql:host={$db_config['host']};dbname={$db_config['dbname']};charset={$db_config['charset']}";
        $this->conn = new PDO($dsn, $db_config['username'], $db_config['password'], $db_config['options']);
        return $this;
    }

    public function query($query, $params = [])
    {
        $this->stmt = $this->conn->prepare($query);
        $this->stmt->execute($params);
        return $this;
    }

    public function find()
    {
        return $this->stmt->fetch();
    }

    public function findAll()
    {
        return $this->stmt->fetchAll();
    }

    public function findOrFail()
    {
        $res = $this->find();
        if(!$res) {
            abort();
        } else {
            return $res;
        }
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }

    public function columnCount()
    {
        return $this->stmt->fetchColumn();
    }
}