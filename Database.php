<?php
// connect to the db
class Database
{
    // created a propery to make the PDO accessible from other scope
    public $connection;

    // every time when instance is initialized i want to run __construct
    public function __construct($config, $username = 'root', $password = '')
    {
        //data source name
        $dsn = 'mysql:' . http_build_query($config, '', ';'); // mysql:host=localhost;port=3306;dbname=sa-project;charset=utf8mb4

        // initialize the PDO instance
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }
    public function query($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        // fetch users
        return $statement;
    }
}
