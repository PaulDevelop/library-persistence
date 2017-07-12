<?php

namespace Com\PaulDevelop\Library\Persistence;

/**
 * MysqlStorage
 *
 * @package  Com\PaulDevelop\Library\Persistence
 * @category Application
 * @author   Rüdiger Scheumann <code@pauldevelop.com>
 * @license  http://opensource.org/licenses/MIT MIT
 */
abstract class MysqlStorage
{
    private $host;
    private $user;
    private $password;
    private $database;

    private static $connection = null;

    protected function __construct($host = '', $user = '', $password = '', $database = '')
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
    }

    protected function getConnection()
    {
        if (self::$connection == null) {
            self::$connection = new \mysqli(
                $this->host,
                $this->user,
                $this->password,
                $this->database
            );
        }
        self::$connection->set_charset('utf8mb4');

        return self::$connection;
    }
}
