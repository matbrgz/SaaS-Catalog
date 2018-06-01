<?php

namespace Asw\Database;

use PDO;

class Connection {
    const INIFILE = './config/database.ini';
    private $iniData;

    public function __construct() {
        $this->iniData = parse_ini_file(self::INIFILE);
    }

    public function connection() {
        $pdo = new PDO($this->iniData['driver'].':host='.$this->iniData['localhost'].';dbname='.$this->iniData['airprotocol'], $this->iniData['root'], $this->iniData['']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        return $pdo;
    }
}