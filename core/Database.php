<?php

namespace Core;

class Database extends Connection {
    protected $_conn;

    use QueryBuilder;

    // Connect to database
    public function __construct()
    {
        $this->_conn = Connection::getInstance();
    }

    public function query($sql)
    {
        try {
            $statement = $this->_conn->prepare($sql);
            $statement->execute();
            return $statement;
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

}

