<?php


class Db
{
    protected $dbh;

    public function __construct()
    {
        $config = include(__DIR__ . '/../config.php');
        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'];
        $this->dbh = new PDO(
            $dsn,
            $config['user'],
            $config['password']

        );
    }

    public function execute(string $sql)
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute();
    }

    public function query($sql, array $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll();

    }
}