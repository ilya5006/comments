<?php
require __DIR__ . '/../../config.php';
class Database
{
    private static $dbh;

    private static function getDbh()
    {
        return static::$dbh;
    }

    private static function setDbh($value)
    {
        static::$dbh = $value;
    }

    private static function connection()
    {
        if (empty(static::getDbh())) {
            try {
                static::setDbh(new \PDO(
                    'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST,
                    DB_USER,
                    DB_PASSWORD
                ));
            } catch (\PDOException $e) {
                echo 'Database connection failed: ' . $e->getMessage();
            }
        }
    }

    public static function select(string $table, string $selector = '*', string $condition = '')
    {
        static::connection();

        $query = 'SELECT ' . $selector . ' FROM ' . $table;
        $query .= ($condition != '') ? (' WHERE ' . $condition) : '';

        $statement = static::$dbh->query($query);
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function insert(string $table, string $values)
    {
        static::connection();

        $query = 'INSERT INTO ' . $table . ' VALUES (' . $values .  ')';
        static::$dbh->query($query);
    }
}
