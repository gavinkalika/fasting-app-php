<?php

namespace App\Fast\DataSource;


use App\Fast\Web\Exception\DatabaseConnectionError;
use mysqli;

/**
 * @todo    : write description
 * @package App\Fast\DataSource
 */
class MysqlConnection
{

    /**
     * @var mysqli
     */
    private $conn;

    /**
     * MysqlConnection constructor.
     *
     * @param string $host
     * @param string $user
     * @param string $password
     * @param string $dbName
     *
     * @throws DatabaseConnectionError
     */
    public function __construct(string $host, string $user, string $password, string $dbName)
    {
        $this->conn = new mysqli($host, $user, $password, $dbName);

        if ($this->conn->connect_errno) {
            throw new DatabaseConnectionError();
        }

        $this->conn->autocommit(false);
    }

    /**
     * @param string $sql
     */
    public function execute(string $sql): void
    {
        $this->conn->query($sql);
    }

}