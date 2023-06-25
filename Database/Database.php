<?php

class Database
{
    private $username;
    private $host;
    private $password;
    private $databaseName;

    private $connection;

    public function __construct()
    {
        $this->host = "localhost";
        $this->username = "tranzpay";
        $this->password = "AJkFS6k23h4XrUdfKM8EfU4N9";
        $this->databaseName = "test_db";

        $this->connect();
    }

    public function insertMessage($message)
    {
        $statement = $this->connection->prepare("INSERT INTO testMessages (message) VALUES (?)");

        $statement->bind_param("s", $message);

        $statement->execute();

        if ($statement->affected_rows <= 0) {
            die("Failed to insert message.");
        }

        $statement->close();
    }

    public function lastInsertedMessage()
    {
        $statement = $this->connection->prepare("SELECT message FROM testMessages WHERE id = LAST_INSERT_ID()");

        $message = null;

        $statement->execute();
        $statement->bind_result($message);
        $statement->fetch();

        $statement->close();

        return $message ?? "";
    }

    private function connect()
    {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->databaseName);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }
}