<?php

namespace App;

class Db
{
    /**
     * @var \PDO
     */
    protected $dbh;

    /**
     * Db constructor.
     */
    public function __construct()
    {
        $config = Config::instance();
        $dbConfig = $config->data['db'];
        $dsn = 'mysql:host=' . $dbConfig['host'] . ';port=' . $dbConfig['port'] . ';dbname=' . $dbConfig['dbname'];
        $this->dbh = new \PDO($dsn, $dbConfig['userName'], $dbConfig['password']);
        $this->dbh->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
    }


    /**
     * @param string $sql
     * @param array $params
     * @param null $class
     * @return array
     */
    public function query(string $sql, array $params = [], $class = null): array
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);

        if (isset($class)) {
            $data = $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        } else {
            $data = $sth->fetchAll();
        }

        return $data;
    }

    /**
     * @param string $sql
     * @param array $params
     * @return bool
     */
    public function execute(string $sql, array $params = []): bool
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }

    /**
     * @return string
     */
    public function lastInsertId(): string
    {
        return $this->dbh->lastInsertId();
    }
}
