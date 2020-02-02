<?php


class siteDB
{

    const DB_USER = "root";
    const DB_PASS = "";
    private $pdo_object;
    private $dsn;


    public function __construct()
    {
        try {
            $this->dsn = "mysql:host=localhost;dbname=samawi_news";
            $this->pdo_object = new PDO($this->dsn, siteDB::DB_USER, siteDB::DB_PASS);
            $this->pdo_object->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->pdo_object->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo_object->exec("SET NAMES utf8");
        }
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }


    public function getData($sql,$args = array())
    {
        try
        {
            $statement = $this->pdo_object->prepare($sql);
            $statement->execute($args);
            return $statement->fetchAll();
        }

        catch (PDOException $e)
        {
            $e->getMessage();
        }
    }

    public function insertToTable($sql, $args = array())
    {
        try {
            $statement = $this->pdo_object->prepare($sql);
            $statement->execute($args);
            return $statement->rowCount();

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    public function rowCount($sql,$args = array())
    {
        try
        {
            $statement = $this->pdo_object->prepare($sql);
            $statement->execute($args);
            return $statement->rowCount();
        }

        catch (PDOException $e)
        {
            $e->getMessage();
        }
    }


    public function deleteData($sql,$args = array())
    {
        try {

            $statement =  $this->pdo_object->prepare($sql);
            $statement->execute($args);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public function updateData($sql, $args = array())
    {
        $statement = $this->pdo_object->prepare($sql);
        $statement->execute($args);
       return $statement->rowcount();
    }


}

?>