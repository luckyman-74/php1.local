<?php

class DB
{
    protected $dbh;

//В конструкторе устанавливается и сохраняется соединение с базой данных. Параметры соединения берем из файла конфига
    public function __construct()
    {
        $cfg = require __DIR__ . '/../config/config.php';
        $this->dbh = new PDO(
            'mysql:dbname=' . $cfg['db']['dbName'] . ';host=' . $cfg['db']['host'],
            $cfg['db']['userName'],
            $cfg['db']['password']);
    }

// выполняет запрос и возвращает true либо false в зависимости от того, удалось ли выполнение
    public function execute(string $sqlQuery, array $data = []): bool
    {
        return $this->dbh->prepare($sqlQuery)->execute($data);
    }


    //выполняет запрос, подставляет в него данные $data, возвращает данные результата запроса либо false, если выполнение не удалось.
    public function query(string $sqlQuery, array $data = [])
    {
        $sth = $this->dbh->prepare($sqlQuery);

        if (!$sth->execute($data)) {
            return false;
        }

        return $sth->fetchAll();

    }
}



