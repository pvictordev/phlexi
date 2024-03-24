<?php
// connect to the db
class Database
{
    // created a propery to make the PDO accessible from other scope
    public $connection;

    // every time when instance is initialized i want to run __construct
    public function __construct()
    {
        // initialize the PDO instance
        $dsn = 'mysql:host=localhost;port=3306;dbname=sa-project;user=root;charset=utf8mb4';

        $this->connection = new PDO($dsn);
    }
    public function query($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        // fetch users
        return $statement;
    }
}
