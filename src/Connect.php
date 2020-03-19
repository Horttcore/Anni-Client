<?php
namespace Anni;

class Connect
{
    private static $instance = null;

    private $connection = null;

    public static function to(string $connection)
    {
        $instance = Connect::getInstance();
        $instance->setConnection($connection);
        return $instance;
    }


    public static function getInstance(): Connect
    {
        if (!self::$instance) {
            self::$instance = new Connect();
        }

        return self::$instance;
    }

    public function setConnection(string $connection): void
    {
        $this->connection = $connection;
    }

    public function getConnection(): ?string
    {
        return $this->connection;
    }

    public function isOpen(): bool
    {
        return boolval($this->getConnection());
    }
}
