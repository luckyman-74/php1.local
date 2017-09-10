<?php
require __DIR__ . '/Config.php';

class DB
{
    protected $dbh;

//В конструкторе устанавливается и сохраняется соединение с базой данных. Параметры соединения берем из файла конфига
    public function __construct()
    {
        $cfg = new Config;

        $this->dbh = new PDO(
            'mysql:dbname=' . $cfg->data['db']['dbname'] . ';host=' . $cfg->data['db']['host'],
            $cfg->data['db']['user'],
            $cfg->data['db']['password']);
    }

// выполняет запрос и возвращает true либо false в зависимости от того, удалось ли выполнение
    public function execute(string $sql): bool
    {

    }

    public function query(string $sql, array $data) //выполняет запрос, подставляет в него данные $data, возвращает данные результата запроса либо false, если выполнение не удалось.
    {

    }

}
